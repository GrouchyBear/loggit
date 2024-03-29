<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function time()
    {
        return view('time');
    }

    public function ass()
    {
        return view('ass');
    }

    public function help()
    {
        return view('help');
    }

    public function getLogout(){

        Auth::logout();
        return redirect()->route('home');

    }
}
