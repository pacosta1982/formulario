<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEntidades_catRequest;
use App\Http\Requests\UpdateEntidades_catRequest;
use App\Repositories\Entidades_catRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Entidades_catController extends AppBaseController
{
    /** @var  Entidades_catRepository */
    private $entidadesCatRepository;

    public function __construct(Entidades_catRepository $entidadesCatRepo)
    {
        $this->entidadesCatRepository = $entidadesCatRepo;
    }

    /**
     * Display a listing of the Entidades_cat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $entidadesCats = $this->entidadesCatRepository->all();

        return view('entidades_cats.index')
            ->with('entidadesCats', $entidadesCats);
    }

    /**
     * Show the form for creating a new Entidades_cat.
     *
     * @return Response
     */
    public function create()
    {
        return view('entidades_cats.create');
    }

    /**
     * Store a newly created Entidades_cat in storage.
     *
     * @param CreateEntidades_catRequest $request
     *
     * @return Response
     */
    public function store(CreateEntidades_catRequest $request)
    {
        $input = $request->all();

        $entidadesCat = $this->entidadesCatRepository->create($input);

        Flash::success('Entidades Cat saved successfully.');

        return redirect(route('entidadesCats.index'));
    }

    /**
     * Display the specified Entidades_cat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entidadesCat = $this->entidadesCatRepository->find($id);

        if (empty($entidadesCat)) {
            Flash::error('Entidades Cat not found');

            return redirect(route('entidadesCats.index'));
        }

        return view('entidades_cats.show')->with('entidadesCat', $entidadesCat);
    }

    /**
     * Show the form for editing the specified Entidades_cat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entidadesCat = $this->entidadesCatRepository->find($id);

        if (empty($entidadesCat)) {
            Flash::error('Entidades Cat not found');

            return redirect(route('entidadesCats.index'));
        }

        return view('entidades_cats.edit')->with('entidadesCat', $entidadesCat);
    }

    /**
     * Update the specified Entidades_cat in storage.
     *
     * @param int $id
     * @param UpdateEntidades_catRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntidades_catRequest $request)
    {
        $entidadesCat = $this->entidadesCatRepository->find($id);

        if (empty($entidadesCat)) {
            Flash::error('Entidades Cat not found');

            return redirect(route('entidadesCats.index'));
        }

        $entidadesCat = $this->entidadesCatRepository->update($request->all(), $id);

        Flash::success('Entidades Cat updated successfully.');

        return redirect(route('entidadesCats.index'));
    }

    /**
     * Remove the specified Entidades_cat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entidadesCat = $this->entidadesCatRepository->find($id);

        if (empty($entidadesCat)) {
            Flash::error('Entidades Cat not found');

            return redirect(route('entidadesCats.index'));
        }

        $this->entidadesCatRepository->delete($id);

        Flash::success('Entidades Cat deleted successfully.');

        return redirect(route('entidadesCats.index'));
    }
}
