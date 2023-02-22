<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\Menutrait;
use App\Traits\DatosimpleTraits;
use App\Models\Nominas_pagosenc;
use App\Models\tarifasisr_det;
use App\Models\Nominas_pagosdet;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BoTranImport;

class NominasController extends Controller
{
    
    use MenuTrait;
    use DatosimpleTraits;

    public function __construct()
    {
        $this->middleware('auth');
    }

    
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

    public function insertarnomina($id,$idpago_nomina){
        $dias_nomina=0;
        if($idpago_nomina==1){
            $dias_nomina = 7;
        }
        if($idpago_nomina==2){
            $dias_nomina = 15;
        }
        if($idpago_nomina==3){
            $dias_nomina = 30;
        }

        //mandamos llamar el procedimiento de calculonomima
        $pagosnom = DB::select('CALL insertar_nominapag_det(?,?)', [$id,$dias_nomina]);
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
        return view('nominas.editarnominaempleado',compact('varpantallas','varsubmenus','varnomem'));
    }


    public function actualizarNominaEmp(request $request, $id)
    {
           $date = Carbon::now();
           $fecha = $date->format('Y-m-d');
           $idd = $request->get('id');
           $idtiponom = $request->get('idtiponom');

           $nomina = Nominas_pagosdet::find($id);
           $nomina->dias_laborados = $request->post('dias_laborados');
           $nomina->deudores_fiscal = $request->post('deudores_fiscal');
           $nomina->deudores_no_fiscal = $request->post('deudores_no_fiscal');
           $nomina->updated_at=$fecha;
           $nomina->save();

        //    return view('nominas.editarnomina');
        
              
        // if($nomina->save() ){
        //     return redirect()->route('Nominaseditar')->with("success","¡Se guardaron los cambios correctamente!");
        // }
        // return redirect()->route('Nominaseditar',$id,$idemple)->with("warning","No se logro");
        // return redirect('/Nominaseditar/editarnomina/$idd/$idtiponom');
        
        // return redirect()->action('NominasController@editarnomina', [$idd,$idtiponom],);
        return redirect()->back();
    }

    public function importar_excel(request $request){
        $file=$request->file("urlpdf");
        Excel::import(new BoTranImport, $file);

    }



}
