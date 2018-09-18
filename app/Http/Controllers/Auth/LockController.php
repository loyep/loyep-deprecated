<?php

namespace App\Http\Controllers\Auth;

//use Loyep\Planet\Facades\Planet;
//use Loyep\Planet\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use App\Traits\LockUsers;

class LockController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Lock Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use LockUsers;

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    protected function redirectPath()
    {
        return Loyep::path();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
