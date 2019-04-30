<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePreguntaRequest;
use App\Http\Requests\UpdatePreguntaRequest;
use App\Repositories\PreguntaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PreguntaController extends AppBaseController
{
    /** @var  PreguntaRepository */
    private $preguntaRepository;

    public function __construct(PreguntaRepository $preguntaRepo)
    {
        $this->preguntaRepository = $preguntaRepo;
    }

    /**
     * Display a listing of the Pregunta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $preguntas = $this->preguntaRepository->all();

        return view('preguntas.index')
            ->with('preguntas', $preguntas);
    }

    /**
     * Show the form for creating a new Pregunta.
     *
     * @return Response
     */
    public function create()
    {
        return view('preguntas.create');
    }

    /**
     * Store a newly created Pregunta in storage.
     *
     * @param CreatePreguntaRequest $request
     *
     * @return Response
     */
    public function store(CreatePreguntaRequest $request)
    {
        $input = $request->all();

        $pregunta = $this->preguntaRepository->create($input);

        Flash::success('Pregunta saved successfully.');

        return redirect(route('preguntas.index'));
    }

    /**
     * Display the specified Pregunta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pregunta = $this->preguntaRepository->find($id);

        if (empty($pregunta)) {
            Flash::error('Pregunta not found');

            return redirect(route('preguntas.index'));
        }

        return view('preguntas.show')->with('pregunta', $pregunta);
    }

    /**
     * Show the form for editing the specified Pregunta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pregunta = $this->preguntaRepository->find($id);

        if (empty($pregunta)) {
            Flash::error('Pregunta not found');

            return redirect(route('preguntas.index'));
        }

        return view('preguntas.edit')->with('pregunta', $pregunta);
    }

    /**
     * Update the specified Pregunta in storage.
     *
     * @param int $id
     * @param UpdatePreguntaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePreguntaRequest $request)
    {
        $pregunta = $this->preguntaRepository->find($id);

        if (empty($pregunta)) {
            Flash::error('Pregunta not found');

            return redirect(route('preguntas.index'));
        }

        $pregunta = $this->preguntaRepository->update($request->all(), $id);

        Flash::success('Pregunta updated successfully.');

        return redirect(route('preguntas.index'));
    }

    /**
     * Remove the specified Pregunta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pregunta = $this->preguntaRepository->find($id);

        if (empty($pregunta)) {
            Flash::error('Pregunta not found');

            return redirect(route('preguntas.index'));
        }

        $this->preguntaRepository->delete($id);

        Flash::success('Pregunta deleted successfully.');

        return redirect(route('preguntas.index'));
    }
}
