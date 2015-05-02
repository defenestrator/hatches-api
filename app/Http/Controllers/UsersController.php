<?php namespace Hatches\Http\Controllers;

use Hatches\User;
use Illuminate\Http\Request;
use Hatches\Transformers\UserTransformer;
use Illuminate\Auth\Guard;

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
     * @param UserTransformer $userTransformer
     * @return Response
     * @internal param $Request
     * @internal param $UserTransformer
     */
    public function index(Request $request, UserTransformer $userTransformer)
    {
        $countUsers = User::count();
        $limit = $request->input('limit', 25);

        if ($limit > 100) {
            return $this->respondForbiddenRequest();
        }
        elseif ($countUsers < 1) {
            return $this->respondNotFound('There are no Users!?');
        }
        else {
            $users = User::paginate($limit);
        }
        return $this->respond([
            'data' => $userTransformer->transformCollection($users->all())
            ]
        )->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     * GET /users/{id}
     *
     * @param  int $id
     * @param UserTransformer $userTransformer
     * @return Response
     * @internal param $
     */
    public function show($id, UserTransformer $userTransformer)
    {
        $user = User::find($id);
//        dd($user);
        if ($user !== null) {
            return $this->respond(['data' => $userTransformer->transform($user)])->setStatusCode(200);
        }
        return $this->respondNotFound('No user for id ' . $id);
    }


    /**
     * Remove the specified resource from storage.
     * DELETE /users/{id}
     *
     * @param  int $id
     * @param Guard $auth
     * @param User $user
     * @return Response
     * @internal param $
     */
    public function destroy($id, Guard $auth, User $user)
    {
        if ($auth->check() && $id == Guard::user()->getAuthIdentifier()) {
            return $user->destroy($id);
        }
        return $this->respondForbiddenRequest("You can't delete other users, only yourself.");
    }

}