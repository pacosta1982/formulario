<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersona_PreRequest;
use App\Http\Requests\UpdatePersona_PreRequest;
use App\Repositories\Persona_PreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Persona_PreController extends AppBaseController
{
    /** @var  Persona_PreRepository */
    private $personaPreRepository;

    public function __construct(Persona_PreRepository $personaPreRepo)
    {
        $this->personaPreRepository = $personaPreRepo;
    }

    /**
     * Display a listing of the Persona_Pre.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $personaPres = $this->personaPreRepository->all();

        return view('persona__pres.index')
            ->with('personaPres', $personaPres);
    }

    /**
     * Show the form for creating a new Persona_Pre.
     *
     * @return Response
     */
    public function create()
    {
        return view('persona__pres.create');
    }

    /**
     * Store a newly created Persona_Pre in storage.
     *
     * @param CreatePersona_PreRequest $request
     *
     * @return Response
     */
    public function store(CreatePersona_PreRequest $request)
    {
        $input = $request->all();

        $personaPre = $this->personaPreRepository->create($input);

        Flash::success('Persona  Pre saved successfully.');

        return redirect(route('personaPres.index'));
    }

    /**
     * Display the specified Persona_Pre.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personaPre = $this->personaPreRepository->find($id);

        if (empty($personaPre)) {
            Flash::error('Persona  Pre not found');

            return redirect(route('personaPres.index'));
        }

        return view('persona__pres.show')->with('personaPre', $personaPre);
    }

    /**
     * Show the form for editing the specified Persona_Pre.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaPre = $this->personaPreRepository->find($id);

        if (empty($personaPre)) {
            Flash::error('Persona  Pre not found');

            return redirect(route('personaPres.index'));
        }

        return view('persona__pres.edit')->with('personaPre', $personaPre);
    }

    /**
     * Update the specified Persona_Pre in storage.
     *
     * @param int $id
     * @param UpdatePersona_PreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersona_PreRequest $request)
    {
        $personaPre = $this->personaPreRepository->find($id);

        if (empty($personaPre)) {
            Flash::error('Persona  Pre not found');

            return redirect(route('personaPres.index'));
        }

        $personaPre = $this->personaPreRepository->update($request->all(), $id);

        Flash::success('Persona  Pre updated successfully.');

        return redirect(route('personaPres.index'));
    }

    /**
     * Remove the specified Persona_Pre from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaPre = $this->personaPreRepository->find($id);

        if (empty($personaPre)) {
            Flash::error('Persona  Pre not found');

            return redirect(route('personaPres.index'));
        }

        $this->personaPreRepository->delete($id);

        Flash::success('Persona  Pre deleted successfully.');

        return redirect(route('personaPres.index'));
    }
}
