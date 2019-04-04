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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function charts() {
        return view('charts');
    }
    public function widgets() {
        return view('widgets');
    }

    public function tables() {
        return view('tables');
    }

    public function fullwidth() {
        return view('fullwidth');
    }

    public function forms() {
        return view('forms');
    }

    public function buttons() {
        return view('buttons');
    }

    public function icons() {
        return view('icons');
    }
    public function elements() {
        return view('elements');
    }
    public function addons() {
        return view('addons');
    }
    
    public function authentication() {
        return view('register');
    }
}
