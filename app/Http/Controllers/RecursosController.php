<?php

namespace App\Http\Controllers;
use App\Models\Vistas;
use Illuminate\Http\Request;

class RecursosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    



    public function index()
    { 
        $varpantallas = Vistas::join('tblusuario_pantallas','tblusuario_pantallas.idvista','=','blvistas.id')
        ->join("users", "users.id", "=", "tblusuario_pantallas.idusuario")
        ->join("tbldepartamentos", "tbldepartamentos.id", "=", "tblusuario_pantallas.idusuario")
        ->where("users.name", "=", 'gmoreno')
        ->select("tblvistas.nombre_vista")
        ->get();
        return view('Recursos',compact('varpantallas'));
    }
}
