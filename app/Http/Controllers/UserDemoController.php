<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserDemoRequest;
use App\Http\Requests\UpdateUserDemoRequest;
use App\Repositories\UserDemoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UserDemoController extends AppBaseController
{
    /** @var  UserDemoRepository */
    private $userDemoRepository;

    public function __construct(UserDemoRepository $userDemoRepo)
    {
        $this->userDemoRepository = $userDemoRepo;
    }

    /**
     * Display a listing of the UserDemo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $userDemos = $this->userDemoRepository->all();

        return view('user_demos.index')
            ->with('userDemos', $userDemos);
    }

    /**
     * Show the form for creating a new UserDemo.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_demos.create');
    }

    /**
     * Store a newly created UserDemo in storage.
     *
     * @param CreateUserDemoRequest $request
     *
     * @return Response
     */
    public function store(CreateUserDemoRequest $request)
    {
        $input = $request->all();

        $userDemo = $this->userDemoRepository->create($input);

        Flash::success('User Demo saved successfully.');

        return redirect(route('userDemos.index'));
    }

    /**
     * Display the specified UserDemo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userDemo = $this->userDemoRepository->find($id);

        if (empty($userDemo)) {
            Flash::error('User Demo not found');

            return redirect(route('userDemos.index'));
        }

        return view('user_demos.show')->with('userDemo', $userDemo);
    }

    /**
     * Show the form for editing the specified UserDemo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userDemo = $this->userDemoRepository->find($id);

        if (empty($userDemo)) {
            Flash::error('User Demo not found');

            return redirect(route('userDemos.index'));
        }

        return view('user_demos.edit')->with('userDemo', $userDemo);
    }

    /**
     * Update the specified UserDemo in storage.
     *
     * @param int $id
     * @param UpdateUserDemoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserDemoRequest $request)
    {
        $userDemo = $this->userDemoRepository->find($id);

        if (empty($userDemo)) {
            Flash::error('User Demo not found');

            return redirect(route('userDemos.index'));
        }

        $userDemo = $this->userDemoRepository->update($request->all(), $id);

        Flash::success('User Demo updated successfully.');

        return redirect(route('userDemos.index'));
    }

    /**
     * Remove the specified UserDemo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userDemo = $this->userDemoRepository->find($id);

        if (empty($userDemo)) {
            Flash::error('User Demo not found');

            return redirect(route('userDemos.index'));
        }

        $this->userDemoRepository->delete($id);

        Flash::success('User Demo deleted successfully.');

        return redirect(route('userDemos.index'));
    }
}
