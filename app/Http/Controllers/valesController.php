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

  public function __construct(){
      $this->middleware('auth');
  }

  public function index(){
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
  
  
      return view('vales.Captura.Index',compact('varpantallas','varsubmenus'));
  }

  public function getDistribuidor(){
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $varpromotores =  $this->obtenerpromotores();
    $varsucursales = $this->obtenersucursales();
    $varciudades =  $this->obtenerciudades();
    $varestados  =  $this->obtenerestados();
    $vartipodis = $this->obtenertipo_distribuidor();

      return view('vales.Captura.Fase1.CapturaInicial.distribuidor',compact('varpantallas','varsubmenus','varpromotores','varsucursales','varciudades','varestados','vartipodis'));
  }

  public function getAval(){

    $varciudades =  $this->obtenerciudades();
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
      return view('vales.Captura.Fase1.CapturaInicial.aval',compact('varpantallas','varsubmenus','varciudades'));
  }

  public function getDocumentos(){
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
  
      return view('vales.Captura.Fase1.CapturaInicial.documentos',compact('varpantallas','varsubmenus'));
  }

  public function getGestionFase1(){
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $vardistribuidores = $this->obtenerdistribuidores();
  
      return view('vales.Captura.Fase1.gestionFase1',compact('varpantallas','varsubmenus','vardistribuidores'));
    
  }

  public function insertardistribuidor(Request $request){
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $estado_civil =$request->get('estado_civil');

    //aqui guardaremos el distribuidor
    $distribuidor = new distribuidores();
    $distribuidor->idsucursal = $request->get('sucursal');
    $distribuidor->idpromotor = $request->get('promotor');
    $distribuidor->tipo_distribuidor = $request->get('tipo_distribuidor');
    $distribuidor->primer_nombre = $request->get('primer_nombre');
    if(!is_null($request->get('segundo_nombre'))){
    $distribuidor->segundo_nombre = $request->get('segundo_nombre');
    }else{$distribuidor->segundo_nombre =" ";}
    $distribuidor->apellido_paterno = $request->get('apellido_paterno');
    $distribuidor->apellido_materno = $request->get('apellido_materno');
    $distribuidor->sexo = $request->get('sexo');
    $distribuidor->fecha_nacimiento = $request->get('fecha_nac');
    $distribuidor->lugar_nacimiento = $request->get('lugar_nacimiento');
    $distribuidor->nacionalidad = $request->get('nacionalidad');
    $distribuidor->curp = $request->get('curp');
    $distribuidor->rfc = $request->get('rfc');
    $distribuidor->estado_civil = $estado_civil;
    $distribuidor->telefono = $request->get('telefono');
    $distribuidor->idestado = $request->get('estado');
    $distribuidor->idciudad = $request->get('ciudad');
    $distribuidor->codigo_postal = $request->get('codigo_postal');
    $distribuidor->colonia = $request->get('colonia');
    $distribuidor->calle = $request->get('calle');
    if(!is_null($request->get('numero_interior'))){
    $distribuidor->numero_interior = $request->get('numero_interior');
    }else{$distribuidor->numero_interior =" ";}
    $distribuidor->numero_exterior = $request->get('numero_exterior');
    $distribuidor->lugar_empleo = $request->get('lugar_empleo');
    $distribuidor->puesto_empleo = $request->get('puesto_empleo');
    $distribuidor->salario_mensual = $request->get('salario_mensual');
    $distribuidor->egreso_fijomensual = $request->get('egreso_mensual_fijo');
    $distribuidor->antiguedad = $request->get('antiguedad');
    $distribuidor->telefono_empresa = $request->get('telefono_empleo');
    $distribuidor->direccion_empresa = $request->get('direccion_empleo');
    $distribuidor->capital=$request->get('capital');
    $distribuidor->capital_autorizado=0.00;
    $distribuidor->estado_captura = 1;
    $distribuidor->status = 'pro';
    $distribuidor->created_at = $fecha;
    $distribuidor->created_by = auth()->user()->name;
    $distribuidor->save();
    $iddistribuidor = $this->iddistribuidor();

    if($estado_civil == "CASADO")
    {
      $conyuge = new conyuges();
      $conyuge->iddistribuidor = $iddistribuidor->id;
      $conyuge->primer_nombre = $request->get('primer_nombreCon');
      if(!is_null($request->get('segundo_nombreCon'))){
      $conyuge->segundo_nombre = $request->get('segundo_nombreCon');
      }else{$conyuge->segundo_nombre =" ";}
      $conyuge->apellido_paterno = $request->get('apellido_paternoCon');
      $conyuge->apellido_materno = $request->get('apellido_maternoCon');
      $conyuge->fecha_nacimiento = $request->get('fecha_nacCon');
      $conyuge->curp = $request->get('curpCon');
      $conyuge->rfc = $request->get('rfcCon');
      $conyuge->sexo = $request->get('sexoCon');
      $conyuge->telefono = $request->get('telefonoCon');
      $conyuge->lugar_empleo = $request->get('lugar_empleoCon');
      $conyuge->puesto_empleo = $request->get('puesto_empleoCon');
      $conyuge->salario_mensual = $request->get('salarioMensualCon');
      $conyuge->egreso_fijomensual = $request->get('egresoFijoMensualCon');
      $conyuge->antiguedad = $request->get('antiguedadCon');
      $conyuge->telefono_empresa = $request->get('telefono_empleoCon');
      $conyuge->direccion_empresa = $request->get('direccion_empleoCon');
      $conyuge->created_at = $fecha;
      $conyuge->created_by = auth()->user()->name;
      $conyuge->save();
    }
    
      $referencia = new referencias();
      $referencia->iddistribuidor = $iddistribuidor->id;
      $referencia->primer_nombre = $request->get('primer_nombreRef');
      if(!is_null($request->get('segundo_nombreRef'))){
      $referencia->segundo_nombre = $request->get('segundo_nombreRef');
      }else{$referencia->segundo_nombre =" ";}
      $referencia->apellido_paterno = $request->get('apellido_paternoRef');
      $referencia->apellido_materno = $request->get('apellido_maternoRef');
      $referencia->sexo = $request->get('sexoRef');
      $referencia->fecha_nacimiento = $request->get('fecha_nacRef');
      $referencia->curp = $request->get('curpRef');
      $referencia->rfc = $request->get('rfcRef');
      $referencia->estado_civil = $request->get('estado_civilRef');
      $referencia->telefono = $request->get('telefonoRef');
      $referencia->calle = $request->get('calleRef');
      $referencia->colonia = $request->get('coloniaRef');
      if(!is_null($request->get('numero_interiorRef'))){
      $referencia->numero_interior = $request->get('numero_interiorRef');
      }else{$referencia->numero_interior =" ";}
      $referencia->numero_exterior = $request->get('numero_exteriorRef');
      $referencia->codigo_postal = $request->get('codigo_postalRef');
      $referencia->idciudad = $request->get('ciudadRef');
      $referencia->created_at = $fecha;
      $referencia->created_by = auth()->user()->name;
    

    if($distribuidor->save() && $referencia->save()){
    
  
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
      if(!is_null($request->get('segundo_nombre'))){
      $aval->segundo_nombre = $request->get('segundo_nombre');
      }else{$aval->segundo_nombre =" ";}
      $aval->apellido_paterno = $request->get('apellido_paterno');
      $aval->apellido_materno = $request->get('apellido_materno');
      $aval->fecha_nacimiento = $request->get('fecha_nac');
      $aval->lugar_nacimiento = $request->get('lugar_nacimiento');
      $aval->nacionalidad = $request->get('nacionalidad');
      $aval->curp = $request->get('curp');
      $aval->rfc = $request->get('rfc');
      $aval->sexo = $request->get('sexo');
      $aval->estado_civil = $request->get('estado_civil');
      $aval->telefono = $request->get('telefono');
      $aval->calle = $request->get('calle');
      $aval->colonia = $request->get('colonia');
      if(!is_null($request->get('numero_interior'))){
      $aval->numero_interior = $request->get('numero_interior');
      }else{$aval->numero_interior =" ";}
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
      $aval->created_by = auth()->user()->name;


     if($aval->save()){
      $iddis= $iddistribuidor->id;
      $distribuidorupdate = distribuidores::find($iddis);
      $distribuidorupdate->estado_captura = 2;
      $distribuidorupdate->updated_at = $fecha;
      $distribuidorupdate->save();
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
      $obtenerEstadoCivil = $this->estadoCivilDis($iddis);
      foreach ($obtenerEstadoCivil as $esta)
      {
        $estado_civil = $esta->estado_civil;
        break;
      }
      return view('vales.Captura.Fase1.CapturaInicial.documentos',compact('varpantallas','varsubmenus','obtenerEstadoCivil','estado_civil'));
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
    $iddis = $iddistribuidor->id;
    $idaval = $idultimoaval->id;

    
      if(file_exists(public_path($Rutacarpeta)))
      {
        File::deleteDirectory(public_path($Rutacarpeta));
        File::makeDirectory($Rutacarpeta,0777,true,true);
      }
      else{
        //creamos la carpeta
        File::makeDirectory($Rutacarpeta,0777,true,true);
      }

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
         $Nombredoc_ofi = "identificacion_oficial_distribuidor_"."$iddis".".".$file_doc_ofi->guessExtension();
         $ruta_doc_ofi = public_path($Rutacarpeta."/".$Nombredoc_ofi);


         $Nombre_doc_comprobante = "comprobante_domicilio_distribuidor_"." $iddis".".".$file_doc_comprobante->guessExtension(); 
         $ruta_doc_comporbante = public_path($Rutacarpeta."/".$Nombre_doc_comprobante);


         $Nombre_doc_comprobante_ingreso = "comprobante_ingresos_"." $iddis".".".$file_doc_comprobante_ingreso->guessExtension(); 
         $ruta_doc_ingresos = public_path($Rutacarpeta."/".$Nombre_doc_comprobante_ingreso);

         $Nombre_doc_solicitud_cre = "comprobante_solicitud_credito_"."$iddis".".".$file_doc_solicitud_cre->guessExtension(); 
         $ruta_doc_solicitud_cre = public_path($Rutacarpeta."/".$Nombre_doc_solicitud_cre);

         $Nombre_doc_auto_buro = "comprobante_autorizacion_buro_"." $iddis".".".$file_doc_auto_buro->guessExtension(); 
         $ruta_doc_auto_buro = public_path($Rutacarpeta."/".$Nombre_doc_auto_buro);

         $Nombre_doc_veri_domicilio = "comprobante_verificacion_domicilio_"." $iddis".".".$file_doc_veri_domicilio->guessExtension(); 
         $ruta_docveri_domicilio = public_path($Rutacarpeta."/".$Nombre_doc_veri_domicilio);




         //documentos del aval
         $Nombre_doc_ofi_aval = "comprobante_documento_oficial_aval_"." $idaval".".".$file_doc_ofi_aval->guessExtension(); 
         $ruta_doc_ofi_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_aval);

         $Nombre_doc_comporbante_aval = "comprobante_domicilio_aval_"." $idaval".".".$file_doc_comporbante_aval->guessExtension(); 
         $ruta_doc_comporbante_aval = public_path($Rutacarpeta."/".$Nombre_doc_comporbante_aval);

         $Nombre_doc_ofi_soli_cred_aval = "comprobante_solicitud_aval_"." $idaval".".".$file_doc_ofi_soli_cred_aval->guessExtension(); 
         $ruta_doc_ofi_soli_cred_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_soli_cred_aval);

         $Nombre_doc_buro_aval = "comprobante_buro_aval_"." $idaval".".".$file_doc_buro_aval->guessExtension(); 
         $ruta_doc_buro_aval = public_path($Rutacarpeta."/".$Nombre_doc_buro_aval);

         $Nombre_veri_dom_aval = "comprobante_verificacion_dom_aval_"." $idaval".".".$file_doc_veri_dom_aval->guessExtension(); 
         $ruta_veri_dom_aval = public_path($Rutacarpeta."/".$Nombre_veri_dom_aval);

         $Nombre_comporbante_ingreso_aval = "comprobante_ingreso_aval_"." $idaval".".".$file_doc_ingreso_aval->guessExtension(); 
         $ruta_comporbante_ingreso_aval = public_path($Rutacarpeta."/".$Nombre_comporbante_ingreso_aval);

              
  
             $documento1 = new documentos();
             $documento1->Tipo = 'Distribuidor';
             $documento1->id_tipo =$iddis;
             $documento1->identificacion_oficial = $Nombredoc_ofi;
             $documento1->comprobante_domicilio = $Nombre_doc_comprobante;
             $documento1->comprobante_ingresos =  $Nombre_doc_comprobante_ingreso;
             $documento1->solicitud_credito = $Nombre_doc_solicitud_cre;
             $documento1->autorizacion_buro = $Nombre_doc_auto_buro;
             $documento1->verificacion_domicilio =$Nombre_doc_veri_domicilio;
             $documento1->created_at = $fecha;
             $documento1->created_by = auth()->user()->name;


             $documento2 = new documentos();
             $documento2->Tipo = 'Aval_1';
             $documento2->id_tipo =$idaval;
             $documento2->identificacion_oficial = $Nombre_doc_ofi_aval;
             $documento2->comprobante_domicilio = $Nombre_doc_comporbante_aval;
             $documento2->comprobante_ingresos =  $Nombre_comporbante_ingreso_aval;
             $documento2->solicitud_credito = $Nombre_doc_ofi_soli_cred_aval;
             $documento2->autorizacion_buro = $Nombre_doc_buro_aval;
             $documento2->verificacion_domicilio =$Nombre_veri_dom_aval;
             $documento2->created_at = $fecha;
             $documento2->created_by = auth()->user()->name;

              
             if($request->hasFile("acta_matrimonio"))
             {
               $file_act_mat=$request->file("acta_matrimonio");
               $Nombredoc_act_mat = "acta_matrimonio_"."$iddis".".".$file_act_mat->guessExtension();
               $ruta_doc_act_mat = public_path($Rutacarpeta."/".$Nombredoc_act_mat);
               $documento1->acta_matrimonio = $Nombredoc_act_mat;
             }else{error_log('No tienes este archivo');}
 
             if($request->hasFile("comprobante_propiedad"))
             {
               $file_comp_prop=$request->file("comprobante_propiedad");
               $Nombredoc_comp_prop = "comprobante_propiedad_"."$iddis".".".$file_comp_prop->guessExtension();
               $ruta_doc_comp_prop = public_path($Rutacarpeta."/".$Nombredoc_comp_prop);
               $documento1->comprobante_propiedad = $Nombredoc_comp_prop;
             }else{error_log('No tienes este archivo');}
             if( $request->hasFile("comprobante_propiedad_aval"))
             {
               $file_comp_prop_aval=$request->file("comprobante_propiedad_aval");
               $Nombredoc_comp_prop_aval = "comprobante_propiedad_aval_"." $idaval".".".$file_comp_prop_aval->guessExtension();
               $ruta_doc_comp_prop_aval = public_path($Rutacarpeta."/".$Nombredoc_comp_prop_aval);
               $documento2->comprobante_propiedad = $Nombredoc_comp_prop_aval;
             }else{error_log('No tienes este archivo');}
         
          
             if($documento1->save() && $documento2->save() ){
            
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
                  
                     if($request->hasFile("acta_matrimonio"))
                     {
                       copy($file_act_mat, $ruta_doc_act_mat);
                     }else{error_log('No tienes este archivo');}
         
                     if($request->hasFile("comprobante_propiedad"))
                     {
                      copy($file_comp_prop, $ruta_doc_comp_prop);
                     }else{error_log('No tienes este archivo');}
                     if( $request->hasFile("comprobante_propiedad_aval"))
                     {
                      copy($file_comp_prop_aval, $ruta_doc_comp_prop_aval);
                     }else{error_log('No tienes este archivo');}
         
                  
                   $distribuidorupdate = distribuidores::find($iddis);
                   $distribuidorupdate->estado_captura = 3;
                   $distribuidorupdate->status = 'pro';
                   $distribuidorupdate->save();
                   
               return redirect()->route('getGestionFase1')->with("success","ok");
             }
             else{
              return back()->with("error","¡Se guardaron los cambios correctamente!");
             }
      }
      else
      {
        return back()->with("error","¡Se guardaron los cambios correctamente!");
      } 
      
  }

  public function Termina_Proceso_aval(int $iddistribuidor){

    $varciudades =  $this->obtenerciudades();
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $iddis = $iddistribuidor;
  
      return view('vales.Captura.Fase1.TerminarProceso.aval',compact('varpantallas','varsubmenus','varciudades','iddis'));

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
        if(!is_null($request->get('segundo_nombre'))){
        $aval->segundo_nombre = $request->get('segundo_nombre');
        }else{$aval->segundo_nombre =" ";}
        $aval->apellido_paterno = $request->get('apellido_paterno');
        $aval->apellido_materno = $request->get('apellido_materno');
        $aval->fecha_nacimiento = $request->get('fecha_nac');
        $aval->lugar_nacimiento = $request->get('lugar_nacimiento');
        $aval->nacionalidad = $request->get('nacionalidad');
        $aval->curp = $request->get('curp');
        $aval->rfc = $request->get('rfc');
        $aval->sexo = $request->get('sexo');
        $aval->estado_civil = $request->get('estado_civil');
        $aval->telefono = $request->get('telefono');
        $aval->calle = $request->get('calle');
        $aval->colonia = $request->get('colonia');
        if(!is_null($request->get('numero_interior'))){
        $aval->numero_interior = $request->get('numero_interior');
        }else{$aval->numero_interior =" ";}
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
        $aval->created_by = auth()->user()->email;


      if($aval->save()){
        $distribuidorupdate = distribuidores::find($iddistribuidor);
        $distribuidorupdate->estado_captura = 2;
        $distribuidorupdate->save();
        $iddis = $iddistribuidor;
        $aval =  $this->obteneravala_termina_proceso($iddis);
        $obtenerEstadoCivil = $this->estadoCivilDis($iddis);
        foreach ($obtenerEstadoCivil as $esta)
        {
          $estado_civil = $esta->estado_civil;
        }
        return view('vales.Captura.Fase1.TerminarProceso.documentos',compact('varpantallas','varsubmenus','iddis','aval','estado_civil'));
      }
      else{
        return redirect()->route('getDistribuidor')->with("warning","Incorrecto");
      }
  }

  public function Termina_Proceso_documentos(int $iddistribuidor){

    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $iddis = $iddistribuidor;
    $aval =  $this->obteneravala_termina_proceso($iddis);
    $obtenerEstadoCivil = $this->estadoCivilDis($iddis);
      foreach ($obtenerEstadoCivil as $esta)
      {
        $estado_civil = $esta->estado_civil;
      }
    return view('vales.Captura.Fase1.TerminarProceso.documentos',compact('varpantallas','varsubmenus','iddis','aval','estado_civil'));

  }

  public function Guardar_archivos_termina_proceso(Request $request){
      $date = Carbon::now();
      $fecha = $date->format('Y-m-d');
      $iddistribuidor =  $request->get('id');
      $idaval =  $request->get('aval');
      $Rutacarpeta = "Expedientes/distribuidores/".$iddistribuidor;
      
      if(file_exists(public_path($Rutacarpeta)))
      {
        File::deleteDirectory(public_path($Rutacarpeta));
        File::makeDirectory($Rutacarpeta,0777,true,true);
      }
      else{
        //creamos la carpeta
        File::makeDirectory($Rutacarpeta,0777,true,true);
      }
    
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
    
            $Nombre_doc_solicitud_cre = "comprobante_solicitud_credito_"."$iddistribuidor".".".$file_doc_solicitud_cre->guessExtension(); 
            $ruta_doc_solicitud_cre = public_path($Rutacarpeta."/".$Nombre_doc_solicitud_cre);
    
            $Nombre_doc_auto_buro = "comprobante_autorizacion_buro_"."$iddistribuidor".".".$file_doc_auto_buro->guessExtension(); 
            $ruta_doc_auto_buro = public_path($Rutacarpeta."/".$Nombre_doc_auto_buro);
    
            $Nombre_doc_veri_domicilio = "comprobante_verificacion_domicilio_"."$iddistribuidor".".".$file_doc_veri_domicilio->guessExtension(); 
            $ruta_docveri_domicilio = public_path($Rutacarpeta."/".$Nombre_doc_veri_domicilio);
    
    
    
    
            //documentos del aval
            $Nombre_doc_ofi_aval = "comprobante_documento_oficial_aval_"."$idaval".".".$file_doc_ofi_aval->guessExtension(); 
            $ruta_doc_ofi_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_aval);
    
            $Nombre_doc_comporbante_aval = "comprobante_domicilio_aval_"."$idaval".".".$file_doc_comporbante_aval->guessExtension(); 
            $ruta_doc_comporbante_aval = public_path($Rutacarpeta."/".$Nombre_doc_comporbante_aval);
    
            $Nombre_doc_ofi_soli_cred_aval = "comprobante_solicitud_aval_"."$idaval".".".$file_doc_ofi_soli_cred_aval->guessExtension(); 
            $ruta_doc_ofi_soli_cred_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_soli_cred_aval);
    
            $Nombre_doc_buro_aval = "comprobante_buro_aval_"."$idaval".".".$file_doc_buro_aval->guessExtension(); 
            $ruta_doc_buro_aval = public_path($Rutacarpeta."/".$Nombre_doc_buro_aval);
    
            $Nombre_veri_dom_aval = "comprobante_verificacion_dom_aval_"."$idaval".".".$file_doc_veri_dom_aval->guessExtension(); 
            $ruta_veri_dom_aval = public_path($Rutacarpeta."/".$Nombre_veri_dom_aval);
    
            $Nombre_comporbante_ingreso_aval = "comprobante_ingreso_aval_"."$idaval".".".$file_doc_ingreso_aval->guessExtension(); 
            $ruta_comporbante_ingreso_aval = public_path($Rutacarpeta."/".$Nombre_comporbante_ingreso_aval);

        
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
            $documento1->identificacion_oficial = $Nombredoc_ofi;
            $documento1->comprobante_domicilio =  $Nombre_doc_comprobante;
            $documento1->comprobante_ingresos = $Nombre_doc_comprobante_ingreso;
            $documento1->solicitud_credito = $Nombre_doc_solicitud_cre;
            $documento1->autorizacion_buro =$Nombre_doc_auto_buro;
            $documento1->verificacion_domicilio =$Nombre_doc_veri_domicilio;
            $documento1->created_at = $fecha;
            $documento1->created_by = auth()->user()->email;
            


            $documento2 = new documentos();
            $documento2->Tipo = 'Aval_1';
            $documento2->id_tipo =$idaval;
            $documento2->identificacion_oficial = $Nombre_doc_ofi_aval;
            $documento2->comprobante_domicilio =  $Nombre_doc_comporbante_aval;
            $documento2->comprobante_ingresos =  $Nombre_comporbante_ingreso_aval;
            $documento2->solicitud_credito = $Nombre_doc_ofi_soli_cred_aval;
            $documento2->autorizacion_buro =  $Nombre_doc_buro_aval;
            $documento2->verificacion_domicilio = $Nombre_veri_dom_aval;
            $documento2->created_at = $fecha;
            $documento2->created_by = auth()->user()->email;

            if($request->hasFile("acta_matrimonio"))
            {
              $file_act_mat=$request->file("acta_matrimonio");
              $Nombredoc_act_mat = "acta_matrimonio_"."$iddistribuidor".".".$file_act_mat->guessExtension();
              $ruta_doc_act_mat = public_path($Rutacarpeta."/".$Nombredoc_act_mat);
              $documento1->acta_matrimonio = $Nombredoc_act_mat;
                copy($file_act_mat, $ruta_doc_act_mat);
            }else{error_log('No tienes este archivo');}

            if($request->hasFile("comprobante_propiedad"))
            {
              $file_comp_prop=$request->file("comprobante_propiedad");
              $Nombredoc_comp_prop = "comprobante_propiedad_"."$iddistribuidor".".".$file_comp_prop->guessExtension();
              $ruta_doc_comp_prop = public_path($Rutacarpeta."/".$Nombredoc_comp_prop);
              $documento1->comprobante_propiedad = $Nombredoc_comp_prop;
                copy($file_comp_prop, $ruta_doc_comp_prop);
            }else{error_log('No tienes este archivo');}
            if( $request->hasFile("comprobante_propiedad_aval"))
            {
              $file_comp_prop_aval=$request->file("comprobante_propiedad_aval");
              $Nombredoc_comp_prop_aval = "comprobante_propiedad_aval_"." $idaval".".".$file_comp_prop_aval->guessExtension();
              $ruta_doc_comp_prop_aval = public_path($Rutacarpeta."/".$Nombredoc_comp_prop_aval);
              $documento2->comprobante_propiedad = $Nombredoc_comp_prop_aval;
                copy($file_comp_prop_aval, $ruta_doc_comp_prop_aval);
            }else{error_log('No tienes este archivo');}
        
  
            if($documento1->save() && $documento2->save()){
              $distribuidorupdate = distribuidores::find($iddistribuidor);
              $distribuidorupdate->estado_captura = 3;
              $distribuidorupdate->status = 'pro';
              $distribuidorupdate->save();
              return redirect()->route('getGestionFase1')->with("success","ok");
            }
            else{
             return back()->with("error","¡Se guardaron los cambios correctamente!");
            }
        
      } 
      else
      {
        return back()->with("error","¡Se guardaron los cambios correctamente!");
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
    $varobtenerdatosaval=$this->obteneravalactualiza($id);
    $Conyuge = $this->obtenerConyugeActualizar($id);
    return view('vales.Captura.actualizar_distribuidor',compact('varpantallas','varsubmenus','varpromotores','varsucursales','varciudades','varestados','vardistribuidorfase1','vartipodis','varmensajes','varobtenerdatosaval','Conyuge'));
  }

  public function actualizar_distribuidor(Request $request){

    $iddistribuidor = $request->get('iddistribuidor');
    $id_conyugue = $request->get('idcoyugue');
    $id_referencia = $request->get('idreferencia');

    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $estado_civil =$request->get('estado_civilDis');

    //aqui guardaremos el distribuidor
    $distribuidor = distribuidores::find($iddistribuidor);
    $distribuidor->idsucursal = $request->get('sucursal');
    $distribuidor->idpromotor = $request->get('promotor');
    $distribuidor->tipo_distribuidor = $request->get('tipo_distribuidor');
    $distribuidor->primer_nombre = $request->get('primer_nombredDis');
    if(!is_null($request->get('segundo_nombreDis'))){
    $distribuidor->segundo_nombre = $request->get('segundo_nombreDis');
    }else{$distribuidor->segundo_nombre =" ";}
    $distribuidor->apellido_paterno = $request->get('apellido_paternoDis');
    $distribuidor->apellido_materno = $request->get('apellido_maternoDis');
    $distribuidor->sexo = $request->get('sexoDis');
    $distribuidor->fecha_nacimiento = $request->get('fecha_nacDis');
    $distribuidor->lugar_nacimiento = $request->get('lugar_nacimiento');
    $distribuidor->nacionalidad = $request->get('nacionalidad');
    $distribuidor->curp = $request->get('curpDis');
    $distribuidor->rfc = $request->get('rfcDis');
    $distribuidor->estado_civil = $estado_civil;
    $distribuidor->telefono = $request->get('telefonoDis');
    $distribuidor->idestado = $request->get('estadoDis');
    $distribuidor->idciudad = $request->get('ciudadDis');
    $distribuidor->codigo_postal = $request->get('codigo_postalDis');
    $distribuidor->colonia = $request->get('coloniaDis');
    $distribuidor->calle = $request->get('calleDis');
    if(!is_null($request->get('numero_interiorDis'))){
    $distribuidor->numero_interior = $request->get('numero_interiorDis');
    }else{$distribuidor->numero_interior =" ";}
    $distribuidor->numero_exterior = $request->get('numero_exteriorDis');
    $distribuidor->lugar_empleo = $request->get('lugar_empleoDis');
    $distribuidor->puesto_empleo = $request->get('puesto_empleoDis');
    $distribuidor->salario_mensual = $request->get('salario_mensualDis');
    $distribuidor->egreso_fijomensual = $request->get('egreso_mensual_fijoDis');
    $distribuidor->antiguedad = $request->get('antiguedadDis');
    $distribuidor->telefono_empresa = $request->get('telefono_empleoDis');
    $distribuidor->direccion_empresa = $request->get('direccion_empleoDis');
    $distribuidor->estado_captura = 3;
    $distribuidor->capital=$request->get('capital');
    $distribuidor->capital_autorizado=$request->get('capital_autorizado');
    $distribuidor->updated_at = $fecha;
    $distribuidor->updated_by = auth()->user()->name;
    $distribuidor->save();

    if($estado_civil == "CASADO")
    {
    $conyuge = conyuges::find($id_conyugue);
    $conyuge->iddistribuidor = $iddistribuidor;
    $conyuge->primer_nombre = $request->get('primer_nombreCon');
    if(!is_null($request->get('segundo_nombreCon'))){
    $conyuge->segundo_nombre = $request->get('segundo_nombreCon');
    }else{$conyuge->segundo_nombre =" ";}
    $conyuge->apellido_paterno = $request->get('apellido_paternoCon');
    $conyuge->apellido_materno = $request->get('apellido_maternoCon');
    $conyuge->fecha_nacimiento = $request->get('fecha_nacCon');
    $conyuge->curp = $request->get('curpCon');
    $conyuge->rfc = $request->get('rfcCon');
    $conyuge->sexo = $request->get('sexoCon');
    $conyuge->telefono = $request->get('telefonoCon');
    $conyuge->lugar_empleo = $request->get('lugar_empleoCon');
    $conyuge->puesto_empleo = $request->get('puesto_empleoCon');
    $conyuge->salario_mensual = $request->get('salarioMensualCon');
    $conyuge->egreso_fijomensual = $request->get('egresoFijoMensualCon');
    $conyuge->antiguedad = $request->get('antiguedadCon');
    $conyuge->telefono_empresa = $request->get('telefono_empleoCon');
    $conyuge->direccion_empresa = $request->get('direccion_empleoCon');
    $conyuge->updated_at = $fecha;
    $conyuge->updated_by = auth()->user()->name;
    $conyuge->save();
    }

    $referencia =  referencias::find($id_referencia);
    $referencia->iddistribuidor = $iddistribuidor;
    $referencia->primer_nombre = $request->get('primer_nombreRef');
    if(!is_null($request->get('segundo_nombreRef'))){
    $referencia->segundo_nombre = $request->get('segundo_nombreRef');
    }else{$referencia->segundo_nombre =" ";}
    $referencia->apellido_paterno = $request->get('apellido_paternoRef');
    $referencia->apellido_materno = $request->get('apellido_maternoRef');
    $referencia->sexo = $request->get('sexoRef');
    $referencia->fecha_nacimiento = $request->get('fecha_nacRef');
    $referencia->estado_civil = $request->get('curpRef');
    $referencia->rfc = $request->get('rfcRef');
    $referencia->estado_civil = $request->get('estado_civilRef');
    $referencia->telefono = $request->get('telefonoRef');
    $referencia->calle = $request->get('calleRef');
    $referencia->colonia = $request->get('coloniaRef');
    if(!is_null($request->get('numero_interiorRef'))){
    $referencia->numero_interior = $request->get('numero_interiorRef');
    }else{$referencia->numero_interior =" ";}
    $referencia->numero_exterior = $request->get('numero_exteriorRef');
    $referencia->codigo_postal = $request->get('codigo_postalRef');
    $referencia->idciudad = $request->get('ciudadRef');
    $referencia->updated_at = $fecha;
    $referencia->updated_by = auth()->user()->name;
    $referencia->save();


      if($distribuidor->save() && $referencia->save()){
            
            $varciudades =  $this->obtenerciudades();
            $varpantallas =  $this->Traermenuenc();
            $varsubmenus =   $this->Traermenudet();
            $varobtenerdatosaval=$this->obteneravalactualiza($iddistribuidor);
            $iddis = $iddistribuidor;  
            return view('vales.Captura.actualizar_aval',compact('varpantallas','varsubmenus','varciudades','varobtenerdatosaval','iddis'));
      }
      else{
        return redirect()->route('getDistribuidor')->with("warning","Incorrecto");
      }
  }

  public function  actualizar_avalup(int $id){
    $iddis =$id;
    $varciudades =  $this->obtenerciudades();
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $varobtenerdatosaval=$this->obteneravalactualiza($iddis);
    return view('vales.Captura.actualizar_aval',compact('varpantallas','varsubmenus','varciudades','varobtenerdatosaval','iddis'));
  }

  public function  actualizar_aval(Request $request){

        $idaval = $request->get('numero_aval');
        $iddistribuidor = $request->get('numero_dis');
        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();

    
        $aval =  avales::find($idaval);
        $aval->primer_nombre = $request->get('primer_nombre');
        if(!is_null($request->get('segundo_nombre'))){
        $aval->segundo_nombre = $request->get('segundo_nombre');
        }else{$aval->segundo_nombre =" ";};
        $aval->apellido_paterno = $request->get('apellido_paterno');
        $aval->apellido_materno = $request->get('apellido_materno');
        $aval->fecha_nacimiento = $request->get('fecha_nac');
        $aval->lugar_nacimiento = $request->get('lugar_nacimiento');
        $aval->nacionalidad = $request->get('nacionalidad');
        $aval->curp = $request->get('curp');
        $aval->rfc = $request->get('rfc');
        $aval->sexo = $request->get('sexo');
        $aval->estado_civil = $request->get('estado_civil');
        $aval->telefono = $request->get('telefono');
        $aval->calle = $request->get('calle');
        $aval->colonia = $request->get('colonia');
        if(!is_null($request->get('numero_interior'))){
        $aval->numero_interior = $request->get('numero_interior');
        }else{$aval->numero_interior =" ";}
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
        $aval->updated_at = $fecha;
        $aval->updated_by = auth()->user()->name;

      if($aval->save()){
        $iddis = $iddistribuidor;  
        $idava = $idaval;  
        $disDoc =  $this->obtenerDocumentosDis($iddis);
        $avalDoc =  $this->obtenerDocumentosAval($idava);
        $vardocumentosaval= $this->docAval($iddis);
        $vardocumentos =  $this->mostrardocumentacion($iddis);
        return view('vales.Captura.actualizar_documentos',compact('varpantallas','varsubmenus','iddis','idaval','disDoc','avalDoc','vardocumentosaval','vardocumentos'));
        // return redirect()->route('getGestionFase1')->with("success","¡Se guardaron los cambios correctamente!");
      }
      else{
        return redirect()->route('getGestionFase1')->with("warning","Incorrecto");
      }
  }

  public function  actualizar_docup(int $iddistribuidor, int $idaval){
    $iddis = $iddistribuidor;  
    $idaval = $idaval;  
    $disDoc =  $this->obtenerDocumentosDis($iddis);
    $avalDoc =  $this->obtenerDocumentosAval($idaval);
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $vardocumentos =  $this->mostrardocumentacion($iddis);
    $vardocumentosaval= $this->docAval($iddis);
    return view('vales.Captura.actualizar_documentos',compact('varpantallas','varsubmenus','iddis','idaval','disDoc','avalDoc','vardocumentos','vardocumentosaval'));
  }

  public function actualizar_documentos(Request $request){
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');
    $iddistribuidor =  $request->get('id');
    $idaval =  $request->get('aval');
    $avalDoc = $request->get('avalDoc');
    $disDoc = $request->get('disDoc');
    $estado = $request->get('status');
    $Rutacarpeta = "Expedientes/distribuidores/".$iddistribuidor;
    
        //chacamos si traen algo los inputs
        if($request->hasFile("identificacion_oficial") )
        {
          $file_doc_ofi=$request->file("identificacion_oficial");
          $Nombredoc_ofi = "identificacion_oficial_distribuidor_"."$iddistribuidor".".".$file_doc_ofi->guessExtension();
          $ruta_doc_ofi = public_path($Rutacarpeta."/".$Nombredoc_ofi);
          $documento1 = documentos::find($disDoc);
          $documento1->identificacion_oficial = $Nombredoc_ofi;
          $documento1->status_ide_ofi = 'NULL';
          $documento1->updated_at = $fecha;
          $documento1->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombredoc_ofi))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombredoc_ofi));
            copy($file_doc_ofi, $ruta_doc_ofi);
          }else{copy($file_doc_ofi, $ruta_doc_ofi);}
        } else{error_log('No tienes este archivo');}


        if($request->hasFile("comporbante_domicilio"))
        {
          $file_doc_comprobante=$request->file("comporbante_domicilio");
          $Nombre_doc_comprobante = "comprobante_domicilio_distribuidor_"."$iddistribuidor".".".$file_doc_comprobante->guessExtension(); 
          $ruta_doc_comporbante = public_path($Rutacarpeta."/".$Nombre_doc_comprobante);
          $documento1 = documentos::find($disDoc);
          $documento1->comprobante_domicilio =  $Nombre_doc_comprobante;
          $documento1->status_com_dom = 'NULL';
          $documento1->updated_at = $fecha;
          $documento1->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_comprobante))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_comprobante));
            copy($file_doc_comprobante, $ruta_doc_comporbante);
          }else{copy($file_doc_comprobante, $ruta_doc_comporbante);}
        } else{error_log('No tienes este archivo');}


        if($request->hasFile("comporbante_ingreso"))
        {
          $file_doc_comprobante_ingreso=$request->file("comporbante_ingreso");
          $Nombre_doc_comprobante_ingreso = "comprobante_ingresos_"."$iddistribuidor".".".$file_doc_comprobante_ingreso->guessExtension(); 
          $ruta_doc_ingresos = public_path($Rutacarpeta."/".$Nombre_doc_comprobante_ingreso);
          $documento1 = documentos::find($disDoc);
          $documento1->comprobante_ingresos = $Nombre_doc_comprobante_ingreso;
          $documento1->status_com_ingre = 'NULL';
          $documento1->updated_at = $fecha;
          $documento1->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_comprobante_ingreso))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_comprobante_ingreso));
            copy($file_doc_comprobante_ingreso, $ruta_doc_ingresos);
          }else{copy($file_doc_comprobante_ingreso, $ruta_doc_ingresos);}
        } else{error_log('No tienes este archivo');}
        
        
        if($request->hasFile("solicitud_credito") )
        {
          $file_doc_solicitud_cre=$request->file("solicitud_credito");
          $Nombre_doc_solicitud_cre = "comprobante_solicitud_credito_"."$iddistribuidor".".".$file_doc_solicitud_cre->guessExtension(); 
          $ruta_doc_solicitud_cre = public_path($Rutacarpeta."/".$Nombre_doc_solicitud_cre);
          $documento1 = documentos::find($disDoc);
          $documento1->solicitud_credito = $Nombre_doc_solicitud_cre;
          $documento1->status_sol_cre = 'NULL';
          $documento1->updated_at = $fecha;
          $documento1->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_solicitud_cre))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_solicitud_cre));
            copy($file_doc_solicitud_cre, $ruta_doc_solicitud_cre);
          }else{copy($file_doc_solicitud_cre, $ruta_doc_solicitud_cre);}
        } else{error_log('No tienes este archivo');}


        if($request->hasFile("autorizacion_buro"))
        {
          $file_doc_auto_buro=$request->file("autorizacion_buro");
          $Nombre_doc_auto_buro = "comprobante_autorizacion_buro_"."$iddistribuidor".".".$file_doc_auto_buro->guessExtension(); 
          $ruta_doc_auto_buro = public_path($Rutacarpeta."/".$Nombre_doc_auto_buro);
          $documento1 = documentos::find($disDoc);
          $documento1->autorizacion_buro =$Nombre_doc_auto_buro;
          $documento1->status_aut_buro = 'NULL';
          $documento1->updated_at = $fecha;
          $documento1->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_auto_buro))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_auto_buro));
            copy($file_doc_auto_buro, $ruta_doc_auto_buro);
          }else{File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_auto_buro));}
        } else{error_log('No tienes este archivo');}

        
        if($request->hasFile("veri_domicilio"))
        {
          $file_doc_veri_domicilio=$request->file("veri_domicilio");
          $Nombre_doc_veri_domicilio = "comprobante_verificacion_domicilio_"."$iddistribuidor".".".$file_doc_veri_domicilio->guessExtension(); 
          $ruta_docveri_domicilio = public_path($Rutacarpeta."/".$Nombre_doc_veri_domicilio);
          $documento1 = documentos::find($disDoc);
          $documento1->verificacion_domicilio =$Nombre_doc_veri_domicilio;
          $documento1->status_ver_dom = 'NULL';
          $documento1->updated_at = $fecha;
          $documento1->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_veri_domicilio))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_veri_domicilio));
            copy($file_doc_veri_domicilio, $ruta_docveri_domicilio);
          }else{copy($file_doc_veri_domicilio, $ruta_docveri_domicilio);}
        }else{error_log('No tienes este archivo');}


        if($request->hasFile("idetificacion_ofi_aval"))
        {
          $file_doc_ofi_aval=$request->file("idetificacion_ofi_aval");
          $Nombre_doc_ofi_aval = "comprobante_documento_oficial_aval_"."$idaval".".".$file_doc_ofi_aval->guessExtension(); 
          $ruta_doc_ofi_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_aval);
          $documento2 = documentos::find($avalDoc);
          $documento2->identificacion_oficial = $Nombre_doc_ofi_aval;
          $documento2->status_ide_ofi = 'NULL';
          $documento2->updated_at = $fecha;
          $documento2->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_ofi_aval))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_ofi_aval));
            copy($file_doc_ofi_aval, $ruta_doc_ofi_aval);
          }else{copy($file_doc_ofi_aval, $ruta_doc_ofi_aval);}
        }else{error_log('No tienes este archivo');}


        if($request->hasFile("comporbante_aval"))
        {
          $file_doc_comporbante_aval=$request->file("comporbante_aval");
          $Nombre_doc_comporbante_aval = "comprobante_domicilio_aval_"."$idaval".".".$file_doc_comporbante_aval->guessExtension(); 
          $ruta_doc_comporbante_aval = public_path($Rutacarpeta."/".$Nombre_doc_comporbante_aval);
          $documento2 = documentos::find($avalDoc);
          $documento2->comprobante_domicilio =  $Nombre_doc_comporbante_aval;
          $documento2->status_com_dom = 'NULL';
          $documento2->updated_at = $fecha;
          $documento2->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_comporbante_aval))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_comporbante_aval));
            copy($file_doc_comporbante_aval, $ruta_doc_comporbante_aval);
          }else{copy($file_doc_comporbante_aval, $ruta_doc_comporbante_aval);}
         }else{error_log('No tienes este archivo');}


        if($request->hasFile("comporbante_ingreso_aval"))
        {
          $file_doc_ingreso_aval=$request->file("comporbante_ingreso_aval");
          $Nombre_comporbante_ingreso_aval = "comprobante_ingreso_aval_"."$idaval".".".$file_doc_ingreso_aval->guessExtension(); 
          $ruta_comporbante_ingreso_aval = public_path($Rutacarpeta."/".$Nombre_comporbante_ingreso_aval);
          $documento2 = documentos::find($avalDoc);
          $documento2->comprobante_ingresos =  $Nombre_comporbante_ingreso_aval;
          $documento2->status_com_ingre = 'NULL';
          $documento2->updated_at = $fecha;
          $documento2->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_comporbante_ingreso_aval))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_comporbante_ingreso_aval));
            copy($file_doc_ingreso_aval, $ruta_comporbante_ingreso_aval);
          }else{copy($file_doc_ingreso_aval, $ruta_comporbante_ingreso_aval);}
        }else{error_log('No tienes este archivo');}


        if($request->hasFile("soli_credito_aval"))
        {
          $file_doc_ofi_soli_cred_aval=$request->file("soli_credito_aval");
          $Nombre_doc_ofi_soli_cred_aval = "comprobante_solicitud_aval_"."$idaval".".".$file_doc_ofi_soli_cred_aval->guessExtension(); 
          $ruta_doc_ofi_soli_cred_aval = public_path($Rutacarpeta."/".$Nombre_doc_ofi_soli_cred_aval);
          $documento2 = documentos::find($avalDoc);
          $documento2->solicitud_credito = $Nombre_doc_ofi_soli_cred_aval;
          $documento2->status_sol_cre = 'NULL';
          $documento2->updated_at = $fecha;
          $documento2->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_ofi_soli_cred_aval))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_ofi_soli_cred_aval));
            copy($file_doc_ofi_soli_cred_aval, $ruta_doc_ofi_soli_cred_aval);
          }else{copy($file_doc_ofi_soli_cred_aval, $ruta_doc_ofi_soli_cred_aval);}
        }else{error_log('No tienes este archivo');}


        if($request->hasFile("consulta_buro_aval"))
        {
          $file_doc_buro_aval=$request->file("consulta_buro_aval");
          $Nombre_doc_buro_aval = "comprobante_buro_aval_"."$idaval".".".$file_doc_buro_aval->guessExtension(); 
          $ruta_doc_buro_aval = public_path($Rutacarpeta."/".$Nombre_doc_buro_aval);
          $documento2 = documentos::find($avalDoc);
          $documento2->autorizacion_buro =  $Nombre_doc_buro_aval;
          $documento2->status_aut_buro = 'NULL';
          $documento2->updated_at = $fecha;
          $documento2->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_doc_buro_aval))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_doc_buro_aval));
            copy($file_doc_buro_aval, $ruta_doc_buro_aval);
          }else{copy($file_doc_buro_aval, $ruta_doc_buro_aval);}
        }else{error_log('No tienes este archivo');}


        if($request->hasFile("veri_domi_aval"))
        {
          $file_doc_veri_dom_aval=$request->file("veri_domi_aval");
          $Nombre_veri_dom_aval = "comprobante_verificacion_dom_aval_"."$idaval".".".$file_doc_veri_dom_aval->guessExtension(); 
          $ruta_veri_dom_aval = public_path($Rutacarpeta."/".$Nombre_veri_dom_aval);
          $documento2 = documentos::find($avalDoc);
          $documento2->verificacion_domicilio = $Nombre_veri_dom_aval;
          $documento2->status_ver_dom = 'NULL';
          $documento2->updated_at = $fecha;
          $documento2->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombre_veri_dom_aval))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_veri_dom_aval));
            copy($file_doc_veri_dom_aval, $ruta_veri_dom_aval);
          }else{copy($file_doc_veri_dom_aval, $ruta_veri_dom_aval);}
        }else{error_log('No tienes este archivo');}

        if($request->hasFile("acta_matrimonio"))
        {
          $file_act_mat=$request->file("acta_matrimonio");
          $Nombredoc_act_mat = "acta_matrimonio_"."$iddistribuidor".".".$file_act_mat->guessExtension();
          $ruta_doc_act_mat = public_path($Rutacarpeta."/".$Nombredoc_act_mat);
          $documento1 = documentos::find($disDoc);
          $documento1->acta_matrimonio = $Nombredoc_act_mat;
          $documento1->status_act_matri = 'NULL';
          $documento1->updated_at = $fecha;
          $documento1->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombredoc_act_mat))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombredoc_act_mat));
            copy($file_act_mat, $ruta_doc_act_mat);
          }else{copy($file_act_mat, $ruta_doc_act_mat);}
        }else{error_log('No tienes este archivo');}


        if($request->hasFile("comprobante_propiedad"))
        {
          $file_comp_prop=$request->file("comprobante_propiedad");
          $Nombredoc_comp_prop = "comprobante_propiedad_"."$iddistribuidor".".".$file_comp_prop->guessExtension();
          $ruta_doc_comp_prop = public_path($Rutacarpeta."/".$Nombredoc_comp_prop);
          $documento1 = documentos::find($disDoc);
          $documento1->comprobante_propiedad = $Nombredoc_comp_prop;
          $documento1->status_compro_prop = 'NULL';
          $documento1->updated_at = $fecha;
          $documento1->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombredoc_comp_prop))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombredoc_comp_prop));
           copy($file_comp_prop, $ruta_doc_comp_prop);
          }else{copy($file_comp_prop, $ruta_doc_comp_prop);}
        }else{error_log('No tienes este archivo');}


        if( $request->hasFile("comprobante_propiedad_aval"))
        {
          $file_comp_prop_aval=$request->file("comprobante_propiedad_aval");
          $Nombredoc_comp_prop_aval = "comprobante_propiedad_aval_"." $idaval".".".$file_comp_prop_aval->guessExtension();
          $ruta_doc_comp_prop_aval = public_path($Rutacarpeta."/".$Nombredoc_comp_prop_aval);
          $documento2 = documentos::find($avalDoc);
          $documento2->comprobante_propiedad = $Nombredoc_comp_prop_aval;
          $documento2->status_compro_prop = 'NULL';
          $documento2->updated_at = $fecha;
          $documento2->save();
          if(file_exists(public_path($Rutacarpeta."/".$Nombredoc_comp_prop_aval))){
            File::deleteDirectory(public_path($Rutacarpeta."/".$Nombredoc_comp_prop_aval));
            copy($file_comp_prop_aval, $ruta_doc_comp_prop_aval);
          }else{copy($file_comp_prop_aval, $ruta_doc_comp_prop_aval);}
        }else{error_log('No tienes este archivo');}
    

        $documento1 = documentos::find($disDoc);
        $documento1->updated_by = auth()->user()->name;
        $documento1->save();

        $documento2 = documentos::find($avalDoc);
        $documento2->updated_by = auth()->user()->name;
        $documento2->save();

        if($documento2->save() && $documento1->save()){
      
          if($estado=='pro_rev'){
            return redirect()->route('getGestionFase2')->with("success","ok");
          }
          else{
            return redirect()->route('getGestionFase1')->with("success","ok");
          }

        }
        else{
          if($estado=='pro_rev'){
            return redirect()->route('getGestionFase2')->with("error","ok");
          }
          else{
            return redirect()->route('getGestionFase1')->with("error","ok");
          }
        }
       
 
  }

  public function getverdoc(int $id){
    $vardocumentos =  $this->mostrardocumentacion($id);
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $vardocumentosaval= $this->docAval($id);
    return view('vales.Captura.Fase1.mostrar_documentacion',compact('varpantallas','varsubmenus','vardocumentos','vardocumentosaval'));
  }

  public function verpdf(int $contrato, String $filename){

      $RUTA = "Expedientes/distribuidores"."/$contrato"."/"."$filename";
      $path = public_path($RUTA);
      return Response::make(file_get_contents($path), 200, [
      'Content-Type' => 'application/pdf',
      'Content-Disposition' => 'inline; filename="'.$RUTA.'"'
      ]);
  }

  public function getGestionFase2(){
        $idusuario=auth()->user()->id;
        $varmesadecredito =$this-> obtenermesacred();
        $varpantallas=$this->Traermenuenc();
        $varsubmenus=$this->Traermenudet();
        $varcreditoval=$this->obtenercfredvalidado();
        $varcredito_rec_dic = $this-> obtener_cred_rev_dic();
        $varnotificaciones = $this->obtenermensajesnoleidosxusuario($idusuario);
    
          return view('vales.Captura.Fase2.IndexMesaCredito',compact('varpantallas','varsubmenus','varmesadecredito','varcreditoval','varcredito_rec_dic','varnotificaciones'));
        
  }

  public function getEditDistribuidor(){
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();

      return view('vales.Captura.Fase2.editDistribuidor',compact('varpantallas','varsubmenus'));
    
  }

  public function getSolicitudMesaCredito(int $id){

    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $vardatossolicitud= $this->obtenersolicitud($id);
    $varConyuge = $this->obtenerConyuge($id);
    $veraval= $this->solicitudaval($id);
    $vardocumentos =  $this->mostrardocumentacion($id);
    $vardocumentosaval= $this->docAval($id);

    $varhistorial = $this->obtenerhistorial($id);
    $varmensajes = $this->obtener_mensajes($id);

    return view('vales.Captura.Fase2.solicitudMesaCredito',compact('varpantallas','varsubmenus','vardatossolicitud','veraval','vardocumentos','varhistorial','varmensajes','vardocumentosaval','varConyuge')); 
  }

  public function getCreditosDictamen(){
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
      return view('vales.Captura.Fase2.creditosDictamen',compact('varpantallas','varsubmenus'));
  }

  public function enviaramesa_credito(int $iddistribuidor){
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');


    $tipoD=distribuidores::find($iddistribuidor);
    $tipoD->status ='pro_dic';
    $tipoD->updated_at = $fecha;
    $tipoD->updated_by = auth()->user()->name;
    $tipoD->save();

    if($tipoD->save()){

      $historial = new historial();
      $historial->iddistribuidor =$iddistribuidor;
      $historial->status ='pro_dic';
      $historial->descripcion_status='Enviado a mesa de credito';
      $historial->updated_at = $fecha;
      $historial->updated_by = auth()->user()->name;
      $historial->save();

      return redirect()->route('getGestionFase1')->with("successMesaCredito","¡Sigue proceso en Creditos en Dictamen!");
    }
    else{
      return redirect()->route('getGestionFase1')->with("warning","Incorrecto");
    }
  }

  public function enviaramesa_credito_act(int $iddistribuidor){

    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');

    $tipoD=distribuidores::find($iddistribuidor);
    $tipoD->status ='pro_dic';
    $tipoD->updated_at = $fecha;
    $tipoD->updated_by = auth()->user()->name;
    $tipoD->save();

    if($tipoD->save()){
      $Upstatus = DB::select('update tblhistorial set status = "pro_dic", descripcion_status = "Enviado a mesa de credito" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warning","Incorrecto");
    }
  }

  public function Guardar_observaciones(Request $request){

    $idreferenciadis = $request->get('idreferencia');
    $idreferenciaava= $request->get('idreferenciaaval');
    $iddistribuidor = $request->get('iddistribuidor');
    $idaval= $request->get('idaval');
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');
    $capAut = $request->get('capital_autorizado');
    $solicitudDis =  $this->obtenersolicitud($iddistribuidor);
    

    foreach ($solicitudDis as $disSol){
      $capital = $disSol->capital;
    }


    if($capAut <= $capital){
    $documento1=documentos::find($idreferenciadis);
    $documento1->status_ide_ofi = $request->get('identificacionDis');
    $documento1->status_com_dom = $request->get('comprobanteDomicilioDis');
    $documento1->status_com_ingre =$request->get('comprobanteingreso');
    $documento1->status_sol_cre =  $request->get('solicitudCreditoDis');
    $documento1->status_aut_buro = $request->get('consultaBuroDis');
    $documento1->status_ver_dom = $request->get('verificacionDomicilioDis');
    $documento1->status_compro_prop =  $request->get('comprobantePropiedadDis');
    $documento1->status_act_matri =  $request->get('actaMatrimonioDis');
    $documento1->updated_at = $fecha;
    $documento1->updated_by = auth()->user()->name;
    $documento1->save();

    $documento2=documentos::find($idreferenciaava);
    $documento2->status_ide_ofi =$request->get('identificacioAval');
    $documento2->status_com_dom = $request->get('comprobanteDomicilioAval');
    $documento2->status_com_ingre = $request->get('comprobanteingresoaval');
    $documento2->status_sol_cre = $request->get('solicitudCreditoAval');
    $documento2->status_aut_buro = $request->get('consultaBuroAval');
    $documento2->status_ver_dom = $request->get('verificacioDomicilioAval');
    $documento2->status_compro_prop = $request->get('comprobantePropiedadAval');
    $documento2->updated_at = $fecha;
    $documento2->updated_by = auth()->user()->name;
    $documento2->save();
    
      
    $Upstatus = DB::select('update tblhistorial set status = "pro_rev", descripcion_status = "La solicitud tiene observaciones" WHERE iddistribuidor = ?;', [$iddistribuidor]);
    $tipo=distribuidores::find($iddistribuidor);
    $tipo->status ='pro_rev';
    $tipo->capital_autorizado = $capAut;
    $tipo->updated_at = $fecha;
    $tipo->save();

      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warningAut2","Incorrecto");
    }
  }

  public function rechazar_distribuidor(int $iddis, int $idaval){
    $iddistribuidor =$iddis;
    $idaval = $idaval;
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');


    $distribuidor = distribuidores::find($iddistribuidor);
    $distribuidor->status = 'pro_rec';
    $distribuidor->capital_autizado = 0;
    $distribuidor->updated_at = $fecha;
    $distribuidor->updated_by = auth()->user()->name;
    $distribuidor->save();
    
    if($distribuidor->save()){

      $Upstatus = DB::select('update tblhistorial set status = "pro_rec", descripcion_status = "Se rechazo la solicitud" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      $UpDocDis = DB::select('update tbldocumentacion set status_ide_ofi = "R", status_com_dom = "R", status_com_ingre = "R", status_sol_cre = "R", status_aut_buro = "R", status_ver_dom = "R" , status_compro_prop = "R", status_act_matri = "R" WHERE  id_tipo = ?;', [$iddistribuidor]);
      $UpDocDis = DB::select('update tbldocumentacion set status_ide_ofi = "R", status_com_dom = "R", status_com_ingre = "R", status_sol_cre = "R", status_aut_buro = "R", status_ver_dom = "R", status_compro_prop = "R" WHERE  id_tipo = ?;', [$idaval]);
      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warning","Incorrecto");
    }
  }

  public function autorizar_distribuidor(int $iddis, int $idaval){
    $iddistribuidor =$iddis;
    $idaval = $idaval;
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');

    $solicitudDis =  $this->obtenersolicitud($iddistribuidor);
    $solicitudAval =   $this->solicitudaval($iddistribuidor);

    foreach ($solicitudDis as $disSol){
      $capital_autorizado = $disSol->capital_autorizado;
      $capital = $disSol->capital;
    }
    
    if($capital_autorizado > 0 && $capital_autorizado <= $capital  ){
      $distribuidor = distribuidores::find($iddistribuidor);
      $distribuidor->status = 'pro_aut';
      $distribuidor->updated_at = $fecha;
      $distribuidor->updated_by = auth()->user()->name;
      $distribuidor->capital_autorizado = $capital_autorizado;
      $distribuidor->capital = $capital_autorizado;
      $distribuidor->save();

      $Upstatus = DB::select('update tblhistorial set status = "pro_aut", descripcion_status = "Se apobó la solicitud" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      $UpDocDis = DB::select('update tbldocumentacion set status_ide_ofi = "A", status_com_dom = "A", status_com_ingre = "A", status_sol_cre = "A", status_aut_buro = "A", status_ver_dom = "A", status_compro_prop = "A", status_act_matri = "A" WHERE  id_tipo = ?;', [$iddistribuidor]);
      $UpDocDis = DB::select('update tbldocumentacion set status_ide_ofi = "A", status_com_dom = "A", status_com_ingre = "A", status_sol_cre = "A", status_aut_buro = "A", status_ver_dom = "A", status_compro_prop = "A" WHERE  id_tipo = ?;', [$idaval]);
      
      // return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
      $pdf = \PDF::setPaper('letter')->loadView('vales.PDF.contrato',compact('solicitudDis','solicitudAval'));
      return $pdf->download("contrato_$iddistribuidor.pdf");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warningAut","Incorrecto");
    }
  }

  public function enviar_mensaje(string $tipou, int $iddistribuidor, Request $request){
    $idusuario=auth()->user()->id;

      $varusuario = $this-> obtenerusuariosxname($idusuario);
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
        $mensaje->status = "null";
        $mensaje->texto = $strmensaje;
        $mensaje->idusuario=$idusuario;
        $mensaje->created_at=$fecha;
        $mensaje->created_by = auth()->user()->name;

          if($mensaje->save())
            {
              return back()->with("success","correcto");
            }
          else
            {
              return back()->with("noRespuesta","debes esperar la respuesta para reponder");
            }
      }
      else
      {
          foreach($varturno as $var)
          {
              if($var->tipo_usuario == $tipou)
              {
                return back()->with("noRespuesta","debes esperar la respuesta para reponder");
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
                  $varultimo = $this->obtenerturno($iddistribuidor);
                  foreach($varultimo as $ultimams){
                    $ultimoidmensaje=$ultimams->id;
                  }
                 
                 
                  $varultimoid = mensajes::find($ultimoidmensaje);
                  $varultimoid->status ="leido";
                  $varultimoid->save();

                   $mensaje = new mensajes();
                   $mensaje->iddistribuidor= $iddistribuidor;
                   $mensaje->tipo_usuario=$tipou;
                   $mensaje->turno =$turno;
                   $mensaje->status = "null";
                   $mensaje->texto = $strmensaje;
                   $mensaje->idusuario=$idusuario;
                   $mensaje->created_at=$fecha;
                   
                   if($mensaje->save())
                   { 
                    return back()->with("success","correcto");
                   }
                   else{
                    return back()->with("noRespuesta","debes esperar la respuesta para reponder");
                   }
               }
        }          
    }
  } 
  
  public function actualizarnotificaciones(){
    return redirect()->route('getGestionFase2');
  }

  public function iniciarValidacion(int $iddistribuidor){
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');

    $tipoD=distribuidores::find($iddistribuidor);
    $tipoD->status ='val';
    $tipoD->updated_at = $fecha;
    $tipoD->updated_by = auth()->user()->name;
    $tipoD->save();

    if($tipoD->save()){
      $Upstatus = DB::select('update tblhistorial set status = "val", descripcion_status = "Proceso de validación Iniciado" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warning","Incorrecto");
    }
  }

  public function getSubirDocVal(int $iddistribuidor){
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $iddis = $iddistribuidor;
      return view('vales.Captura.Fase2.subirDoc_validacion',compact('varpantallas','varsubmenus','iddis'));
  }

  public function guardar_docVal(Request $request){
        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
        $iddis = $request->get('iddistribuidor');

    if($request->hasFile("contrato") && $request->hasFile("pagare")){
        $file_contra=$request->file("contrato");
        $file_pagare=$request->file("pagare");
        $Rutacarpeta = "Expedientes/distribuidores/".$iddis;
        
        $obtenerDocumentosDis =  $this->obtenerDocumentosDis($iddis);
        foreach ($obtenerDocumentosDis as $disDoc){
          $idDoc = $disDoc->id; 
        }
        
          $nombre_contrato = "contrato_"."$iddis".".".$file_contra->guessExtension();   
          $nombre_pagare = "pagare_"."$iddis".".".$file_pagare->guessExtension();   

          $ruta_contra = public_path($Rutacarpeta."/".$nombre_contrato);
          $ruta_pagare = public_path($Rutacarpeta."/".$nombre_pagare);

          copy($file_contra, $ruta_contra);
          copy($file_pagare, $ruta_pagare);

          if(file_exists(public_path($Rutacarpeta."/".$nombre_contrato)) && file_exists(public_path($Rutacarpeta."/".$nombre_pagare)))
          {
            $documento = documentos::find($idDoc);
            $documento->contrato= $nombre_contrato;
            $documento->status_contra = 'NULL';
            $documento->updated_at = $fecha;
            $documento->updated_by = auth()->user()->name;
            $documento->save();

            $documento2 = documentos::find($idDoc);
            $documento2->pagare = $nombre_pagare;
            $documento2->status_pagare = 'NULL';
            $documento2->updated_at = $fecha;
            $documento2->updated_by = auth()->user()->name;
            $documento2->save();

            $distribuidor = distribuidores::find($iddis);
            $distribuidor->status = 'pro_val';
            $distribuidor->updated_at = $fecha;
            $distribuidor->updated_by = auth()->user()->name;
            $distribuidor->save();
            return redirect()->route('getGestionFase2')->with("success","ok");
          }
          else{
            return redirect()->route('getGestionFase2')->with("warningDoc","ok");
          }
      }
      else{
        return redirect()->route('getGestionFase2')->with("warning","ok");
      }
  }

  public function enviaramesa_credito_val(int $iddistribuidor){

    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');

    $tipoD=distribuidores::find($iddistribuidor);
    $tipoD->status ='pro_valDic';
    $tipoD->updated_at = $fecha;
    $tipoD->updated_by = auth()->user()->name;
    $tipoD->save();

    if($tipoD->save()){
      $Upstatus = DB::select('update tblhistorial set status = "pro_valDic", descripcion_status = "Enviado a mesa de credito el contrato" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warning","Incorrecto");
    }
  }

  public function guardar_observacionesVal(Request $request){

    $idreferenciadis = $request->get('idRefeContra');
    $iddistribuidor = $request->get('idDisContra');
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');
    

    $doc=documentos::find($idreferenciadis);
    $doc->status_contra =  $request->get('contrato');
    $doc->status_pagare =  $request->get('pagare');
    $doc->updated_at = $fecha;
    $doc->updated_by = auth()->user()->name;
    
    $obtenerDocumentosDis =  $this->obtenerDocumentosDis($iddistribuidor);
        foreach ($obtenerDocumentosDis as $disDoc){
          $disTipo = $disDoc->Tipo;
        }
    
    if($disTipo =="Distribuidor"){
      $doc->save(); 
      $Upstatus = DB::select('update tblhistorial set status = "pro_valRev", descripcion_status = "La validacion tiene observaciones" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      $tipoD=distribuidores::find($iddistribuidor);
      $tipoD->status ='pro_valRev';
      $tipoD->updated_at = $fecha;
      $tipoD->updated_by = auth()->user()->name;
      $tipoD->save();

      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warningDis","Incorrecto");
    }
  }

  public function denegar_validacion(int $iddis){
    $iddistribuidor =$iddis;
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');

    $obtenerDocumentosDis =  $this->obtenerDocumentosDis($iddistribuidor);
        foreach ($obtenerDocumentosDis as $disDoc){
          $disTipo = $disDoc->Tipo;
        }
    
    if($disTipo =="Distribuidor"){
      $distribuidor = distribuidores::find($iddistribuidor);
      $distribuidor->status = 'pro_den';
      $distribuidor->updated_at = $fecha;
      $distribuidor->updated_by = auth()->user()->name;
      $distribuidor->save();

      $Upstatus = DB::select('update tblhistorial set status = "pro_den", descripcion_status = "Se rechazo la validacion" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      $UpDocDis = DB::select('update tbldocumentacion set status_contra = "R",  status_pagare = "R"   WHERE  id_tipo = ?;', [$iddistribuidor]);

      return redirect()->route('getGestionFase2')->with("success","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warningDis","Incorrecto");
    }
  }

  public function aprobar_validacion(int $iddis){
    $iddistribuidor =$iddis;
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');

    $obtenerDocumentosDis =  $this->obtenerDocumentosDis($iddistribuidor);
        foreach ($obtenerDocumentosDis as $disDoc){
          $disTipo = $disDoc->Tipo;
    }

    
    if($disTipo =="Distribuidor"){
      $distribuidor = distribuidores::find($iddistribuidor);
      $distribuidor->status = 'pro_apro';
      $distribuidor->updated_at = $fecha;
      $distribuidor->updated_by = auth()->user()->name;
      $distribuidor->save();

      $Upstatus = DB::select('update tblhistorial set status = "pro_apro", descripcion_status = "Se apobó el credito" WHERE iddistribuidor = ?;', [$iddistribuidor]);
      $UpDocDis = DB::select('update tbldocumentacion set status_contra = "A", status_pagare = "A"  WHERE  id_tipo = ?;', [$iddistribuidor]);
      return redirect()->route('getGestionFase2')->with("successValera","¡Se guardaron los cambios correctamente!");
    }
    else{
      return redirect()->route('getGestionFase2')->with("warningDis","Incorrecto");
    }
  }

  public function getactualizarValidacion(int $iddistribuidor){
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $iddis = $iddistribuidor; 
        $disDoc =  $this->obtenerDocumentosDis($iddis);
        $vardocumentos =  $this->mostrardocumentacion($iddis);
        return view('vales.Captura.Fase2.actualizar_validacion',compact('varpantallas','varsubmenus','iddis','disDoc','vardocumentos'));
  }

  public function validacion_actualizarDocumentos(Request $request){
    $date = Carbon::now();
    $fecha = $date->format('Y-m-d');
    $iddistribuidor =  $request->get('id');
    $disDoc = $request->get('disDoc');
    $Rutacarpeta = "Expedientes/distribuidores/".$iddistribuidor;
    
      //chacamos si traen algo los inputs
      if($request->hasFile("contrato") )
      {
        $file_contra=$request->file("contrato");
        $Nombredoc_contra = "contrato_"."$iddistribuidor".".".$file_contra->guessExtension();
        $ruta_contra = public_path($Rutacarpeta."/".$Nombredoc_contra);
        $documento1 = documentos::find($disDoc);
        $documento1->contrato = $Nombredoc_contra;
        $documento1->status_contra = 'NULL';
        $documento1->updated_at = $fecha;
        $documento1->save();
        if(file_exists(public_path($Rutacarpeta."/".$Nombredoc_contra))){
          File::deleteDirectory(public_path($Rutacarpeta."/".$Nombredoc_contra));
          copy($file_contra, $ruta_contra);
        }else{copy($file_contra, $ruta_contra);}
      } else{error_log('No tienes este archivo');}


      if($request->hasFile("pagare"))
      {
        $file_pagare=$request->file("pagare");
        $Nombre_pagare = "pagare_"."$iddistribuidor".".".$file_pagare->guessExtension(); 
        $ruta_pagare = public_path($Rutacarpeta."/".$Nombre_pagare);
        $documento1 = documentos::find($disDoc);
        $documento1->pagare =  $Nombre_pagare;
        $documento1->status_pagare = 'NULL';
        $documento1->updated_at = $fecha;
        $documento1->save();
        if(file_exists(public_path($Rutacarpeta."/".$Nombre_pagare))){
          File::deleteDirectory(public_path($Rutacarpeta."/".$Nombre_pagare));
          copy($file_pagare, $ruta_pagare);
        }else{ copy($file_pagare, $ruta_pagare);}
      } else{error_log('No tienes este archivo');}

      $documento1 = documentos::find($disDoc);
      $documento1->updated_at = $fecha;
      $documento1->updated_by = auth()->user()->name;
      $documento1->save();

      if($documento1->save()){
        return redirect()->route('getGestionFase2')->with("success","ok");
      }
      else{
          return redirect()->route('getGestionFase2')->with("error","ok");
      }
       
 
  }


}

