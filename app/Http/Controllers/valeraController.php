<?php

namespace App\Http\Controllers;

use App\Models\Vistas;
use App\Models\usuario_pantallas;
use App\Models\conyuges;
use App\Models\documentos;
use App\Models\avales;
use App\Models\referencias;
use App\Models\valeras;
use App\Models\distribuidores;
use Illuminate\Http\Request;
use App\Traits\MenuTrait;
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


class valeraController extends Controller
{
    use MenuTrait;
    use DatosimpleTraits;
    use ValeTraits;

    public function indexGestionCreditos()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
        return view('Vales.Gestion.Index',compact('varpantallas','varsubmenus'));
    }

    public function getValera()
    {
 
      $idusuario=auth()->user()->id;
      $varobtenersucursalesxusuairo=$this->obtenersucursalxusuario($idusuario);
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $var= $this->obtenerdisxsucursal($idusuario);

      
      $datosuc =  $this-> obtenersucursalporusuariologueado($idusuario);
      foreach($datosuc as $sucid){
      $idsuc = $sucid->id_sucursal;
      }
      $varvaleras = $this-> obtenervalerasXsuc($idsuc);


   
        return view('Vales.Gestion.EntregaValeras.Index',compact('varpantallas','varsubmenus','varobtenersucursalesxusuairo','var','varvaleras'));
      
    }

    public function getCliente()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Gestion.ClienteFinal.cliente',compact('varpantallas','varsubmenus'));
      
    }

    public function getnuevoCliente()
    {
    
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $plazos = $this->obtenerplazos();
      $montos = $this->obtenermontos_capital();
      
   
        return view('Vales.Gestion.ClienteFinal.clienteNuevo',compact('varpantallas','varsubmenus','plazos','montos'));
      
    }

    public function getnuevoCanje()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Gestion.ClienteFinal.canjeNuevo',compact('varpantallas','varsubmenus'));
      
    }

    public function getIndexCatalogo()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Catalogo.Index',compact('varpantallas','varsubmenus'));
      
    }

    public function getcontrolValeras()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $varstock=  $this->obtenerstockvaleras();
   
        return view('Vales.Catalogo.controlValeras',compact('varpantallas','varsubmenus','varstock'));
      
    }

    public function getaltaValeras()
    {
      $idusuario=auth()->user()->id;
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $varobtenersucursalesxusuairo=$this->obtenersucursalxusuario($idusuario);
   
        return view('Vales.Catalogo.altaValeras',compact('varpantallas','varsubmenus','varobtenersucursalesxusuairo'));
      
    }

  public function guardar_valeras(Request $request)
  {
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');

    $idusuario=auth()->user()->id;
    $variableinicio=0;
    $variablefin=0;
      if ( $request->has('folioIni')) 
      {
        foreach ($request->get('folioIni') as $inicio )
        {
          foreach($request->get('FolioFin') as $fin ){
            if($inicio > $variablefin && $fin > $variablefin && $variablefin>$variableinicio || $variableinicio==0 && $variablefin==0){
            $valera = new valeras();
            $valera->idsucursal =$request->get('sucursal');
            $valera->idusuario=$idusuario;
            $valera->status_valera='A';
            $valera->folio_inicio=$inicio;
            $valera->folio_fin=$fin;
            $valera->created_at=$fecha;
            $valera->save();
            }
           else
           {
           }
            $variablefin = $fin;
          }
          $variableinicio = $inicio;
        }
      }
      return redirect()->route('getcontrolValeras')->with("success","¡Se guardaron los cambios correctamente!");
    }

    public function asignarvaleraxdistribuidor(Request $request){

      

      $idusuario=auth()->user()->id;
      $asignacionvalera = new distribuidores_valeras();
      $asignacionvalera->idsucursal = $request->get('sucursal');
      $asignacionvalera->iddistribuidor = $request->get('distribuidor');
      $asignacionvalera->idvalera = $request->get('distribuidor');
      $asignacionvalera->idpromotor = $idusuario;
      $asignacionvalera->created_at=$request->get('fecha');
      $asignacionvalera->status ="A";

      if( $asignacionvalera->save()){
        return redirect()->route('getValera')->with("success","¡Se guardaron los cambios correctamente!");
      }
      else{
        return redirect()->route('getValera')->with("error","¡Se guardaron los cambios correctamente!");
      }
  
    }

    public function validadistribuidor(Request $request){
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
     
      $iddis = $request->get('distribuidor');
      $capital = $request->get('capital');
      $foliovale = $request->get('folio');
      $plazos= $request->get('plazos');
      $montovale =$request->get('monto_vale');
     

    if($iddis =="" || $foliovale == "" || $capital =="" ||$plazos =="")
    {
      return redirect()->route('getnuevoCliente')->with("errorvacio","¡Se guardaron los cambios correctamente!");
    }
    else
    {
    $datosvalida = $this->validavalexdistribudor($iddis);
    $fol = $this->validarfoliovale($foliovale);
    $boleano = 0;
    $boleanovale=0;

    foreach($datosvalida as $dato){
      if($foliovale >= $dato->folio_inicio && $foliovale<=$dato->folio_fin)
      {
        $boleano =1;
        break;
      }
      else{
        $boleano = 0;
      }
    }

      if(sizeof($fol) == 0)
      {
        $boleanovale =1;
      
      }
      else{
        $boleanovale = 0;
      }
    

    if($montovale <= $capital){
      if($boleanovale ==1){
        if($boleano == 1 )
        {
        return view('Vales.Gestion.ClienteFinal.guardar_canje',compact('varpantallas','varsubmenus','foliovale','capital','iddis','plazos'));
      }
      else{
        return redirect()->route('getnuevoCliente')->with("dimecionvale","¡error");
      }
      }
      else{
        return redirect()->route('getnuevoCliente')->with("erroryausado","¡error");
      }
    }
    else{
      return redirect()->route('getnuevoCliente')->with("Erromonto","¡error");
    }

   
}

}
public function clienteinfo(){
  $varpantallas =  $this->Traermenuenc();
  $varsubmenus =   $this->Traermenudet();
    return view('Vales.Gestion.ClienteFinal.guardar_canje',compact('varpantallas','varsubmenus'));
}

public function obtenerdesglosedeplazos(Request $request){
  $coberturaxplazo = 15;
  $pago_quincenal=0;
  $pago_total=0;
  $idcliente=0;
  $numerodeplazo=0;
  $idultpre=0;
  $totalprestamo=0;
  $saldofinalxquincena = 0;
  $total_plazantes_redodeo=0;
  $pago_quincenalredondeado=0;
  $totalcentavos = 0;
  $pago_quincenal_total=0;
  $resta_saldo=0;
  $interes=0;
  $date = Carbon::now();
  $fecha = $date->format('Y-m-d');
  $capital=$request->get('capital');
  $plazos = $request->get('plazos');
  $folio_vale = $request->get('folio');
  $date = Carbon::now();
  $fecha = $date->format('Y-m-d');
  $añoactual = $date->format('Y');
  $mesactual = $date->format('m');
  $diaactual =  $date->format('d');
  $idusuario=auth()->user()->id;
  $varinteres =$this->obtenerinteresmensualxcapital($capital);
 
foreach($varinteres as $intere){
  $interes = $intere->porciento_interes;
}

$varclientevales = new cliente_vales();
$varclientevales->iddistribuidor = $request->get('distribuidor');
$varclientevales->idusuario_sistema = $idusuario;
$varclientevales->Nombre_completo = $request->get('nombre');
$varclientevales->fecha_nacimiento = $request->get('fecha_nacimiento');
$varclientevales->curp = $request->get('curp');
$varclientevales->rfc = $request->get('rfc');
$varclientevales->direccion = $request->get('direccion');
$varclientevales->telefono = $request->get('telefono');
$varclientevales->lugar_trabajo = $request->get('lugar_trabajo');
$varclientevales->telefono_trabajo = $request->get('telefono_trabajo');
$varclientevales->nombre_referencia = $request->get('nombre_referencia');
$varclientevales->direccion_referencia = $request->get('direccion_referencia');
$varclientevales->telefono_referencia = $request->get('telefono_referencia');
$varclientevales->ruta_comprobante_identificacion = "sads";
$varclientevales->ruta_vale_escaneado = "cdfds";
$varclientevales->created_at=$fecha;


        if($varclientevales->save()){

          $idcliente = $this->idultimocliente();
          foreach($idcliente as $clienteid){
            $idcliente= $clienteid->id;
          }
          $sql ="CALL obtenercantidadescanjevale($capital,$plazos,$interes,$coberturaxplazo);";
          $datoscalculo = DB::select($sql);
          
    
          foreach(collect($datoscalculo)as $info){
          $total_plazantes_redodeo =$info->parcialidadantesredondeo;
          $pago_quincenalredondeado=$info->parcialidadredondeada;
          $pago_total = $info->pago_totalredondeado;
          $totalcentavos=$info->redondeocentavosxplazo;
          $pago_quincenal_total=$info->pagoxplazototalredondeado;
    
        $tprestamovalesenc = new prestamos_valesenc();
        $tprestamovalesenc->idcliente=$idcliente;
        $tprestamovalesenc->idusuario_sistema=$idusuario;
        $tprestamovalesenc->capitalxplazo=$pago_quincenal;
        $tprestamovalesenc->interesxquincenasiniva=$info->interesxquincenasiniva;
        $tprestamovalesenc->pagototalintereses=$info->pagototalintereses;
        $tprestamovalesenc->pagoxplazointeresmascapital=$info->pagoxplazointeresmascapital;
        $tprestamovalesenc->ivainteres=$info->ivainteres;
        $tprestamovalesenc->ivainteresxplazo=$info->ivainteresxplazo;
        $tprestamovalesenc->pagototalsiniva=$info->pagototalsiniva;
        $tprestamovalesenc->parcialidadantesredondeo=$info->parcialidadantesredondeo;
        $tprestamovalesenc->parcialidadredondeada=$info->parcialidadredondeada;
        $tprestamovalesenc->pago_totalantesredondeo=$info->pago_totalantesredondeo;
        $tprestamovalesenc->pago_totalredondeado=$info->pago_totalredondeado;
        $tprestamovalesenc->pagoxplazototalantesredondeo=$info->pagoxplazototalantesredondeo;
        $tprestamovalesenc->pagoxplazototalredondeado=$info->pagoxplazototalredondeado;
        $tprestamovalesenc->redondeocentavosxplazo=$info->redondeocentavosxplazo;
        $tprestamovalesenc->redondeototalcentavos=$info->redondeototalcentavos;
        $tprestamovalesenc->otrosconceptos1=0;
        $tprestamovalesenc->otrosconceptos2=0;
        $tprestamovalesenc->otrosconceptos3=0;
        $tprestamovalesenc->folio_vale =$folio_vale;
        $tprestamovalesenc->created_at=$fecha;
        
    
        }

        if($tprestamovalesenc->save()){
          $resta_saldo=$pago_total;
          $idultomoenc=$this->idultimoprestamoenc();
          foreach($idultomoenc as $prestamd){
            $idultpre= $prestamd->id;
          }
              for($i=0; $i <$plazos; $i++){
                
                $resta_saldo=$resta_saldo-$pago_quincenal_total;
              
                if($diaactual > 1 && $diaactual <= 14){
              
                    if($mesactual==13){
                
                      $date = Carbon::now(); 
                      $añoactual= $endDate = $date->addYear()->format('Y');
                      $mesactual=1;
                      $mesactual = '0'.$mesactual;
                      
                    }else{
                      $mesactual = $mesactual;
                    }
                  
                
                  
                $plazofecha = $añoactual.'-'.$mesactual.'-'.'15';
              
              
                  $diaactual = 20;
              
              
                  if($mesactual==13){
                
                    $date = Carbon::now(); //2015-01-01 00:00:00
                    $añoactual= $endDate = $date->addYear()->format('Y');
                    $mesactual=1;
                    
                  }
                  $numerodeplazo=$numerodeplazo+1;
                  $tprestamovalesdet = new prestamos_valesdet();
                  $tprestamovalesdet->idprestamo_vales=$idultpre;
                  $tprestamovalesdet->plazos=$numerodeplazo;
                  $tprestamovalesdet->fecha_pago=$plazofecha;
                  $tprestamovalesdet->pago_quincenal=$pago_quincenal;
                  $tprestamovalesdet->coberturax_plazo=$coberturaxplazo;
                  $tprestamovalesdet->pago_total =$pago_total;
                  $tprestamovalesdet->otros1 = 0;
                  $tprestamovalesdet->otros2 =0;
                  $tprestamovalesdet->saldo_nuevo =$resta_saldo;
                  $tprestamovalesdet->created_at=$fecha;
                  $tprestamovalesdet->save();
      
            
                  //echo $plazofecha;
                  
                  }
                  else{
                    
                  $cantidadDias = cal_days_in_month(CAL_GREGORIAN, $mesactual, $añoactual);
                  $diasdelmes =0;
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
              
                      
                        $plazofecha =$añoactual.'-'.$mesactual.'-'.$diasdelmes;
                      
                        $mesactual =$mesactual+1;
                        if($mesactual == 1  or$mesactual == 2  or $mesactual == 3  or $mesactual == 4  or $mesactual == 5  or $mesactual == 6  or $mesactual == 7  or $mesactual == 8 or $mesactual == 9 ){
                          $mesactual = '0'.$mesactual;
                        }
                        else{
                          $mesactual = $mesactual;
                        }
      
           
          $idultomoenc=$this->idultimoprestamoenc();
          foreach($idultomoenc as $prestamd){
            $idultpre= $prestamd->id;
            $totalplazoredondeado = $prestamd->pagoxplazototalredondeado;
          }
                        
                        $diaactual = 14;
                        $numerodeplazo=$numerodeplazo+1;
                        $tprestamovalesdet = new prestamos_valesdet();
                        $tprestamovalesdet->idprestamo_vales=$idultpre;
                        $tprestamovalesdet->plazos=$numerodeplazo;
                        $tprestamovalesdet->fecha_pago=$plazofecha;
                        $tprestamovalesdet->pago_quincenal=$pago_quincenal;
                        $tprestamovalesdet->coberturax_plazo=$coberturaxplazo;
                        $tprestamovalesdet->pago_total =$pago_total;
                        $tprestamovalesdet->otros1 = $resta_saldo;
                        $tprestamovalesdet->otros2 =0;
                        $tprestamovalesdet->saldo_nuevo = $resta_saldo;
                        $tprestamovalesdet->created_at=$fecha;
                        $tprestamovalesdet->save();
                      // echo $plazofecha;
      
                      }
            }
      
      
            $datoclienteenc =$this->obtenerclientetablaamortizacion($idcliente);
            $datosprestamodet =$this-> obtenereclienteamortizaciondet($idultpre);
      
           
            $pdf = \PDF::loadView('paginaprueba',compact('datoclienteenc','datosprestamodet','totalplazoredondeado','pago_total','total_plazantes_redodeo','totalcentavos','pago_quincenal_total','pago_quincenalredondeado'));
            return $pdf->download("Tabla de amortizacion #prestamo $idultpre.pdf");
        }
        else{
          return redirect()->route('getnuevoCliente')->with("erroryausado","¡error");
        }
        }
        else{
          return redirect()->route('getnuevoCliente')->with("erroryausado","¡error");
        }
  
}

}