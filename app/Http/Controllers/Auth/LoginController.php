<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Events\User\UserLoggedin;
use App\Events\User\UserLoggedOut;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
     protected $redirectTo = '/home';

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function authenticated(Request $request, $user)
    {
        event(new UserLoggedin($user));
        return redirect()->intended($this->redirectPath())->withSuccess('Wellcome Back '. $user->name);
    }

    public function logout(Request $request)
    {
        event(new UserLoggedOut($request->user()));
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->action('PostController@index')->withSuccess('Good Bye');
    }
}
