<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\Menutrait;
use App\Traits\DatosimpleTraits;
use App\Models\Nominas_pagosenc;
use App\Models\tarifasisr_det;
use DB;

class NominasController extends Controller
{
    
    use MenuTrait;
    use DatosimpleTraits;

    public function index()
    {
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $varnominas =  $this->obtenernominas();
    $varisrenc =  $this->obtenerisrenc();
    
    $date = Carbon::now();
    $date = $date->format('Y-m-d');
        return view('nominas.nomina',compact('varpantallas','varsubmenus','varnominas','varisrenc'));
    }

    public function store(Request $request)
    {
        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
    

        //insertamos en la tabla pagosnominasencabezado
        $nominas_pagoenc = new Nominas_pagosenc();
        $nominas_pagoenc->nombre_nomina=$request->get('nombre_nomina');
        $nominas_pagoenc->fecha_inicio=$request->get('fecha_ini_nom');
        $nominas_pagoenc->fecha_fin=$request->get('fecha_ter_no');
        $nominas_pagoenc->estado_nomina='Iniciada';
        $nominas_pagoenc->comentarios='comentario';
        $nominas_pagoenc->idtiponomina=$request->get('tipo_nomina');
        $nominas_pagoenc->save();
        return redirect()->route('vernominas')->with("Nomina Creada Correctamente");
    }

    public function insertarnomina($id){

        //mandamos llamar el procedimiento de calculonomima
        $pagosnom = DB::select('CALL insertar_nominapag(?)', [$id]);
        $pagosnomina = DB::select('CALL generarcalculosnomina(?)', [$id]);
        //actualizamos el estado de tabla pagosnominaencabezado
        $pagonomenc = Nominas_pagosenc::find($id);
        $pagonomenc->estado_nomina = 'Edicion';
        $pagonomenc->save();
        return redirect()->route('vernominas');
    }


    public function cerrarnomina($id){

        //cerramos la nomina
        $pagonomenc = Nominas_pagosenc::find($id);
        $pagonomenc->estado_nomina = 'Cerrada';
        $pagonomenc->save();
        return redirect()->route('vernominas');
    }

    public function editarnomina($id, $idtiponomina){
       $varnominas =  $this->obtenernominasporid($id);
       $varpantallas =  $this->Traermenuenc();
       $varsubmenus =   $this->Traermenudet();
       $varisr =  $this->obtenerisrdet($idtiponomina);
       $obtenersub =  $this->obtenersubsisdiordet($idtiponomina);
       return view('nominas.editarnomina',compact('varpantallas','varsubmenus','varnominas','varisr','obtenersub'));
    }

    public function editarnomemp($id,$idemple){
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varnomem= $this->obteneempleadonomaeditar($id,$idemple);
        return view('nominas.editarnomempl',compact('varpantallas','varsubmenus','varnomem'));
    }


}
