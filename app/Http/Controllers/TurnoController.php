<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTurnoRequest;
use App\Http\Requests\UpdateTurnoRequest;
use App\Repositories\TurnoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TurnoController extends AppBaseController
{
    /** @var  TurnoRepository */
    private $turnoRepository;

    public function __construct(TurnoRepository $turnoRepo)
    {
        $this->turnoRepository = $turnoRepo;
    }

    /**
     * Display a listing of the Turno.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $turnos = $this->turnoRepository->all();

        return view('turnos.index')
            ->with('turnos', $turnos);
    }

    /**
     * Show the form for creating a new Turno.
     *
     * @return Response
     */
    public function create()
    {
        return view('turnos.create');
    }

    /**
     * Store a newly created Turno in storage.
     *
     * @param CreateTurnoRequest $request
     *
     * @return Response
     */
    public function store(CreateTurnoRequest $request)
    {
        $input = $request->all();

        $turno = $this->turnoRepository->create($input);

        Flash::success('Turno saved successfully.');

        return redirect(route('turnos.index'));
    }

    /**
     * Display the specified Turno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $turno = $this->turnoRepository->find($id);

        if (empty($turno)) {
            Flash::error('Turno not found');

            return redirect(route('turnos.index'));
        }

        return view('turnos.show')->with('turno', $turno);
    }

    /**
     * Show the form for editing the specified Turno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $turno = $this->turnoRepository->find($id);

        if (empty($turno)) {
            Flash::error('Turno not found');

            return redirect(route('turnos.index'));
        }

        return view('turnos.edit')->with('turno', $turno);
    }

    /**
     * Update the specified Turno in storage.
     *
     * @param int $id
     * @param UpdateTurnoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTurnoRequest $request)
    {
        $turno = $this->turnoRepository->find($id);

        if (empty($turno)) {
            Flash::error('Turno not found');

            return redirect(route('turnos.index'));
        }

        $turno = $this->turnoRepository->update($request->all(), $id);

        Flash::success('Turno updated successfully.');

        return redirect(route('turnos.index'));
    }

    /**
     * Remove the specified Turno from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $turno = $this->turnoRepository->find($id);

        if (empty($turno)) {
            Flash::error('Turno not found');

            return redirect(route('turnos.index'));
        }

        $this->turnoRepository->delete($id);

        Flash::success('Turno deleted successfully.');

        return redirect(route('turnos.index'));
    }
}
