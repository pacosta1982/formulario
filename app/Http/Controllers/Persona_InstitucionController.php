<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersona_InstitucionRequest;
use App\Http\Requests\UpdatePersona_InstitucionRequest;
use App\Repositories\Persona_InstitucionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Persona_InstitucionController extends AppBaseController
{
    /** @var  Persona_InstitucionRepository */
    private $personaInstitucionRepository;

    public function __construct(Persona_InstitucionRepository $personaInstitucionRepo)
    {
        $this->personaInstitucionRepository = $personaInstitucionRepo;
    }

    /**
     * Display a listing of the Persona_Institucion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $personaInstitucions = $this->personaInstitucionRepository->all();

        return view('persona__institucions.index')
            ->with('personaInstitucions', $personaInstitucions);
    }

    /**
     * Show the form for creating a new Persona_Institucion.
     *
     * @return Response
     */
    public function create()
    {
        return view('persona__institucions.create');
    }

    /**
     * Store a newly created Persona_Institucion in storage.
     *
     * @param CreatePersona_InstitucionRequest $request
     *
     * @return Response
     */
    public function store(CreatePersona_InstitucionRequest $request)
    {
        $input = $request->all();

        $personaInstitucion = $this->personaInstitucionRepository->create($input);

        Flash::success('Persona  Institucion saved successfully.');

        return redirect(route('personaInstitucions.index'));
    }

    /**
     * Display the specified Persona_Institucion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personaInstitucion = $this->personaInstitucionRepository->find($id);

        if (empty($personaInstitucion)) {
            Flash::error('Persona  Institucion not found');

            return redirect(route('personaInstitucions.index'));
        }

        return view('persona__institucions.show')->with('personaInstitucion', $personaInstitucion);
    }

    /**
     * Show the form for editing the specified Persona_Institucion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaInstitucion = $this->personaInstitucionRepository->find($id);

        if (empty($personaInstitucion)) {
            Flash::error('Persona  Institucion not found');

            return redirect(route('personaInstitucions.index'));
        }

        return view('persona__institucions.edit')->with('personaInstitucion', $personaInstitucion);
    }

    /**
     * Update the specified Persona_Institucion in storage.
     *
     * @param int $id
     * @param UpdatePersona_InstitucionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersona_InstitucionRequest $request)
    {
        $personaInstitucion = $this->personaInstitucionRepository->find($id);

        if (empty($personaInstitucion)) {
            Flash::error('Persona  Institucion not found');

            return redirect(route('personaInstitucions.index'));
        }

        $personaInstitucion = $this->personaInstitucionRepository->update($request->all(), $id);

        Flash::success('Persona  Institucion updated successfully.');

        return redirect(route('personaInstitucions.index'));
    }

    /**
     * Remove the specified Persona_Institucion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaInstitucion = $this->personaInstitucionRepository->find($id);

        if (empty($personaInstitucion)) {
            Flash::error('Persona  Institucion not found');

            return redirect(route('personaInstitucions.index'));
        }

        $this->personaInstitucionRepository->delete($id);

        Flash::success('Persona  Institucion deleted successfully.');

        return redirect(route('personaInstitucions.index'));
    }
}
