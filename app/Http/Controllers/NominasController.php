<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\Menutrait;
use App\Traits\DatosimpleTraits;
use App\Models\Nominas_pagosenc;

class NominasController extends Controller
{
    
    use MenuTrait;
    use DatosimpleTraits;

    public function index()
    {
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $varnominas =  $this->obtenernominas();
    $date = Carbon::now();
    $date = $date->format('Y-m-d');
        return view('nominas.nomina',compact('varpantallas','varsubmenus','varnominas'));
    }

    public function store(Request $request)
    {
        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
    
        //insertamos en la tabla empleados
        $nominas_pagoenc = new Nominas_pagosenc();
        $nominas_pagoenc->nombre_nomina=$request->get('nombre_nomina');
        $nominas_pagoenc->fecha_inicio=$request->get('fecha_ini_nom');
        $nominas_pagoenc->fecha_fin=$request->get('fecha_ter_no');
        $nominas_pagoenc->estado_nomina='Generar';
        $nominas_pagoenc->comentarios='comentario';
        $nominas_pagoenc->datosadicional='dato extra';
        $nominas_pagoenc->save();
        return redirect()->route('vernominas')->with("se interto");
    }

}
