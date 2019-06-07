<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;
use App\Repositories\PersonaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\ImageGallery;
use App\Models\Persona;
use App\Models\Parentesco;
use App\Models\Persona_Parentesco;
use App\Models\Persona_Institucion;
use App\Models\Institucion_Cat;
use App\Models\Cuestionario;
use App\Models\Ciudad;
use App\Models\Discapacidad;
use App\Models\Enfermedad;
use App\Models\Persona_Discapacidad;
use App\Models\PersonaEnfermedad;
use Flash;
use Auth;
use Response;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class PersonaController extends AppBaseController
{
    /** @var  PersonaRepository */
    private $personaRepository;

    public function __construct(PersonaRepository $personaRepo)
    {
        $this->personaRepository = $personaRepo;
    }

    /**
     * Display a listing of the Persona.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        //$personas = Persona::where('id',$id)->get();
        $personas = Persona_Parentesco::where('postulante_id',$id)
        ->where('parentesco_id',1)
        ->get();
        //$images = ImageGallery::get();
        return view('personas.index',compact('personas'));
            //->with('personas', $personas);
    }

    public function storepreguntas(Request $request)
    {

            $campos = Cuestionario::where('persona_id',$request->id);
            $data = $request->except('_token','id');
            //dd($data);
            if($campos->count() > 0){
                //echo 'Hay';
                for ($i=4; $i < 12 ; $i++) {

                    $affectedRows = Cuestionario::where('pregunta_id', '=', $i)
                    ->where('persona_id', '=' , $request->id)
                    ->update(array('value' => $data['q'.$i],
                                   'text_value' => $data['q'.$i.'_text']));

                }
            }else{
                for ($i=4; $i < 12 ; $i++) {
                    $question = new Cuestionario;
                    $question->pregunta_id = $i;
                    $question->persona_id = $request->id;
                    $question->value = $data['q'.$i];
                    $question->text_value = $data['q'.$i.'_text'];
                    $question->save();
                }
            }


            $id = $request->id;
            $persona = $this->personaRepository->find($id);

            if (empty($persona)) {
                Flash::error('Persona not found');

                return redirect(route('personas.index'));
            }
            Flash::success('Cuestionario Actualizado Correctamente');
            $images = ImageGallery::get();
            $personas = Persona_Parentesco::where('postulante_id',$id)->get();

            return view('personas.show',compact('persona','images','personas'));
    }

    /**
     * Show the form for creating a new Persona.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        //obtener el hash
                $headers = [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ];

                $GetOrder = [
                    'username' => 'senavitatconsultas',
                    'password' => 'S3n4vitat'
                ];
                $client = new client();
                $res = $client->post('http://10.1.79.7:8080/mbohape-core/sii/security', [
                    'headers' => $headers,
                    'json' => $GetOrder,
                    'decode_content' => false
                ]);
                //var_dump((string) $res->getBody());
                $contents = $res->getBody()->getContents();
                $book = json_decode($contents);
                //echo $book->token;
                if($book->success == true){
                    //obtener la cedula
                    $headerscedula = [
                        'Authorization' => 'Bearer '.$book->token,
                        'Accept' => 'application/json',
                        'decode_content' => false
                    ];
                    $cedula = $client->get('http://10.1.79.7:8080/frontend-identificaciones/api/persona/obtenerPersonaPorCedula/'.$request->cedula, [
                        'headers' => $headerscedula,
                    ]);
                    $datos=$cedula->getBody()->getContents();
                    $datospersona = json_decode($datos);
                    if(isset($datospersona->obtenerPersonaPorNroCedulaResponse->return->error)){
                        Flash::error($datospersona->obtenerPersonaPorNroCedulaResponse->return->error);
                        return redirect()->back();
                    }else{
                        $nombre = $datospersona->obtenerPersonaPorNroCedulaResponse->return->nombres;
                        $apellido = $datospersona->obtenerPersonaPorNroCedulaResponse->return->apellido;
                        $cedula = $datospersona->obtenerPersonaPorNroCedulaResponse->return->cedula;
                        $sexo = $datospersona->obtenerPersonaPorNroCedulaResponse->return->sexo;
                        $fecha = $datospersona->obtenerPersonaPorNroCedulaResponse->return->fechNacim;
                        $nac = $datospersona->obtenerPersonaPorNroCedulaResponse->return->nacionalidadBean;
                        $est = $datospersona->obtenerPersonaPorNroCedulaResponse->return->estadoCivil;
                    }

                    //$nombre = $datos->nombres;
                    //echo $cedula->getBody()->getContents();
                }else{
                    Flash::success($book->message);
                    return redirect()->back();
                }


        $parentesco = Parentesco::where('name','Postulante')->get();
        $escolaridad = Institucion_Cat::all();
        $discapacidad = Discapacidad::all();
        $enfermedad = Enfermedad::all();
        $ciudad = Ciudad::where('CiuDptoID',11)
                        ->where('status', true)
                        ->get();
        $idciudad='';
        $idparentesco=1;
        $idescol='';
        $iddiscap='';
        $idenfermedad='';
        return view('personas.create',compact('parentesco','escolaridad','nombre','apellido',
        'cedula','sexo','fecha','nac','est','ciudad','idciudad','idparentesco','idescol','discapacidad',
        'iddiscap','idenfermedad','enfermedad'));
    }


    public function createmiembro($id)
    {
        $postulante_id=$id;
        $parentesco = Parentesco::all();
        $escolaridad = Institucion_Cat::all();
        return view('personas.createmiembro',compact('postulante_id','parentesco','escolaridad'));
    }

    /**
     * Store a newly created Persona in storage.
     *
     * @param CreatePersonaRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonaRequest $request)
    {
        $input = $request->all();

        $persona = $this->personaRepository->create($input);

        $addmiembro = new Persona_Parentesco();
        $addmiembro->cantidad=0;
        $addmiembro->parentesco_id=1;
        $addmiembro->persona_id=$persona->id;
        $addmiembro->postulante_id=Auth::user()->id;
        $addmiembro->save();

        $addescolaridad = new Persona_Institucion();
        $addescolaridad->cantidad=0;
        $addescolaridad->institucion_id=$request->institucion_id;
        $addescolaridad->persona_id=$persona->id;
        $addescolaridad->save();

        $discapacidad = new Persona_Discapacidad();
        $discapacidad->discapacidad_id=$request->discapacidad;
        $discapacidad->persona_id=$persona->id;
        $discapacidad->save();

        $enfermedad = new PersonaEnfermedad();
        $enfermedad->enfermedad_id=$request->enfermedad_id;
        $enfermedad->persona_id=$persona->id;
        $enfermedad->save();

        Flash::success('Postulante Creado Exitosamente...');

        return redirect(route('personas.index'));
    }

    public function storemiembro(CreatePersonaRequest $request)
    {
        $input = $request->all();

        $persona = $this->personaRepository->find($request->id);
        $miembro = $this->personaRepository->create($input);

        $addmiembro = new Persona_Parentesco();
        $addmiembro->cantidad=0;
        $addmiembro->parentesco_id=$request->parentesco_id;
        $addmiembro->persona_id=$miembro->id;
        $addmiembro->postulante_id=$id = Auth::user()->id;
        $addmiembro->save();

        $addescolaridad = new Persona_Institucion();
        $addescolaridad->cantidad=0;
        $addescolaridad->institucion_id=$request->institucion_id;
        $addescolaridad->persona_id=$miembro->id;
        $addescolaridad->save();
        //var_dump($miembro->id);

        Flash::success('Miembro agregado correctamente.');

        //return redirect(route('personas.show'));
        $images = ImageGallery::get();
        $personas = Persona_Parentesco::all();
        return view('personas.show',compact('persona','images','personas'));
    }

    /**
     * Display the specified Persona.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }
        $images = ImageGallery::get();
        $personas = Persona_Parentesco::where('postulante_id',$id)->get();

        return view('personas.show',compact('persona','images','personas'));//->with('persona', $persona);
    }

    /**
     * Show the form for editing the specified Persona.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }
        $parentesco = Parentesco::where('name','Postulante')->get();
        $escolaridad = Institucion_Cat::all();
        $editciudad = Ciudad::where('CiuId',$persona->ciudad)->first();
        $idciudad = $editciudad->CiuId;
        $editparentesco = Parentesco::where('id',1)->first();
        //var_dump($editparentesco->id);
        $idparentesco = $editparentesco->id;
        $escol = Persona_Institucion::where('persona_id',$persona->id)->first();
        $idescol=$escol->institucion_id;
        //$book = json_decode($editciudad);
        //var_dump($book['CiuId']);
        //Ciudad::where('CiuId',$persona->ciudad)->get();
        $ciudad = Ciudad::where('CiuDptoID',11)
                        ->where('status', true)
                        ->get();
        $discapacidad = Discapacidad::all();
        $enfermedad = Enfermedad::all();
        $dis = Persona_Discapacidad::where('persona_id',$persona->id)->first();
        $iddiscap=$dis->discapacidad_id;
        $enfe = PersonaEnfermedad::where('persona_id',$persona->id)->first();
        $idenfermedad=$enfe->enfermedad_id;


        return view('personas.edit',compact('persona','ciudad','parentesco',
        'escolaridad','idciudad','idparentesco','idescol','discapacidad','enfermedad','iddiscap','idenfermedad'));
    }

    /**
     * Update the specified Persona in storage.
     *
     * @param int $id
     * @param UpdatePersonaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonaRequest $request)
    {
        $persona = $this->personaRepository->find($id);
        var_dump('ejemplo');
        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $persona = $this->personaRepository->update($request->all(), $id);
        Persona_Institucion::where('persona_id', $id)->update(['institucion_id' => $request->institucion_id]);
        Persona_Discapacidad::where('persona_id', $id)->update(['discapacidad_id' => $request->discapacidad]);
        PersonaEnfermedad::where('persona_id', $id)->update(['enfermedad_id' => $request->enfermedad_id]);

        Flash::success('Persona updated successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Remove the specified Persona from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $this->personaRepository->delete($id);

        Flash::success('Persona deleted successfully.');

        return redirect(route('personas.index'));
    }
}
