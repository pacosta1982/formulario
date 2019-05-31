<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersona_estadoRequest;
use App\Http\Requests\UpdatePersona_estadoRequest;
use App\Repositories\Persona_estadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\Persona;
use Flash;
use Response;

class Persona_estadoController extends AppBaseController
{
    /** @var  Persona_estadoRepository */
    private $personaEstadoRepository;

    public function __construct(Persona_estadoRepository $personaEstadoRepo)
    {
        $this->personaEstadoRepository = $personaEstadoRepo;
    }

    /**
     * Display a listing of the Persona_estado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $personaEstados = $this->personaEstadoRepository->all();

        return view('persona_estados.index')
            ->with('personaEstados', $personaEstados);
    }

    /**
     * Show the form for creating a new Persona_estado.
     *
     * @return Response
     */
    public function create()
    {
        /**prueba, cualquier cosa, descomentar el return */
        $categorias = Estado::all();
        $preguntaid='';
        return view('persona_estados.create',compact('categorias','preguntaid'));
       // return view('persona_estados.create',compact());//
    }

    /**
     * Store a newly created Persona_estado in storage.
     *
     * @param CreatePersona_estadoRequest $request
     *
     * @return Response
     */
    public function store(CreatePersona_estadoRequest $request)
    {
        $input = $request->all();

        $personaEstado = $this->personaEstadoRepository->create($input);

        Flash::success('Persona Estado saved successfully.');

        return redirect(route('personaEstados.index'));
    }

    /**
     * Display the specified Persona_estado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personaEstado = $this->personaEstadoRepository->find($id);

        if (empty($personaEstado)) {
            Flash::error('Persona Estado not found');

            return redirect(route('personaEstados.index'));
        }

        return view('persona_estados.show')->with('personaEstado', $personaEstado);
    }

    /**
     * Show the form for editing the specified Persona_estado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaEstado = $this->personaEstadoRepository->find($id);

        if (empty($personaEstado)) {
            Flash::error('Persona Estado not found');

            return redirect(route('personaEstados.index'));
        }
        /**cualquier cosa descomenta return view y eliminar el resto */
        $categorias = Estado::all();
        $preguntaid = $personaEstado->estado_id;

        $personas=Persona::all();
        $teto=Persona::all();
        $personaid=$personaEstado->persona_id;
        return view('persona_estados.edit',compact('categorias','personaEstado','preguntaid','personaid','personas','teto'));
      
    }

    /**
     * Update the specified Persona_estado in storage.
     *
     * @param int $id
     * @param UpdatePersona_estadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersona_estadoRequest $request)
    {
        $personaEstado = $this->personaEstadoRepository->find($id);

        if (empty($personaEstado)) {
            Flash::error('Persona Estado not found');

            return redirect(route('personaEstados.index'));
        }

        $personaEstado = $this->personaEstadoRepository->update($request->all(), $id);

        Flash::success('Persona Estado updated successfully.');

        return redirect(route('personaEstados.index'));
    }

    /**
     * Remove the specified Persona_estado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaEstado = $this->personaEstadoRepository->find($id);

        if (empty($personaEstado)) {
            Flash::error('Persona Estado not found');

            return redirect(route('personaEstados.index'));
        }

        $this->personaEstadoRepository->delete($id);

        Flash::success('Persona Estado deleted successfully.');

        return redirect(route('personaEstados.index'));
    }
}
