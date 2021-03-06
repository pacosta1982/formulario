<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSemestreRequest;
use App\Http\Requests\UpdateSemestreRequest;
use App\Repositories\SemestreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SemestreController extends AppBaseController
{
    /** @var  SemestreRepository */
    private $semestreRepository;

    public function __construct(SemestreRepository $semestreRepo)
    {
        $this->semestreRepository = $semestreRepo;
    }

    /**
     * Display a listing of the Semestre.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $semestres = $this->semestreRepository->all();

        return view('semestres.index')
            ->with('semestres', $semestres);
    }

    /**
     * Show the form for creating a new Semestre.
     *
     * @return Response
     */
    public function create()
    {
        return view('semestres.create');
    }

    /**
     * Store a newly created Semestre in storage.
     *
     * @param CreateSemestreRequest $request
     *
     * @return Response
     */
    public function store(CreateSemestreRequest $request)
    {
        $input = $request->all();

        $semestre = $this->semestreRepository->create($input);

        Flash::success('Semestre saved successfully.');

        return redirect(route('semestres.index'));
    }

    /**
     * Display the specified Semestre.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semestre = $this->semestreRepository->find($id);

        if (empty($semestre)) {
            Flash::error('Semestre not found');

            return redirect(route('semestres.index'));
        }

        return view('semestres.show')->with('semestre', $semestre);
    }

    /**
     * Show the form for editing the specified Semestre.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semestre = $this->semestreRepository->find($id);

        if (empty($semestre)) {
            Flash::error('Semestre not found');

            return redirect(route('semestres.index'));
        }

        return view('semestres.edit')->with('semestre', $semestre);
    }

    /**
     * Update the specified Semestre in storage.
     *
     * @param int $id
     * @param UpdateSemestreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSemestreRequest $request)
    {
        $semestre = $this->semestreRepository->find($id);

        if (empty($semestre)) {
            Flash::error('Semestre not found');

            return redirect(route('semestres.index'));
        }

        $semestre = $this->semestreRepository->update($request->all(), $id);

        Flash::success('Semestre updated successfully.');

        return redirect(route('semestres.index'));
    }

    /**
     * Remove the specified Semestre from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semestre = $this->semestreRepository->find($id);

        if (empty($semestre)) {
            Flash::error('Semestre not found');

            return redirect(route('semestres.index'));
        }

        $this->semestreRepository->delete($id);

        Flash::success('Semestre deleted successfully.');

        return redirect(route('semestres.index'));
    }
}
