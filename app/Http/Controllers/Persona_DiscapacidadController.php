<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersona_DiscapacidadRequest;
use App\Http\Requests\UpdatePersona_DiscapacidadRequest;
use App\Repositories\Persona_DiscapacidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Persona_DiscapacidadController extends AppBaseController
{
    /** @var  Persona_DiscapacidadRepository */
    private $personaDiscapacidadRepository;

    public function __construct(Persona_DiscapacidadRepository $personaDiscapacidadRepo)
    {
        $this->personaDiscapacidadRepository = $personaDiscapacidadRepo;
    }

    /**
     * Display a listing of the Persona_Discapacidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $personaDiscapacidads = $this->personaDiscapacidadRepository->all();

        return view('persona__discapacidads.index')
            ->with('personaDiscapacidads', $personaDiscapacidads);
    }

    /**
     * Show the form for creating a new Persona_Discapacidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('persona__discapacidads.create');
    }

    /**
     * Store a newly created Persona_Discapacidad in storage.
     *
     * @param CreatePersona_DiscapacidadRequest $request
     *
     * @return Response
     */
    public function store(CreatePersona_DiscapacidadRequest $request)
    {
        $input = $request->all();

        $personaDiscapacidad = $this->personaDiscapacidadRepository->create($input);

        Flash::success('Persona  Discapacidad saved successfully.');

        return redirect(route('personaDiscapacidads.index'));
    }

    /**
     * Display the specified Persona_Discapacidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personaDiscapacidad = $this->personaDiscapacidadRepository->find($id);

        if (empty($personaDiscapacidad)) {
            Flash::error('Persona  Discapacidad not found');

            return redirect(route('personaDiscapacidads.index'));
        }

        return view('persona__discapacidads.show')->with('personaDiscapacidad', $personaDiscapacidad);
    }

    /**
     * Show the form for editing the specified Persona_Discapacidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaDiscapacidad = $this->personaDiscapacidadRepository->find($id);

        if (empty($personaDiscapacidad)) {
            Flash::error('Persona  Discapacidad not found');

            return redirect(route('personaDiscapacidads.index'));
        }

        return view('persona__discapacidads.edit')->with('personaDiscapacidad', $personaDiscapacidad);
    }

    /**
     * Update the specified Persona_Discapacidad in storage.
     *
     * @param int $id
     * @param UpdatePersona_DiscapacidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersona_DiscapacidadRequest $request)
    {
        $personaDiscapacidad = $this->personaDiscapacidadRepository->find($id);

        if (empty($personaDiscapacidad)) {
            Flash::error('Persona  Discapacidad not found');

            return redirect(route('personaDiscapacidads.index'));
        }

        $personaDiscapacidad = $this->personaDiscapacidadRepository->update($request->all(), $id);

        Flash::success('Persona  Discapacidad updated successfully.');

        return redirect(route('personaDiscapacidads.index'));
    }

    /**
     * Remove the specified Persona_Discapacidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaDiscapacidad = $this->personaDiscapacidadRepository->find($id);

        if (empty($personaDiscapacidad)) {
            Flash::error('Persona  Discapacidad not found');

            return redirect(route('personaDiscapacidads.index'));
        }

        $this->personaDiscapacidadRepository->delete($id);

        Flash::success('Persona  Discapacidad deleted successfully.');

        return redirect(route('personaDiscapacidads.index'));
    }
}
