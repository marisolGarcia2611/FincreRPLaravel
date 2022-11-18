<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vistas;
use App\Models\usuario_pantallas;

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
        $varpantallas  = Vistas::join('tblusuario_pantallas','tblusuario_pantallas.idvista','=','tblvistas.id')
        ->join("users", "users.id", "=", "tblusuario_pantallas.idusuario")
        ->join("tbldepartamentos", "tbldepartamentos.id", "=", "tblusuario_pantallas.iddepartamento")
        ->where("Users.name", "=", 'gmoreno')
        ->orderby('tbldepartamentos.nombre_departamento')
        ->select('tbldepartamentos.nombre_departamento' )
        ->distinct()->get();

        $varsubmenus = Vistas::join('tblusuario_pantallas','tblusuario_pantallas.idvista','=','tblvistas.id')
        ->join("users", "users.id", "=", "tblusuario_pantallas.idusuario")
        ->join("tbldepartamentos", "tbldepartamentos.id", "=", "tblusuario_pantallas.iddepartamento")
        ->where("Users.name", "=", 'gmoreno')
        ->orderby('tbldepartamentos.nombre_departamento')
        ->select('tbldepartamentos.nombre_departamento','tblvistas.nombre_vista' )
        ->get();
        return view('home',compact('varpantallas','varsubmenus'));
    }

}
