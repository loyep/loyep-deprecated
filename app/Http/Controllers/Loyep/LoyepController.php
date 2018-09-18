<?php

namespace App\Http\Controllers\Loyep;

use App\Http\Controllers\Controller;

class LoyepController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('loyep::dashboard');
    }
}