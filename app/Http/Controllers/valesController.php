<?php

namespace App\Http\Controllers;

use App\Models\Vistas;
use App\Models\usuario_pantallas;
use App\Models\conyuges;
use App\Models\documentos;
use App\Models\avales;
use App\Models\referencias;
use App\Models\distribuidores;
use Illuminate\Http\Request;
use App\Traits\MenuTrait;
use App\Traits\DatosimpleTraits;
use App\Traits\ValeTraits;
use App\Models\tipo_distribuidor;
use App\Models\historial;
use App\Models\mensajes;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\File;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
class valesController extends Controller
{
    use MenuTrait;
    use DatosimpleTraits;
    use ValeTraits;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
    
   
        return view('vales.Index',compact('varpantallas','varsubmenus'));
    }

    public function getDistribuidor()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $varpromotores =  $this->obtenerpromotores();
      $varsucursales = $this->obtenersucursales();
      $varciudades =  $this->obtenerciudades();
      $varestados  =  $this->obtenerestados();
      $vartipodis = $this->obtenertipo_distribuidor();
  
        return view('vales.distribuidor',compact('varpantallas','varsubmenus','varpromotores','varsucursales','varciudades','varestados','vartipodis'));
    }

    public function getAval()
    {

      $varciudades =  $this->obtenerciudades();
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
        return view('vales.aval',compact('varpantallas','varsubmenus','varciudades'));
    }

    public function getDocumentos()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('vales.documentos',compact('varpantallas','varsubmenus'));
    }

    public function getGestionFase1()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $vardistribuidores = $this->obtenerdistribuidores();
   
        return view('vales.gestionFase1',compact('varpantallas','varsubmenus','vardistribuidores'));
      
    }

    public function insertardistribuidor(Request $request){
      $date = Carbon::now();
      $fecha = $date->format('Y-m-d');
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();

      //aqui guardaremos el distribuidor
      $distribuidor = new distribuidores();
      $distribuidor->idsucursal = $request->get('sucursal');
      $distribuidor->idpromotor = $request->get('promotor');
      $distribuidor->tipo_distribuidor = $request->get('tipo_distribuidor');
      $distribuidor->primer_nombre = $request->get('primer_nombre');
      $distribuidor->segundo_nombre = $request->get('segundo_nombre');
      $distribuidor->apellido_paterno = $request->get('apellido_paterno');
      $distribuidor->apellido_materno = $request->get('apellido_materno');
      $distribuidor->sexo = $request->get('sexo');
      $distribuidor->fecha_nacimiento = $request->get('fecha_nac');
      $distribuidor->curp = $request->get('curp');
      $distribuidor->rfc = $request->get('rfc');
      $distribuidor->estado_civil = $request->get('estado_civil');
      $distribuidor->telefono = $request->get('telefono');
      $distribuidor->idestado = $request->get('estado');
      $distribuidor->idciudad = $request->get('ciudad');
      $distribuidor->codigo_postal = $request->get('codigo_postal');
      $distribuidor->colonia = $request->get('colonia');
      $distribuidor->calle = $request->get('calle');
      $distribuidor->numero_interior = $request->get('numero_interior');
      $distribuidor->numero_exterior = $request->get('numero_exterior');
      $distribuidor->lugar_empleo = $request->get('lugar_empleo');
      $distribuidor->puesto_empleo = $request->get('puesto_empleo');
      $distribuidor->salario_mensual = $request->get('salario_mensual');
      $distribuidor->egreso_fijomensual = $request->get('egreso_mensual_fijo');
      $distribuidor->antiguedad = $request->get('antiguedad');
      $distribuidor->telefono_empresa = $request->get('telefono_empleo');
      $distribuidor->direccion_empresa = $request->get('direccion_empleo');
      $distribuidor->capital=$request->get('capital');
      $distribuidor->capital_autorizado=$request->get('capital_autorizado');
      $distribuidor->estado_captura = 1;
      $distribuidor->status = 'pro_rev';
      $distribuidor->created_at = $fecha;
      $distribuidor->save();
      $iddistribuidor = $this->iddistribuidor();

      $conyuge = new conyuges();
      $conyuge->iddistribuidor = $iddistribuidor->id;
      $conyuge->primer_nombre = $request->get('primer_nombre');
      $conyuge->segundo_nombre = $request->get('segundo_nombre');
      $conyuge->apellido_paterno = $request->get('apellido_paterno');
      $conyuge->apellido_materno = $request->get('apellido_materno');
      $conyuge->fecha_nacimiento = $request->get('fecha_nac');
      $conyuge->curp = $request->get('curp');
      $conyuge->rfc = $request->get('rfc');
      $conyuge->sexo = $request->get('sexo');
      $conyuge->telefono = $request->get('telefono');
      $conyuge->lugar_empleo = $request->get('lugar_empleo');
      $conyuge->puesto_empleo = $request->get('puesto_empleo');
      $conyuge->salario_mensual = $request->get('salarioMensual');
      $conyuge->egreso_fijomensual = $request->get('egresoFijoMensual');
      $conyuge->antiguedad = $request->get('antiguedad');
      $conyuge->telefono_empresa = $request->get('telefono_empleo');
      $conyuge->direccion_empresa = $request->get('direccion_empleo');
      $conyuge->created_at = $date;
     
       $referencia = new referencias();
       $referencia->iddistribuidor = $iddistribuidor->id;
       $referencia->primer_nombre = $request->get('primer_nombre');
       $referencia->segundo_nombre = $request->get('segundo_nombre');
       $referencia->apellido_paterno = $request->get('apellido_paterno');
       $referencia->apellido_materno = $request->get('apellido_materno');
       $referencia->sexo = $request->get('sexo');
       $referencia->fecha_nacimiento = $request->get('fecha_nac');
       $referencia->estado_civil = $request->get('curp');
       $referencia->rfc = $request->get('rfc');
       $referencia->estado_civil = $request->get('estado_civil');
       $referencia->telefono = $request->get('telefono');
       $referencia->calle = $request->get('calle');
       $referencia->colonia = $request->get('colonia');
       $referencia->numero_interior = $request->get('numero_interior');
       $referencia->numero_exterior = $request->get('numero_exterior');
       $referencia->codigo_postal = $request->get('codigo_postal');
       $referencia->idciudad = $request->get('ciudad');
      $referencia->created_at = $fecha;
     

      if($conyuge->save() && $referencia->save()){
     
    
        return redirect()->route('getAval')->with("success","¡Se guardaron los cambios correctamente!");
      }
      else{
        return redirect()->route('getDistribuidor')->with("warning","Incorrecto");
      }
     }
     public function insertaraval(Request $request){
      $iddistribuidor = $this->iddistribuidor();
      $date = Carbon::now();
      $fecha = $date->format('Y-m-d');
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();

   
      $aval = new avales();
      $aval->iddistribuidor = $iddistribuidor->id;
      $aval->primer_nombre = $request->get('primer_nombre');
      $aval->segundo_nombre = $request->get('segundo_nombre');
      $aval->apellido_paterno = $request->get('apellido_paterno');
      $aval->apellido_materno = $request->get('apellido_materno');
      $aval->fecha_nacimiento = $request->get('fecha_nac');
      $aval->curp = $request->get('curp');
      $aval->rfc = $request->get('rfc');
      $aval->sexo = $request->get('sexo');
      $aval->estado_civil = $request->get('estado_civil');
      $aval->telefono = $request->get('telefono');
      $aval->calle = $request->get('calle');
      $aval->colonia = $request->get('colonia');
      $aval->numero_interior = $request->get('numero_interior');
      $aval->numero_exterior = $request->get('numero_exterior');
      $aval->codigo_postal = $request->get('codigo_postal');
      $aval->idciudad = $request->get('ciudad');
      $aval->lugar_empleo = $request->get('lugar_empleo');
      $aval->puesto_empleo = $request->get('puesto_empleo');
      $aval->salario_mensual = $request->get('salario_mensual');
      $aval->egreso_fijomensual = $request->get('egreso_mensual');
      $aval->antiguedad = $request->get('antiguedad');
      $aval->telefono_empresa = $request->get('telefono_empleo');
      $aval->direccion_empresa = $request->get('direccion_empleo');
      $aval->created_at = $fecha;


     if($aval->save()){
      $distribuidorupdate = distribuidores::find($iddistribuidor->id);
      $distribuidorupdate->estado_captura = 2;
      $distribuidorupdate->save();
      return redirect()->route('getDocumentos')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getAval')->with("warning","Incorrecto");
    }

  }

  public function Guardar_archivos(Request $request){
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');
    $iddistribuidor = $this->iddistribuidor();
    $idultimoaval = $this->idultimoaval();
    $Rutacarpeta = "Expedientes/distribuidores/".$iddistribuidor->id;
    
      if(file_exists(public_path($Rutacarpeta)))
      {
        return redirect()->route('getDocumentos')->with("error","Error");
      }
      else{
        //creamos la carpeta
        File::makeDirectory($Rutacarpeta,0777,true,true);

        //chacamos si traen algo los inputs
        if($request->hasFile("identificacion_oficial") && $request->hasFile("comporbante_domicilio")
        && $request->hasFile("solicitud_credito") && $request->hasFile("autorizacion_buro")
        && $request->hasFile("veri_domicilio") && $request->hasFile("idetificacion_ofi_aval")
        && $request->hasFile("comporbante_aval") && $request->hasFile("soli_credito_aval")
        && $request->hasFile("consulta_buro_aval") && $request->hasFile("veri_domi_aval")
        && $request->hasFile("comporbante_ingreso") && $request->hasFile("comporbante_ingreso_aval"))
        {
        //les damos una variable y nombre
        $file_doc_ofi=$request->file("identificacion_oficial");
        $file_doc_comprobante=$request->file("comporbante_domicilio");
        $file_doc_comprobante_ingreso=$request->file("comporbante_ingreso");
        $file_doc_solicitud_cre=$request->file("solicitud_credito");
        $file_doc_auto_buro=$request->file("autorizacion_buro");
        $file_doc_veri_domicilio=$request->file("veri_domicilio");
        
        $file_doc_ofi_aval=$request->file("idetificacion_ofi_aval");
        $file_doc_comporbante_aval=$request->file("comporbante_aval");
        $file_doc_ingreso_aval=$request->file("comporbante_ingreso_aval");
        $file_doc_ofi_soli_cred_aval=$request->file("soli_credito_aval");
        $file_doc_buro_aval=$request->file("consulta_buro_aval");
        $file_doc_veri_dom_aval=$request->file("veri_domi_aval");
   
        //creamos sus rutas
        //Documentos del distribuidor
         $Nombredoc_ofi = "identificacion_oficial_distribuidor_"."$iddistribuidor->id".".".$file_doc_ofi->guessExtension();
         $ruta_doc_ofi = public_path($Rutacarpeta."/".$Nombredoc_ofi);


         $Nombre_doc_comprobante = "comprobante_domicilio_distribuidor_"." $iddistribuidor->id".".".$file_doc_comprobante->guessExtension(); 
         $ruta_doc_comporbante = public_path($Rutacarpeta."/".$Nombre_doc_comprobante);


         $Nombre_doc_comprobante_ingreso = "comprobante_ingresos_"." $iddistribuidor->id".".".$file_doc_comprobante_ingreso->guessExtension(); 
         $ruta_doc_ingresos = public_path($Rutacarpeta."/".$Nombre_doc_comprobante_ingreso);

         $Nombre_doc_solicitus_cre = "comprobante_solicitud_credito_"." $iddistribuidor->id".".".$file_doc_solicitud_cre->guessExtension(); 
         $ruta_doc_solicitud_cre = public_path($Rutacarpeta."/".$Nombre_doc_solicitus_cre);

         $Nombre_doc_auto_buro = "comprobante_autorizacion_buro_"." $iddistribuidor->id".".".$file_doc_auto_buro->guessExtension(); 
         $ruta_doc_auto_buro = public_path($Rutacarpeta."/".$Nombre_doc_auto_buro);

         $Nombre_doc_veri_domicilio = "comprobante_verificacion_domicilio_"." $iddistribuidor->id".".".$file_doc_veri_domicilio->guessExtension(); 
         $ruta_docveri_domicilio = public_path($Rutacarpeta."/".$Nombre_doc_veri_domicilio);




         //documentos del aval
         $Nombre_doc_ofi_aval = "comprobante_documento_oficial_aval_"." $idultimoaval->id".".".$file_doc_ofi_aval->guessExtension(); 
         $ruta_doc_ofi_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_aval);

         $Nombre_doc_comporbante_aval = "comprobante_domicilio_aval_"." $idultimoaval->id".".".$file_doc_comporbante_aval->guessExtension(); 
         $ruta_doc_comporbante_aval = public_path($Rutacarpeta."/".$Nombre_doc_comporbante_aval);

         $Nombre_doc_ofi_soli_cred_aval = "comprobante_solicitus_aval_"." $idultimoaval->id".".".$file_doc_ofi_soli_cred_aval->guessExtension(); 
         $ruta_doc_ofi_soli_cred_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_soli_cred_aval);

         $Nombre_doc_buro_aval = "comprobante_buro_aval_"." $idultimoaval->id".".".$file_doc_buro_aval->guessExtension(); 
         $ruta_doc_buro_aval = public_path($Rutacarpeta."/".$Nombre_doc_buro_aval);

         $Nombre_veri_dom_aval = "comprobante_verificacion_dom_aval_"." $idultimoaval->id".".".$file_doc_veri_dom_aval->guessExtension(); 
         $ruta_veri_dom_aval = public_path($Rutacarpeta."/".$Nombre_veri_dom_aval);

         $Nombre_comporbante_ingreso_aval = "comprobante_ingreso_aval_"." $idultimoaval->id".".".$file_doc_ingreso_aval->guessExtension(); 
         $ruta_comporbante_ingreso_aval = public_path($Rutacarpeta."/".$Nombre_comporbante_ingreso_aval);

         if($file_doc_ofi->guessExtension()=="pdf"){
             copy($file_doc_ofi, $ruta_doc_ofi);
             copy($file_doc_comprobante, $ruta_doc_comporbante);
             copy($file_doc_comprobante_ingreso, $ruta_doc_ingresos);
             copy($file_doc_solicitud_cre, $ruta_doc_solicitud_cre);
             copy($file_doc_auto_buro, $ruta_doc_auto_buro);
             copy($file_doc_veri_domicilio, $ruta_docveri_domicilio);

             copy($file_doc_ofi_aval, $ruta_doc_ofi_aval);
             copy($file_doc_comporbante_aval, $ruta_doc_comporbante_aval);
             copy($file_doc_ingreso_aval, $ruta_comporbante_ingreso_aval);
             copy($file_doc_ofi_soli_cred_aval, $ruta_doc_ofi_soli_cred_aval);
             copy($file_doc_buro_aval, $ruta_doc_buro_aval);
             copy($file_doc_veri_dom_aval, $ruta_veri_dom_aval);
    
             $documento1 = new documentos();
             $documento1->Tipo = 'Distribuidor';
             $documento1->id_tipo =$iddistribuidor;
             $documento1->identificacion_oficial = $ruta_doc_ofi;
             $documento1->comprobante_domicilio = $ruta_doc_comporbante;
             $documento1->comprobante_ingresos =  $ruta_doc_ingresos;
             $documento1->solicitud_credito = $ruta_doc_solicitud_cre;
             $documento1->autorizacion_buro = $ruta_doc_auto_buro;
             $documento1->verificacion_domicilio =$ruta_docveri_domicilio;
             $documento1->created_at = $fecha;

             $documento2 = new documentos();
             $documento2->Tipo = 'Aval_1';
             $documento2->id_tipo =$idultimoaval->id;
             $documento2->identificacion_oficial = $ruta_doc_ofi_aval;
             $documento2->comprobante_domicilio = $ruta_doc_comporbante_aval;
             $documento2->comprobante_ingresos =  $ruta_comporbante_ingreso_aval;
             $documento2->solicitud_credito = $ruta_doc_ofi_soli_cred_aval;
             $documento2->autorizacion_buro = $ruta_doc_buro_aval;
             $documento2->verificacion_domicilio =$ruta_veri_dom_aval;
             $documento2->created_at = $fecha;
             
             if($documento1->save() && $documento2->save()){
              $distribuidorupdate = distribuidores::find($iddistribuidor->id);
              $distribuidorupdate->estado_captura = 3;
              $distribuidorupdate->save();
              return redirect()->route('vales.gestionFase1')->with("success","ok");
             }
             else{
                
             }
          }
            return redirect()->route('getDistribuidor')->with("success","¡Se guardaron los cambios correctamente!");
        }
        else
        {
          return redirect()->route('getDocumentos')->with("error","¡Se guardaron los cambios correctamente!");
        } 
      }
    }

    public function Termina_Proceso_aval(int $iddistribuidor){

      $varciudades =  $this->obtenerciudades();
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $iddis = $iddistribuidor;
    
        return view('vales.aval_termina_proceso',compact('varpantallas','varsubmenus','varciudades','iddis'));

    }


    public function Termina_Proceso_documentos(int $iddistribuidor){

      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $iddis = $iddistribuidor;
      $aval =  $this->obteneravala_termina_proceso($iddis);
      return view('vales.documentos_proceso',compact('varpantallas','varsubmenus','iddis','aval'));

    }

    public function insertaraval_termino_proceso(Request $request){
      $iddistribuidor =  $request->get('id');
      $date = Carbon::now();
      $fecha = $date->format('Y-m-d');
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();

   
      $aval = new avales();
      $aval->iddistribuidor = $iddistribuidor;
      $aval->primer_nombre = $request->get('primer_nombre');
      $aval->segundo_nombre = $request->get('segundo_nombre');
      $aval->apellido_paterno = $request->get('apellido_paterno');
      $aval->apellido_materno = $request->get('apellido_materno');
      $aval->fecha_nacimiento = $request->get('fecha_nac');
      $aval->curp = $request->get('curp');
      $aval->rfc = $request->get('rfc');
      $aval->sexo = $request->get('sexo');
      $aval->estado_civil = $request->get('estado_civil');
      $aval->telefono = $request->get('telefono');
      $aval->calle = $request->get('calle');
      $aval->colonia = $request->get('colonia');
      $aval->numero_interior = $request->get('numero_interior');
      $aval->numero_exterior = $request->get('numero_exterior');
      $aval->codigo_postal = $request->get('codigo_postal');
      $aval->idciudad = $request->get('ciudad');
      $aval->lugar_empleo = $request->get('lugar_empleo');
      $aval->puesto_empleo = $request->get('puesto_empleo');
      $aval->salario_mensual = $request->get('salario_mensual');
      $aval->egreso_fijomensual = $request->get('egreso_mensual');
      $aval->antiguedad = $request->get('antiguedad');
      $aval->telefono_empresa = $request->get('telefono_empleo');
      $aval->direccion_empresa = $request->get('direccion_empleo');
      $aval->created_at = $fecha;


     if($aval->save()){
      $distribuidorupdate = distribuidores::find($iddistribuidor);
      $distribuidorupdate->estado_captura = 2;
      $distribuidorupdate->save();
      return redirect()->route('getDistribuidor')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getDistribuidor')->with("warning","Incorrecto");
    }
    }


    public function Guardar_archivos_termina_proceso(Request $request)
    {
      $date = Carbon::now();
      $fecha = $date->format('Y-m-d');
      $iddistribuidor =  $request->get('id');
      $idaval =  $request->get('aval');
      
      $Rutacarpeta = "Expedientes/distribuidores/".$iddistribuidor;
      
        if(file_exists(public_path($Rutacarpeta)))
        {
          return redirect()->route('getDocumentos')->with("error","Error");
        }
        else{
          //creamos la carpeta
          File::makeDirectory($Rutacarpeta,0777,true,true);
  
          //chacamos si traen algo los inputs
          if($request->hasFile("identificacion_oficial") && $request->hasFile("comporbante_domicilio")
          && $request->hasFile("solicitud_credito") && $request->hasFile("autorizacion_buro")
          && $request->hasFile("veri_domicilio") && $request->hasFile("idetificacion_ofi_aval")
          && $request->hasFile("comporbante_aval") && $request->hasFile("soli_credito_aval")
          && $request->hasFile("consulta_buro_aval") && $request->hasFile("veri_domi_aval")
          && $request->hasFile("comporbante_ingreso") && $request->hasFile("comporbante_ingreso_aval"))
      {
          //les damos una variable y nombre
              $file_doc_ofi=$request->file("identificacion_oficial");
              $file_doc_comprobante=$request->file("comporbante_domicilio");
              $file_doc_comprobante_ingreso=$request->file("comporbante_ingreso");
              $file_doc_solicitud_cre=$request->file("solicitud_credito");
              $file_doc_auto_buro=$request->file("autorizacion_buro");
              $file_doc_veri_domicilio=$request->file("veri_domicilio");
              
              $file_doc_ofi_aval=$request->file("idetificacion_ofi_aval");
              $file_doc_comporbante_aval=$request->file("comporbante_aval");
              $file_doc_ingreso_aval=$request->file("comporbante_ingreso_aval");
              $file_doc_ofi_soli_cred_aval=$request->file("soli_credito_aval");
              $file_doc_buro_aval=$request->file("consulta_buro_aval");
              $file_doc_veri_dom_aval=$request->file("veri_domi_aval");
     
          //creamos sus rutas
          //Documentos del distribuidor
           $Nombredoc_ofi = "identificacion_oficial_distribuidor_"."$iddistribuidor".".".$file_doc_ofi->guessExtension();
           $ruta_doc_ofi = public_path($Rutacarpeta."/".$Nombredoc_ofi);
  
  
           $Nombre_doc_comprobante = "comprobante_domicilio_distribuidor_"."$iddistribuidor".".".$file_doc_comprobante->guessExtension(); 
           $ruta_doc_comporbante = public_path($Rutacarpeta."/".$Nombre_doc_comprobante);
  
           $Nombre_doc_comprobante_ingreso = "comprobante_ingresos_"."$iddistribuidor".".".$file_doc_comprobante_ingreso->guessExtension(); 
           $ruta_doc_ingresos = public_path($Rutacarpeta."/".$Nombre_doc_comprobante_ingreso);
  
           $Nombre_doc_solicitus_cre = "comprobante_solicitud_credito_"."$iddistribuidor".".".$file_doc_solicitud_cre->guessExtension(); 
           $ruta_doc_solicitud_cre = public_path($Rutacarpeta."/".$Nombre_doc_solicitus_cre);
  
           $Nombre_doc_auto_buro = "comprobante_autorizacion_buro_"."$iddistribuidor".".".$file_doc_auto_buro->guessExtension(); 
           $ruta_doc_auto_buro = public_path($Rutacarpeta."/".$Nombre_doc_auto_buro);
  
           $Nombre_doc_veri_domicilio = "comprobante_verificacion_domicilio_"."$iddistribuidor".".".$file_doc_veri_domicilio->guessExtension(); 
           $ruta_docveri_domicilio = public_path($Rutacarpeta."/".$Nombre_doc_veri_domicilio);
  
  
  
  
           //documentos del aval
           $Nombre_doc_ofi_aval = "comprobante_documento_oficial_aval_"."$idaval".".".$file_doc_ofi_aval->guessExtension(); 
           $ruta_doc_ofi_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_aval);
  
           $Nombre_doc_comporbante_aval = "comprobante_domicilio_aval_"."$idaval".".".$file_doc_comporbante_aval->guessExtension(); 
           $ruta_doc_comporbante_aval = public_path($Rutacarpeta."/".$Nombre_doc_comporbante_aval);
  
           $Nombre_doc_ofi_soli_cred_aval = "comprobante_solicitus_aval_"."$idaval".".".$file_doc_ofi_soli_cred_aval->guessExtension(); 
           $ruta_doc_ofi_soli_cred_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_soli_cred_aval);
  
           $Nombre_doc_buro_aval = "comprobante_buro_aval_"."$idaval".".".$file_doc_buro_aval->guessExtension(); 
           $ruta_doc_buro_aval = public_path($Rutacarpeta."/".$Nombre_doc_buro_aval);
  
           $Nombre_veri_dom_aval = "comprobante_verificacion_dom_aval_"."$idaval".".".$file_doc_veri_dom_aval->guessExtension(); 
           $ruta_veri_dom_aval = public_path($Rutacarpeta."/".$Nombre_veri_dom_aval);
  
           $Nombre_comporbante_ingreso_aval = "comprobante_ingreso_aval_"."$idaval".".".$file_doc_ingreso_aval->guessExtension(); 
           $ruta_comporbante_ingreso_aval = public_path($Rutacarpeta."/".$Nombre_comporbante_ingreso_aval);
  
           if($file_doc_ofi->guessExtension()=="pdf"){
               copy($file_doc_ofi, $ruta_doc_ofi);
               copy($file_doc_comprobante, $ruta_doc_comporbante);
               copy($file_doc_comprobante_ingreso, $ruta_doc_ingresos);
               copy($file_doc_solicitud_cre, $ruta_doc_solicitud_cre);
               copy($file_doc_auto_buro, $ruta_doc_auto_buro);
               copy($file_doc_veri_domicilio, $ruta_docveri_domicilio);
  
               copy($file_doc_ofi_aval, $ruta_doc_ofi_aval);
               copy($file_doc_comporbante_aval, $ruta_doc_comporbante_aval);
               copy($file_doc_ingreso_aval, $ruta_comporbante_ingreso_aval);
               copy($file_doc_ofi_soli_cred_aval, $ruta_doc_ofi_soli_cred_aval);
               copy($file_doc_buro_aval, $ruta_doc_buro_aval);
               copy($file_doc_veri_dom_aval, $ruta_veri_dom_aval);

               $ruta_identificacion_oficial = $Nombredoc_ofi;
               $ruta_comporbante_domicilio =  $Nombre_doc_comprobante;
               $ruta_comprobante_ingresos =$Nombre_doc_comprobante_ingreso;
               $ruta_solicitud_credito = $Nombre_doc_solicitus_cre;
               $ruta_autorizacion_buro= $Nombre_doc_auto_buro;
               $ruta_verificacion_domicilio =$Nombre_doc_veri_domicilio;

               $documento1 = new documentos();
               $documento1->Tipo = 'Distribuidor';
               $documento1->id_tipo =$iddistribuidor;
               $documento1->identificacion_oficial = $ruta_identificacion_oficial;
               $documento1->comprobante_domicilio =  $ruta_comporbante_domicilio;
               $documento1->comprobante_ingresos = $ruta_comprobante_ingresos;
               $documento1->solicitud_credito = $ruta_solicitud_credito;
               $documento1->autorizacion_buro =$ruta_autorizacion_buro;
               $documento1->verificacion_domicilio =$ruta_verificacion_domicilio;
               $documento1->created_at = $fecha;
               $documento1->save();


               $ruta_identificacion_oficial_aval =$Nombre_doc_ofi_aval;
               $ruta_comprobante_domicilio=$Nombre_doc_comporbante_aval;
               $ruta_comprobante_ingresos=$Nombre_comporbante_ingreso_aval;
               $ruta_solicitud_credito = $Nombre_doc_ofi_soli_cred_aval;
               $ruta_autorizacion_buro=$Nombre_doc_buro_aval;
               $ruta_verificacion_domicilio=$Nombre_veri_dom_aval;

               $documento2 = new documentos();
               $documento2->Tipo = 'Aval_1';
               $documento2->id_tipo =$idaval;
               $documento2->identificacion_oficial = $ruta_identificacion_oficial_aval;
               $documento2->comprobante_domicilio =  $ruta_comprobante_domicilio;
               $documento2->comprobante_ingresos =  $ruta_comprobante_ingresos;
               $documento2->solicitud_credito = $ruta_solicitud_credito;
               $documento2->autorizacion_buro =  $ruta_autorizacion_buro;
               $documento2->verificacion_domicilio = $ruta_verificacion_domicilio;
               $documento2->created_at = $fecha;
    
               if($documento2->save()){
                $distribuidorupdate = distribuidores::find($iddistribuidor);
                $distribuidorupdate->estado_captura = 3;
                $distribuidorupdate->save();
                return redirect()->route('getGestionFase1')->with("success","ok");
               }
               else{
                return redirect()->route('getGestionFase1')->with("error","ok");
               }
      }
    }   
  }
}

public function getactualizardistribuidor(int $id){
  $varpantallas =  $this->Traermenuenc();
  $varsubmenus =   $this->Traermenudet();
  $varpromotores =  $this->obtenerpromotores();
  $varsucursales = $this->obtenersucursales();
  $varciudades =  $this->obtenerciudades();
  $varestados  =  $this->obtenerestados();
  $vardistribuidorfase1 =  $this->obtenerdatosfase1($id);
  $vartipodis = $this->obtenertipo_distribuidor();
  $varmensajes = $this->obtener_mensajes($id);
  
  return view('vales.actualizar_distribuidor',compact('varpantallas','varsubmenus','varpromotores','varsucursales','varciudades','varestados','vardistribuidorfase1','vartipodis','varmensajes'));
}
public function distribuidoractualizar(Request $request){

  $iddistribuidor = $request->get('iddistribuidor');
  $id_conyugue = $request->get('idcoyugue');
  $id_referencia = $request->get('idreferencia');

  $date = Carbon::now();
  $fecha = $date->format('Y-m-d');
  $varpantallas =  $this->Traermenuenc();
  $varsubmenus =   $this->Traermenudet();

  //aqui guardaremos el distribuidor
  $distribuidor = distribuidores::find($iddistribuidor);
  $distribuidor->idsucursal = $request->get('sucursal');
  $distribuidor->idpromotor = $request->get('promotor');
  $distribuidor->tipo_distribuidor = $request->get('tipo_distribuidor');
  $distribuidor->primer_nombre = $request->get('primer_nombre');
  $distribuidor->segundo_nombre = $request->get('segundo_nombre');
  $distribuidor->apellido_paterno = $request->get('apellido_paterno');
  $distribuidor->apellido_materno = $request->get('apellido_materno');
  $distribuidor->sexo = $request->get('sexo');
  $distribuidor->fecha_nacimiento = $request->get('fecha_nac');
  $distribuidor->curp = $request->get('curp');
  $distribuidor->rfc = $request->get('rfc');
  $distribuidor->estado_civil = $request->get('estado_civil');
  $distribuidor->telefono = $request->get('telefono');
  $distribuidor->idestado = $request->get('estado');
  $distribuidor->idciudad = $request->get('ciudad');
  $distribuidor->codigo_postal = $request->get('codigo_postal');
  $distribuidor->colonia = $request->get('colonia');
  $distribuidor->calle = $request->get('calle');
  $distribuidor->numero_interior = $request->get('numero_interior');
  $distribuidor->numero_exterior = $request->get('numero_exterior');
  $distribuidor->lugar_empleo = $request->get('lugar_empleo');
  $distribuidor->puesto_empleo = $request->get('puesto_empleo');
  $distribuidor->salario_mensual = $request->get('salario_mensual');
  $distribuidor->egreso_fijomensual = $request->get('egreso_mensual_fijo');
  $distribuidor->antiguedad = $request->get('antiguedad');
  $distribuidor->telefono_empresa = $request->get('telefono_empleo');
  $distribuidor->direccion_empresa = $request->get('direccion_empleo');
  $distribuidor->estado_captura = 3;
  $distribuidor->capital=$request->get('capital');
  $distribuidor->capital_autorizado=$request->get('capital_autorizado');
  $distribuidor->created_at = $fecha;
  $distribuidor->save();


  $conyuge = conyuges::find($id_conyugue);
  $conyuge->iddistribuidor = $iddistribuidor;
  $conyuge->primer_nombre = $request->get('primer_nombre');
  $conyuge->segundo_nombre = $request->get('segundo_nombre');
  $conyuge->apellido_paterno = $request->get('apellido_paterno');
  $conyuge->apellido_materno = $request->get('apellido_materno');
  $conyuge->fecha_nacimiento = $request->get('fecha_nac');
  $conyuge->curp = $request->get('curp');
  $conyuge->rfc = $request->get('rfc');
  $conyuge->sexo = $request->get('sexo');
  $conyuge->telefono = $request->get('telefono');
  $conyuge->lugar_empleo = $request->get('lugar_empleo');
  $conyuge->puesto_empleo = $request->get('puesto_empleo');
  $conyuge->salario_mensual = $request->get('salarioMensual');
  $conyuge->egreso_fijomensual = $request->get('egresoFijoMensual');
  $conyuge->antiguedad = $request->get('antiguedad');
  $conyuge->telefono_empresa = $request->get('telefono_empleo');
  $conyuge->direccion_empresa = $request->get('direccion_empleo');
  $conyuge->created_at = $date;
 
   $referencia =  referencias::find($id_referencia);
   $referencia->iddistribuidor = $iddistribuidor;
   $referencia->primer_nombre = $request->get('primer_nombre');
   $referencia->segundo_nombre = $request->get('segundo_nombre');
   $referencia->apellido_paterno = $request->get('apellido_paterno');
   $referencia->apellido_materno = $request->get('apellido_materno');
   $referencia->sexo = $request->get('sexo');
   $referencia->fecha_nacimiento = $request->get('fecha_nac');
   $referencia->estado_civil = $request->get('curp');
   $referencia->rfc = $request->get('rfc');
   $referencia->estado_civil = $request->get('estado_civil');
   $referencia->telefono = $request->get('telefono');
   $referencia->calle = $request->get('calle');
   $referencia->colonia = $request->get('colonia');
   $referencia->numero_interior = $request->get('numero_interior');
   $referencia->numero_exterior = $request->get('numero_exterior');
   $referencia->codigo_postal = $request->get('codigo_postal');
   $referencia->idciudad = $request->get('ciudad');
  $referencia->created_at = $fecha;
 

  if($conyuge->save() && $referencia->save()){

        $varciudades =  $this->obtenerciudades();
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varobtenerdatosaval=$this->obteneravalactualiza($iddistribuidor);
        return view('vales.actualizar_aval',compact('varpantallas','varsubmenus','varciudades','varobtenerdatosaval'));
  }
  else{
    return redirect()->route('getDistribuidor')->with("warning","Incorrecto");
  }
 }

 public function  actualizar_aval(Request $request){

    $idaval = $request->get('numero_aval');
      $date = Carbon::now();
      $fecha = $date->format('Y-m-d');
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();

   
      $aval =  avales::find($idaval);
      $aval->primer_nombre = $request->get('primer_nombre');
      $aval->segundo_nombre = $request->get('segundo_nombre');
      $aval->apellido_paterno = $request->get('apellido_paterno');
      $aval->apellido_materno = $request->get('apellido_materno');
      $aval->fecha_nacimiento = $request->get('fecha_nac');
      $aval->curp = $request->get('curp');
      $aval->rfc = $request->get('rfc');
      $aval->sexo = $request->get('sexo');
      $aval->estado_civil = $request->get('estado_civil');
      $aval->telefono = $request->get('telefono');
      $aval->calle = $request->get('calle');
      $aval->colonia = $request->get('colonia');
      $aval->numero_interior = $request->get('numero_interior');
      $aval->numero_exterior = $request->get('numero_exterior');
      $aval->codigo_postal = $request->get('codigo_postal');
      $aval->idciudad = $request->get('ciudad');
      $aval->lugar_empleo = $request->get('lugar_empleo');
      $aval->puesto_empleo = $request->get('puesto_empleo');
      $aval->salario_mensual = $request->get('salario_mensual');
      $aval->egreso_fijomensual = $request->get('egreso_mensual');
      $aval->antiguedad = $request->get('antiguedad');
      $aval->telefono_empresa = $request->get('telefono_empleo');
      $aval->direccion_empresa = $request->get('direccion_empleo');
      $aval->created_at = $fecha;

     if($aval->save()){

      return redirect()->route('getGestionFase1')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase1')->with("warning","Incorrecto");
    }
 }

 public function getactualizadoc(int $id){
  $vardocumentos =  $this->mostrardocumentacion($id);
  $varpantallas =  $this->Traermenuenc();
  $varsubmenus =   $this->Traermenudet();

  return view('vales.mostrar_documentacion',compact('varpantallas','varsubmenus','vardocumentos'));
 }

 public function verpdf(int $contrato, String $filename){

  

    $RUTA = "Expedientes/distribuidores"."/$contrato"."/"."$filename";
    $path = public_path($RUTA);
    return Response::make(file_get_contents($path), 200, [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'inline; filename="'.$RUTA.'"'
    ]);
 }

 public function getGestionFase2()
    {
      $varmesadecredito =$this-> obtenermesacred();
      $varpantallas=$this->Traermenuenc();
      $varsubmenus=$this->Traermenudet();
      $varcreditoval=$this->obtenercfredvalidado();
      $varcredito_rec_dic = $this-> obtener_cred_rev_dic();
     
   
        return view('Vales.Fase2.IndexMesaCredito',compact('varpantallas','varsubmenus','varmesadecredito','varcreditoval','varcredito_rec_dic'));
      
    }

    public function getEditDistribuidor()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Fase2.editDistribuidor',compact('varpantallas','varsubmenus'));
      
    }

    public function getSolicitudMesaCredito(int $id)
    {

      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $vardatossolicitud= $this->obtenersolicitud($id);
      $veraval= $this->solicitudaval($id);
      $vardocumentos =  $this->mostrardocumentacion($id);
      $varhistorial = $this->obtenerhistorial($id);
      $varmensajes = $this->obtener_mensajes($id);
  
      return view('Vales.Fase2.solicitudMesaCredito',compact('varpantallas','varsubmenus','vardatossolicitud','veraval','vardocumentos','varhistorial','varmensajes')); 
    }
    public function getCreditosDictamen()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
        return view('Vales.Fase2.creditosDictamen',compact('varpantallas','varsubmenus'));
    }

    public function enviaramesa_credito(int $iddistribuidor){
      $tipoD=distribuidores::find($iddistribuidor);
      $tipoD->status ='pro_rev';

      if($tipoD->save()){
        $historial = new historial();
        $historial->iddistribuidor =$iddistribuidor;
        $historial->status ='pro_dic';
        $historial->descripcion_status='Enviado a mesa de credito';
        $historial->save();

        return redirect()->route('getGestionFase1')->with("success","¡Se guardaron los cambios correctamente!");
      }
      else{
        return redirect()->route('getGestionFase1')->with("warning","Incorrecto");
      }
    }


    public function enviaramesa_credito_act(int $iddistribuidor){

      $tipoD=distribuidores::find($iddistribuidor);
      $tipoD->status ='pro_dic';
      if($tipoD->save()){

        $Upstatus = DB::select('update tblhistorial set status = "pro_dic", descripcion_status = "Enviado a mesa de credito" WHERE iddistribuidor = ?;', [$iddistribuidor]);

        return redirect()->route('getGestionFase1')->with("success","¡Se guardaron los cambios correctamente!");
      }
      else{
        return redirect()->route('getGestionFase1')->with("warning","Incorrecto");
      }
    }


    public function  actualizar_avalup(int $id){
      $iddistribuidor =$id;
      $varciudades =  $this->obtenerciudades();
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $varobtenerdatosaval=$this->obteneravalactualiza($iddistribuidor);
      return view('vales.actualizar_aval',compact('varpantallas','varsubmenus','varciudades','varobtenerdatosaval'));
   }

   function Guardar_observaciones(Request $request){

    $idreferenciadis = $request->get('idreferencia');
    $idreferenciaava= $request->get('idreferenciaaval');

   $iddistribuidor = $request->get('iddistribuidor');
   $idaval= $request->get('idaval');
  

    $documento1=documentos::find($idreferenciadis);
    $documento1->status_ide_ofi ='a' ;//$request->get('identificacionDis');
    $documento1->status_com_dom = $request->get('comprobanteDomicilioDis');
    $documento1->status_com_ingre =$request->get('comprobanteingreso');
    $documento1->status_sol_cre =  $request->get('solicitudCreditoDis');
    $documento1->status_aut_buro = $request->get('consultaBuroDis');
    $documento1->status_ver_dom =  $request->get('verificacionDomicilioDis');
    


    $documento2=documentos::find($idreferenciaava);
    $documento2->status_ide_ofi =$request->get('identificacioAval');
    $documento2->status_com_dom = $request->get('comprobanteDomicilioAval');
    $documento2->status_com_ingre = $request->get('comprobanteingresoaval');
    $documento2->status_sol_cre = $request->get('solicitudCreditoAval');
    $documento2->status_aut_buro = $request->get('consultaBuroAval');
    $documento2->status_ver_dom = $request->get('verificacioDomicilioAval');
    
    if($documento1->save()&& $documento2->save()){
      $date = Carbon::now();
      $fecha = $date->format('Y-m-d');

      $Upstatus = DB::select('update tblhistorial set status = "pro_obs", descripcion_status = "La solicitud tiene observaciones" WHERE iddistribuidor = ?;', [$iddistribuidor]);

      $tipoD=distribuidores::find($iddistribuidor);
      $tipoD->status ='pro_obs';
      $tipoD->save();
      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warning","Incorrecto");
    }
   }


   function rechazar_distribuidor(int $iddis){
   $iddistribuidor =$iddis;

   $distribuidor = distribuidores::find($iddistribuidor);
   $distribuidor->status = 'pro_rec';
    
    if($distribuidor->save()){

      $Upstatus = DB::select('update tblhistorial set status = "pro_rec", descripcion_status = "Se rechazo la solicitud" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warning","Incorrecto");
    }
   }

   function aprobar_distribuidor(int $iddis){
    $iddistribuidor =$iddis;
 
    $distribuidor = distribuidores::find($iddistribuidor);
    $distribuidor->status = 'pro_aut';
     
     if($distribuidor->save()){
 
      $Upstatus = DB::select('update tblhistorial set status = "pro_aut", descripcion_status = "Se apobó la solicitud" WHERE iddistribuidor = ?;', [$iddistribuidor]);

       return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
     }
     else{
       return redirect()->route('getGestionFase2')->with("warning","Incorrecto");
     }
    }


    function enviar_mensaje(string $tipou, int $iddistribuidor, Request $request)
  {

      $varturno= $this->obtenerturno($iddistribuidor);
      $date = Carbon::now();
      $fecha = $date->format('Y-m-d');
      $strmensaje = $request->get('mensaje');
      
      if ($varturno->isEmpty())
      {
        $turno ="turno admin" ;
        $mensaje = new mensajes();
        $mensaje->iddistribuidor= $iddistribuidor;
        $mensaje->tipo_usuario=$tipou;
        $mensaje->turno =$turno;
        $mensaje->texto = $strmensaje;
        $mensaje->created_at=$fecha;

          if($mensaje->save())
            {
              return redirect()->route('getGestionFase2')->with("success","correcto");
            }
          else
            {
              return redirect()->route('getGestionFase1')->with("warning","debes esperar la respuesta para reponder");
            }
      }
      else
      {
          foreach($varturno as $var)
          {
              if($var->tipo_usuario == $tipou)
              {
                return redirect()->route('getGestionFase1')->with("warning","debes esperar la respuesta para reponder");
              }
              else
              {
                  if($tipou == "admin")
                  {
                     $turno ="turno admin" ;
                  }
    
                  if($tipou == "sucursal")
                  {
                  $turno ="turno sucursal" ;
                  }
          
                   $mensaje = new mensajes();
                   $mensaje->iddistribuidor= $iddistribuidor;
                   $mensaje->tipo_usuario=$tipou;
                   $mensaje->turno =$turno;
                   $mensaje->texto = $strmensaje;
                   $mensaje->created_at=$fecha;
    
                   if($mensaje->save())
                   {
                     return redirect()->route('getGestionFase2')->with("success","correcto");
                   }
                   else{
                    return redirect()->route('getGestionFase1')->with("warning","debes esperar la respuesta para reponder");
                   }
               }
        }          
    }
  } 
}


