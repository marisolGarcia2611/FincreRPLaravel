<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\MenuTrait;
use App\Traits\DatosimpleTraits;
use App\Models\Nominas_pagosenc;
use App\Models\tarifasisr_det;
use App\Models\Nominas_pagosdet;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BoTranImport;
use App\Exports\NominasExport;


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
        return redirect()->route('vernominas')->with("success","Nomina Creada Correctamente");
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
        $Borrartablatemp =  DB::select('truncate table temptblnominas_pagodet');
        //actualizamos el estado de tabla pagosnominaencabezado
        $pagonomenc = Nominas_pagosenc::find($id);
        $pagonomenc->estado_nomina = 'Edicion';
        $pagonomenc->save();
        return redirect()->route('vernominas')->with("successcalcular","Nomina Creada Correctamente");
    }


    public function cerrarnomina($id,$idtipodias ){
        $dias_nomina=0;
        if($idtipodias==1){
            $dias_nomina = 7;
        }
        if($idtipodias==2){
            $dias_nomina = 15;
        }
        if($idtipodias==3){
            $dias_nomina = 30;
        }
  
        $Borrartablatemp =  DB::select('truncate table temptblnominas_pagodet');
        //cerramos la nomina
        $pagonomenc = Nominas_pagosenc::find($id);
        $pagonomenc->estado_nomina = 'Cerrada';
        $pagonomenc->save();

        if($pagonomenc->save()){
            return redirect()->route('vernominas')->with("success","¡Se guardaron los cambios correctamente!");
        }
        return back()->with("warning","No se logro");
    
    }

    public function calcularnomina($id,$idtipodias ){
        $dias_nomina=0;
        if($idtipodias==1){
            $dias_nomina = 7;
        }
        if($idtipodias==2){
            $dias_nomina = 15;
        }
        if($idtipodias==3){
            $dias_nomina = 30;
        }
        $pagosnom = DB::select('CALL generarcalculosnominafinal(?)', [$id]);
        $Borrartbl =  DB::select('delete from tblnominas_pagodet where idpagonomina = ? ', [$id]);
        $pagosnomina = DB::select('CALL generarcalculosnomina(?)', [$id]);

        return back()->with("success","¡Se guardaron los cambios correctamente!");
    
    }

    public function nominaeliminar($id){
        // solo de enc
        $Borrartbl =  DB::select('delete from tblnominas_pagoenc where id = ? ', [$id]);
        return back()->with("success","¡Se guardaron los cambios correctamente!");
    }

    public function nominaeliminarTemp($id){
        // solo de enc det temdet
        $Borrartbl =  DB::select('delete from tblnominas_pagoenc where id = ? ', [$id]);
        $Borrartbl =  DB::select('delete from tblnominas_pagodet where idpagonomina = ? ', [$id]);
        $Borrartbl =  DB::select('delete from temptblnominas_pagodet where idpagonomina = ? ', [$id]);
        return back()->with("success","¡Se guardaron los cambios correctamente!");
    }

    public function nominaeliminarCalcu($id){
        // solo de enc det
        $Borrartbl =  DB::select('delete from tblnominas_pagoenc where id = ? ', [$id]);
        $Borrartbl =  DB::select('delete from tblnominas_pagodet where idpagonomina = ? ', [$id]);
        return back()->with("success","¡Se guardaron los cambios correctamente!");
        
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


    public function actualizarNominaEmp(request $request)
    {
           $date = Carbon::now();
           $fecha = $date->format('Y-m-d');
           $id = $request->get('idpadodet');
         
           $nomina = Nominas_pagosdet::find($id);
           $nomina->dias_laborados = $request->post('dias_laborados');
           $nomina->deudores_fiscal = $request->post('deudores_fiscal');
           $nomina->deudores_no_fiscal = $request->post('deudores_no_fiscal');
           $nomina->updated_at=$fecha;
           $nomina->save();

           if($nomina->save()){
            return back()->with("success","¡Se guardaron los cambios correctamente!");
        }
        return back()->with("warning","No se logro");
    }

    

    public function importar_excel(request $request){
        $file=$request->file("urlxlsx");
       

        if($request->hasFile("urlxlsx")){
            $file=$request->file("urlxlsx");

            if($file->guessExtension()=="xlsx"){
                Excel::import(new BoTranImport, $file);
                return back()->with("successExcel","¡Se guardaron los cambios correctamente!");
            }else{
                return back()->with("warningExcel","¡Se guardaron los cambios correctamente!");
            }

        }
        
    }

    public function exportar_excel(request $request){

        return Excel::download(new NominasExport($request->id), 'NominaExport.xlsx');

    }



}
