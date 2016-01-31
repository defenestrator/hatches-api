<?php namespace Hatches\Http\Controllers\Auth;

use Hatches\User;
use Hatches\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Validator;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;
    protected $redirectTo = '/';

	/**
	 *
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'getLogout']);
	}

    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $activation_code = str_random(60) . $request->input('email');
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->activation_code = $activation_code;

        if ($user->save()) {

            $this->sendEmail($user);

            return view('auth.activateAccount')
                ->with('email', $request->input('email'));

        } else {

            \Session::flash('message', \Lang::get('notCreated') );
            return redirect()->back()->withInput();

        }

    }
    //*/

    public function sendEmail(User $user)
    {

        $data = array(
            'name' => $user->name,
            'code' => $user->activation_code,
        );

        \Mail::queue('emails.activateAccount', $data, function($message) use ($user) {
            $message->subject( \Lang::get('auth.pleaseActivate') );
            $message->to($user->email);
        });
    }

    public function resendEmail()
    {
        $user = \Auth::user();
        if( $user->resent >= 3 )
        {
            return view('auth.tooManyEmails')
                ->with('email', $user->email);
        } else {
            $user->resent = $user->resent + 1;
            $user->save();
            $this->sendEmail($user);
            return view('auth.activateAccount')
                ->with('email', $user->email);
        }
    }

    public function activateAccount($code, User $user)
    {

        if($user->accountIsActive($code)) {
            \Session::flash('message', \Lang::get('auth.successActivated') );
            return redirect('/');
        }

        \Session::flash('message', \Lang::get('auth.unsuccessful') );
        return redirect('/');

    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
