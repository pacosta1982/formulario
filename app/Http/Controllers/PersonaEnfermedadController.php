<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonaEnfermedadRequest;
use App\Http\Requests\UpdatePersonaEnfermedadRequest;
use App\Repositories\PersonaEnfermedadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PersonaEnfermedadController extends AppBaseController
{
    /** @var  PersonaEnfermedadRepository */
    private $personaEnfermedadRepository;

    public function __construct(PersonaEnfermedadRepository $personaEnfermedadRepo)
    {
        $this->personaEnfermedadRepository = $personaEnfermedadRepo;
    }

    /**
     * Display a listing of the PersonaEnfermedad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $personaEnfermedads = $this->personaEnfermedadRepository->all();

        return view('persona_enfermedads.index')
            ->with('personaEnfermedads', $personaEnfermedads);
    }

    /**
     * Show the form for creating a new PersonaEnfermedad.
     *
     * @return Response
     */
    public function create()
    {
        return view('persona_enfermedads.create');
    }

    /**
     * Store a newly created PersonaEnfermedad in storage.
     *
     * @param CreatePersonaEnfermedadRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonaEnfermedadRequest $request)
    {
        $input = $request->all();

        $personaEnfermedad = $this->personaEnfermedadRepository->create($input);

        Flash::success('Persona Enfermedad saved successfully.');

        return redirect(route('personaEnfermedads.index'));
    }

    /**
     * Display the specified PersonaEnfermedad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personaEnfermedad = $this->personaEnfermedadRepository->find($id);

        if (empty($personaEnfermedad)) {
            Flash::error('Persona Enfermedad not found');

            return redirect(route('personaEnfermedads.index'));
        }

        return view('persona_enfermedads.show')->with('personaEnfermedad', $personaEnfermedad);
    }

    /**
     * Show the form for editing the specified PersonaEnfermedad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaEnfermedad = $this->personaEnfermedadRepository->find($id);

        if (empty($personaEnfermedad)) {
            Flash::error('Persona Enfermedad not found');

            return redirect(route('personaEnfermedads.index'));
        }

        return view('persona_enfermedads.edit')->with('personaEnfermedad', $personaEnfermedad);
    }

    /**
     * Update the specified PersonaEnfermedad in storage.
     *
     * @param int $id
     * @param UpdatePersonaEnfermedadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonaEnfermedadRequest $request)
    {
        $personaEnfermedad = $this->personaEnfermedadRepository->find($id);

        if (empty($personaEnfermedad)) {
            Flash::error('Persona Enfermedad not found');

            return redirect(route('personaEnfermedads.index'));
        }

        $personaEnfermedad = $this->personaEnfermedadRepository->update($request->all(), $id);

        Flash::success('Persona Enfermedad updated successfully.');

        return redirect(route('personaEnfermedads.index'));
    }

    /**
     * Remove the specified PersonaEnfermedad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaEnfermedad = $this->personaEnfermedadRepository->find($id);

        if (empty($personaEnfermedad)) {
            Flash::error('Persona Enfermedad not found');

            return redirect(route('personaEnfermedads.index'));
        }

        $this->personaEnfermedadRepository->delete($id);

        Flash::success('Persona Enfermedad deleted successfully.');

        return redirect(route('personaEnfermedads.index'));
    }
}
