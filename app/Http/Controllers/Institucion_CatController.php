<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstitucion_CatRequest;
use App\Http\Requests\UpdateInstitucion_CatRequest;
use App\Repositories\Institucion_CatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Institucion_CatController extends AppBaseController
{
    /** @var  Institucion_CatRepository */
    private $institucionCatRepository;

    public function __construct(Institucion_CatRepository $institucionCatRepo)
    {
        $this->institucionCatRepository = $institucionCatRepo;
    }

    /**
     * Display a listing of the Institucion_Cat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $institucionCats = $this->institucionCatRepository->all();

        return view('institucion__cats.index')
            ->with('institucionCats', $institucionCats);
    }

    /**
     * Show the form for creating a new Institucion_Cat.
     *
     * @return Response
     */
    public function create()
    {
        return view('institucion__cats.create');
    }

    /**
     * Store a newly created Institucion_Cat in storage.
     *
     * @param CreateInstitucion_CatRequest $request
     *
     * @return Response
     */
    public function store(CreateInstitucion_CatRequest $request)
    {
        $input = $request->all();

        $institucionCat = $this->institucionCatRepository->create($input);

        Flash::success('Institucion  Cat saved successfully.');

        return redirect(route('institucionCats.index'));
    }

    /**
     * Display the specified Institucion_Cat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $institucionCat = $this->institucionCatRepository->find($id);

        if (empty($institucionCat)) {
            Flash::error('Institucion  Cat not found');

            return redirect(route('institucionCats.index'));
        }

        return view('institucion__cats.show')->with('institucionCat', $institucionCat);
    }

    /**
     * Show the form for editing the specified Institucion_Cat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $institucionCat = $this->institucionCatRepository->find($id);

        if (empty($institucionCat)) {
            Flash::error('Institucion  Cat not found');

            return redirect(route('institucionCats.index'));
        }

        return view('institucion__cats.edit')->with('institucionCat', $institucionCat);
    }

    /**
     * Update the specified Institucion_Cat in storage.
     *
     * @param int $id
     * @param UpdateInstitucion_CatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstitucion_CatRequest $request)
    {
        $institucionCat = $this->institucionCatRepository->find($id);

        if (empty($institucionCat)) {
            Flash::error('Institucion  Cat not found');

            return redirect(route('institucionCats.index'));
        }

        $institucionCat = $this->institucionCatRepository->update($request->all(), $id);

        Flash::success('Institucion  Cat updated successfully.');

        return redirect(route('institucionCats.index'));
    }

    /**
     * Remove the specified Institucion_Cat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $institucionCat = $this->institucionCatRepository->find($id);

        if (empty($institucionCat)) {
            Flash::error('Institucion  Cat not found');

            return redirect(route('institucionCats.index'));
        }

        $this->institucionCatRepository->delete($id);

        Flash::success('Institucion  Cat deleted successfully.');

        return redirect(route('institucionCats.index'));
    }
}
