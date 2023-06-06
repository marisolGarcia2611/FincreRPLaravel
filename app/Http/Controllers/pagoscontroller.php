<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vistas;
use App\Models\usuario_pantallas;
use App\Models\conyuges;
use App\Models\documentos;
use App\Models\avales;
use App\Models\referencias;
use App\Models\valeras;
use App\Models\distribuidores;
use App\Traits\MenuTrait;
use App\Traits\PagosTrait;
use App\Traits\DatosimpleTraits;
use App\Traits\ValeTraits;
use App\Models\tipo_distribuidor;
use App\Models\distribuidores_valeras;
use App\Models\historial;
use App\Models\mensajes;
use App\Models\cliente_vales;
use App\Models\prestamos_valesdet;
use App\Models\prestamos_valesenc;



use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\File;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class pagoscontroller extends Controller
{
    use MenuTrait;
    use DatosimpleTraits;
    use ValeTraits;
    use PagosTrait;

    public function index()
    { 
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $vardistribuidores = $this->obtenerdistribuidoresactivos();
        return view('vales.pagos.gestionpagos',compact('varpantallas','varsubmenus','vardistribuidores'));
    }

    public function generareportepagosdistribuidor(int $iddistribuidor){
        
        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
        $añoactual = $date->format('Y');
        $mesactual = $date->format('m');
        $diaactual =  $date->format('d');
        $varfechacorteini = "";
        $varfechacortefin="";
        $varfechaquincenaprox="";
        $varfechapago = "";
        $mesanterior = 0;
        $messuiguiente=0;
        $diasdelmes =0;

        if($diaactual == 9 || $diaactual == 23 ){

          if($diaactual >=1 && $diaactual <=11 )
          {
           $mesanterior=$mesactual-1;
           $varfechacorteini = $añoactual."-".$mesanterior."-22";
           $varfechacortefin = $añoactual."-".$mesactual."-07";
           $varfechaquincenaprox=$añoactual."-".$mesactual."-15";
          }
          if($diaactual >=20 && $diaactual <=25 ){
           $varfechacorteini = $añoactual."-".$mesactual."-08";
           $varfechacortefin = $añoactual."-".$mesactual."-21";
           $cantidadDias = cal_days_in_month(CAL_GREGORIAN, $mesactual, $añoactual);
           if($cantidadDias == 31){
             $diasdelmes =31;
           }
           if ($cantidadDias == 30) {
             $diasdelmes =30;
           }
           if ($cantidadDias == 28) {
             $diasdelmes =28;
           }
           if ($cantidadDias == 29) {
             $diasdelmes =29;
           }
           $varfechaquincenaprox=$añoactual."-".$mesactual."-".$diasdelmes;
          }
           
         
         $fechacorteinicio = substr(Carbon::createFromFormat('Y-m-d', $varfechacorteini),0,10);
         $fechacortefinal = substr(Carbon::createFromFormat('Y-m-d', $varfechacortefin),0,10);
         $fechaquincena = substr(Carbon::createFromFormat('Y-m-d', $varfechaquincenaprox),0,10);
   
       
       $pagosnom = DB::select('CALL relacionpagosdistribuidor(?,?,?,?)', [$iddistribuidor,$fechacorteinicio,$fechacortefinal,$fechaquincena]);
       $resultadoproc = collect($pagosnom);
   
       //echo $resultadoproc;
        $pdf = \PDF::loadView('Vales.pagos.vistacortepagos',compact('resultadoproc'));
        return $pdf->download("Tabla de amortizacionprestamo.pdf");
        }
        else{
          echo "No es dia de entrega de relaciones";
        }
        
      
    }
}
