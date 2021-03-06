<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\middleware;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth', ['only' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.index');
    }

    public function formInicio(){
        return view('inicio');
    }
}
