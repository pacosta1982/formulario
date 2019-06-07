<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEntidadesRequest;
use App\Http\Requests\UpdateEntidadesRequest;
use App\Repositories\EntidadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EntidadesController extends AppBaseController
{
    /** @var  EntidadesRepository */
    private $entidadesRepository;

    public function __construct(EntidadesRepository $entidadesRepo)
    {
        $this->entidadesRepository = $entidadesRepo;
    }

    /**
     * Display a listing of the Entidades.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $entidades = $this->entidadesRepository->all();

        return view('entidades.index')
            ->with('entidades', $entidades);
    }

    /**
     * Show the form for creating a new Entidades.
     *
     * @return Response
     */
    public function create()
    {
        return view('entidades.create');
    }

    /**
     * Store a newly created Entidades in storage.
     *
     * @param CreateEntidadesRequest $request
     *
     * @return Response
     */
    public function store(CreateEntidadesRequest $request)
    {
        $input = $request->all();

        $entidades = $this->entidadesRepository->create($input);

        Flash::success('Entidades saved successfully.');

        return redirect(route('entidades.index'));
    }

    /**
     * Display the specified Entidades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entidades = $this->entidadesRepository->find($id);

        if (empty($entidades)) {
            Flash::error('Entidades not found');

            return redirect(route('entidades.index'));
        }

        return view('entidades.show')->with('entidades', $entidades);
    }

    /**
     * Show the form for editing the specified Entidades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entidades = $this->entidadesRepository->find($id);

        if (empty($entidades)) {
            Flash::error('Entidades not found');

            return redirect(route('entidades.index'));
        }

        return view('entidades.edit')->with('entidades', $entidades);
    }

    /**
     * Update the specified Entidades in storage.
     *
     * @param int $id
     * @param UpdateEntidadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntidadesRequest $request)
    {
        $entidades = $this->entidadesRepository->find($id);

        if (empty($entidades)) {
            Flash::error('Entidades not found');

            return redirect(route('entidades.index'));
        }

        $entidades = $this->entidadesRepository->update($request->all(), $id);

        Flash::success('Entidades updated successfully.');

        return redirect(route('entidades.index'));
    }

    /**
     * Remove the specified Entidades from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entidades = $this->entidadesRepository->find($id);

        if (empty($entidades)) {
            Flash::error('Entidades not found');

            return redirect(route('entidades.index'));
        }

        $this->entidadesRepository->delete($id);

        Flash::success('Entidades deleted successfully.');

        return redirect(route('entidades.index'));
    }
}
