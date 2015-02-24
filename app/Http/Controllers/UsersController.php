<?php namespace Hatches\Http\Controllers;

use Hatches\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Hatches\Transformers\UserTransformer;

/**
 * Class UsersController
 * @package Hatches\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * GET /users
     *
     *
     * @param Request $request
     * @param Response $response
     * @param UserTransformer $userTransformer
     * @return Response
     * @internal param $Request
     * @internal param $UserTransformer
     */
    public function index(Request $request, Response $response, UserTransformer $userTransformer)
    {
        $countUsers = User::count();
        $limit = $request->input('limit', 25);

        if ($limit > 100) {
            return $this->respondBadRequest('Bad Request, Naughty Request! Limit maximum is 100 per page.');
        }
        elseif ($countUsers == 0) {
            return $this->respondNotFound('There are no Users!?');
        }
        else {
            $users = User::paginate($limit);
        }
        return $response->setContent([
            'data' => $userTransformer->transformCollection($users->all())
        ], 200
        );
    }

    /**
     * Display the specified resource.
     * GET /users/{id}
     *
     * @param  int $id
     * @param Response $response
     * @param UserTransformer $userTransformer
     * @return Response
     * @internal param $
     */
    public function show($id, Response $response, UserTransformer $userTransformer)
    {
        $user = User::find($id);
        if (!$user) {
            return $this->respondNotFound('This user does not exist');
        }
        return $response->setContent(['data' => $userTransformer->transform($user)], 200);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /users/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /users/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /users/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}