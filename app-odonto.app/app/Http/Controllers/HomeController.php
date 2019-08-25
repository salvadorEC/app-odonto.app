<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //obtener el user logueado

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

        $user = Auth::user();//obtener el user logueado

        $rol = $user->roles->implode('name');


        switch ($rol) {
          case 'recepcion':
          $saludo = "Recepcion";
          return view('home',compact('saludo'));

          break;

          case 'doctor':
          $saludo = "Doctor";
          return view('home',compact('saludo'));

          break;

          case 'paciente':
          $saludo = "Paciente";
          return view('home',compact('saludo'));

          break;
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
}
