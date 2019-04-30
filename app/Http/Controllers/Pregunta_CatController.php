<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePregunta_CatRequest;
use App\Http\Requests\UpdatePregunta_CatRequest;
use App\Repositories\Pregunta_CatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Pregunta_CatController extends AppBaseController
{
    /** @var  Pregunta_CatRepository */
    private $preguntaCatRepository;

    public function __construct(Pregunta_CatRepository $preguntaCatRepo)
    {
        $this->preguntaCatRepository = $preguntaCatRepo;
    }

    /**
     * Display a listing of the Pregunta_Cat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $preguntaCats = $this->preguntaCatRepository->all();

        return view('pregunta__cats.index')
            ->with('preguntaCats', $preguntaCats);
    }

    /**
     * Show the form for creating a new Pregunta_Cat.
     *
     * @return Response
     */
    public function create()
    {
        return view('pregunta__cats.create');
    }

    /**
     * Store a newly created Pregunta_Cat in storage.
     *
     * @param CreatePregunta_CatRequest $request
     *
     * @return Response
     */
    public function store(CreatePregunta_CatRequest $request)
    {
        $input = $request->all();

        $preguntaCat = $this->preguntaCatRepository->create($input);

        Flash::success('Pregunta  Cat saved successfully.');

        return redirect(route('preguntaCats.index'));
    }

    /**
     * Display the specified Pregunta_Cat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $preguntaCat = $this->preguntaCatRepository->find($id);

        if (empty($preguntaCat)) {
            Flash::error('Pregunta  Cat not found');

            return redirect(route('preguntaCats.index'));
        }

        return view('pregunta__cats.show')->with('preguntaCat', $preguntaCat);
    }

    /**
     * Show the form for editing the specified Pregunta_Cat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $preguntaCat = $this->preguntaCatRepository->find($id);

        if (empty($preguntaCat)) {
            Flash::error('Pregunta  Cat not found');

            return redirect(route('preguntaCats.index'));
        }

        return view('pregunta__cats.edit')->with('preguntaCat', $preguntaCat);
    }

    /**
     * Update the specified Pregunta_Cat in storage.
     *
     * @param int $id
     * @param UpdatePregunta_CatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePregunta_CatRequest $request)
    {
        $preguntaCat = $this->preguntaCatRepository->find($id);

        if (empty($preguntaCat)) {
            Flash::error('Pregunta  Cat not found');

            return redirect(route('preguntaCats.index'));
        }

        $preguntaCat = $this->preguntaCatRepository->update($request->all(), $id);

        Flash::success('Pregunta  Cat updated successfully.');

        return redirect(route('preguntaCats.index'));
    }

    /**
     * Remove the specified Pregunta_Cat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $preguntaCat = $this->preguntaCatRepository->find($id);

        if (empty($preguntaCat)) {
            Flash::error('Pregunta  Cat not found');

            return redirect(route('preguntaCats.index'));
        }

        $this->preguntaCatRepository->delete($id);

        Flash::success('Pregunta  Cat deleted successfully.');

        return redirect(route('preguntaCats.index'));
    }
}
