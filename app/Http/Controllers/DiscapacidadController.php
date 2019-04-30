<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiscapacidadRequest;
use App\Http\Requests\UpdateDiscapacidadRequest;
use App\Repositories\DiscapacidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DiscapacidadController extends AppBaseController
{
    /** @var  DiscapacidadRepository */
    private $discapacidadRepository;

    public function __construct(DiscapacidadRepository $discapacidadRepo)
    {
        $this->discapacidadRepository = $discapacidadRepo;
    }

    /**
     * Display a listing of the Discapacidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $discapacidads = $this->discapacidadRepository->all();

        return view('discapacidads.index')
            ->with('discapacidads', $discapacidads);
    }

    /**
     * Show the form for creating a new Discapacidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('discapacidads.create');
    }

    /**
     * Store a newly created Discapacidad in storage.
     *
     * @param CreateDiscapacidadRequest $request
     *
     * @return Response
     */
    public function store(CreateDiscapacidadRequest $request)
    {
        $input = $request->all();

        $discapacidad = $this->discapacidadRepository->create($input);

        Flash::success('Discapacidad saved successfully.');

        return redirect(route('discapacidads.index'));
    }

    /**
     * Display the specified Discapacidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $discapacidad = $this->discapacidadRepository->find($id);

        if (empty($discapacidad)) {
            Flash::error('Discapacidad not found');

            return redirect(route('discapacidads.index'));
        }

        return view('discapacidads.show')->with('discapacidad', $discapacidad);
    }

    /**
     * Show the form for editing the specified Discapacidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $discapacidad = $this->discapacidadRepository->find($id);

        if (empty($discapacidad)) {
            Flash::error('Discapacidad not found');

            return redirect(route('discapacidads.index'));
        }

        return view('discapacidads.edit')->with('discapacidad', $discapacidad);
    }

    /**
     * Update the specified Discapacidad in storage.
     *
     * @param int $id
     * @param UpdateDiscapacidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiscapacidadRequest $request)
    {
        $discapacidad = $this->discapacidadRepository->find($id);

        if (empty($discapacidad)) {
            Flash::error('Discapacidad not found');

            return redirect(route('discapacidads.index'));
        }

        $discapacidad = $this->discapacidadRepository->update($request->all(), $id);

        Flash::success('Discapacidad updated successfully.');

        return redirect(route('discapacidads.index'));
    }

    /**
     * Remove the specified Discapacidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $discapacidad = $this->discapacidadRepository->find($id);

        if (empty($discapacidad)) {
            Flash::error('Discapacidad not found');

            return redirect(route('discapacidads.index'));
        }

        $this->discapacidadRepository->delete($id);

        Flash::success('Discapacidad deleted successfully.');

        return redirect(route('discapacidads.index'));
    }
}
