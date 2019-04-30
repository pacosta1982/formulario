<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersona_ParentescoRequest;
use App\Http\Requests\UpdatePersona_ParentescoRequest;
use App\Repositories\Persona_ParentescoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Persona_ParentescoController extends AppBaseController
{
    /** @var  Persona_ParentescoRepository */
    private $personaParentescoRepository;

    public function __construct(Persona_ParentescoRepository $personaParentescoRepo)
    {
        $this->personaParentescoRepository = $personaParentescoRepo;
    }

    /**
     * Display a listing of the Persona_Parentesco.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $personaParentescos = $this->personaParentescoRepository->all();

        return view('persona__parentescos.index')
            ->with('personaParentescos', $personaParentescos);
    }

    /**
     * Show the form for creating a new Persona_Parentesco.
     *
     * @return Response
     */
    public function create()
    {
        return view('persona__parentescos.create');
    }

    /**
     * Store a newly created Persona_Parentesco in storage.
     *
     * @param CreatePersona_ParentescoRequest $request
     *
     * @return Response
     */
    public function store(CreatePersona_ParentescoRequest $request)
    {
        $input = $request->all();

        $personaParentesco = $this->personaParentescoRepository->create($input);

        Flash::success('Persona  Parentesco saved successfully.');

        return redirect(route('personaParentescos.index'));
    }

    /**
     * Display the specified Persona_Parentesco.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personaParentesco = $this->personaParentescoRepository->find($id);

        if (empty($personaParentesco)) {
            Flash::error('Persona  Parentesco not found');

            return redirect(route('personaParentescos.index'));
        }

        return view('persona__parentescos.show')->with('personaParentesco', $personaParentesco);
    }

    /**
     * Show the form for editing the specified Persona_Parentesco.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personaParentesco = $this->personaParentescoRepository->find($id);

        if (empty($personaParentesco)) {
            Flash::error('Persona  Parentesco not found');

            return redirect(route('personaParentescos.index'));
        }

        return view('persona__parentescos.edit')->with('personaParentesco', $personaParentesco);
    }

    /**
     * Update the specified Persona_Parentesco in storage.
     *
     * @param int $id
     * @param UpdatePersona_ParentescoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersona_ParentescoRequest $request)
    {
        $personaParentesco = $this->personaParentescoRepository->find($id);

        if (empty($personaParentesco)) {
            Flash::error('Persona  Parentesco not found');

            return redirect(route('personaParentescos.index'));
        }

        $personaParentesco = $this->personaParentescoRepository->update($request->all(), $id);

        Flash::success('Persona  Parentesco updated successfully.');

        return redirect(route('personaParentescos.index'));
    }

    /**
     * Remove the specified Persona_Parentesco from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personaParentesco = $this->personaParentescoRepository->find($id);

        if (empty($personaParentesco)) {
            Flash::error('Persona  Parentesco not found');

            return redirect(route('personaParentescos.index'));
        }

        $this->personaParentescoRepository->delete($id);

        Flash::success('Persona  Parentesco deleted successfully.');

        return redirect(route('personaParentescos.index'));
    }
}
