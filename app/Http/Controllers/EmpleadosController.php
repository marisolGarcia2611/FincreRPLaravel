<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Empresas;
use App\Models\nominas;
use App\Models\Vistas;
use App\Models\empleados_bajas;
use App\Http\Requests\StoreEmpleadosRequest;
use App\Http\Requests\UpdateEmpleadosRequest;
use App\Traits\MenuTrait;
use App\Traits\DatosimpleTraits;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class EmpleadosController extends Controller
{
    
    use MenuTrait;
    use DatosimpleTraits;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
    $varpantallas =  $this->Traermenuenc();
    $varsubmenus =   $this->Traermenudet();
    $varpuestos = $this->obtenerpuestos();
    $varsucursales = $this->obtenersucursales();
    $varciudades =  $this->obtenerciudades();
    $varempresas = $this->obtenerempresas();
    $varbancos = $this->obtenerbancos();
    $varlistaempleados=  $this-> obtenerlistaempleados();
    $vartipodescinfo= $this->obtenertipodescinfonavit();
    $date = Carbon::now();
    $date = $date->format('Y-m-d');
        return view('Empleados.Index',compact('varpantallas','varsubmenus','varlistaempleados','varpuestos','varsucursales','varciudades','varempresas','varbancos','vartipodescinfo'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpleadosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $ultimoemple =$this->obtenerultimoempleado();
        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');

        if($request->hasFile("urlpdff")){
            $file=$request->file("urlpdff");
            $id = $request->get('rfc');

            $nombre = "contrato_"."$id".".".$file->guessExtension();
            $ruta = public_path("DetallesEmpleados/contratos/".$nombre);

            if($file->guessExtension()=="pdf"){
                $empleados = new empleados();
                $empleados->primer_nombre = $request->get('primer_nombre');
                $empleados->segundo_nombre = $request->get('segundo_nombre');
                $empleados->apellido_paterno = $request->get('apellido_paterno');
                $empleados->apellido_materno = $request->get('apellido_materno');
                $empleados->telefono = $request->get('telefono');
                $empleados->correo = $request->get('correo');
                $empleados->idpuesto = $request->get('puesto');
                $empleados->grado_estudio= $request->get('grado_estudio');
                $empleados->nacionalidad = $request->get('nacionalidad');
                $empleados->idsucursal = $request->get('sucursal');
                $empleados->idciudad = $request->get('ciudad');
                $empleados->idbanco = $request->get('banco');
                $empleados->calle = $request->get('calle');
                $empleados->colonia = $request->get('colonia');
                $empleados->numero_interior = $request->get('numero_interior');
                $empleados->numero_exterior = $request->get('numero_exterior');
                $empleados->codigo_postal = $request->get('codigo_postal');
                $empleados->sexo = $request->get('sexo');
                $empleados->fecha_nacimiento = $request->get('fecha_nacimiento');
                $empleados->foto = 0;
                $empleados->archivo_baja = 0;
                $empleados->rfc = $request->get('rfc');
                $empleados->nss = $request->get('nss');
                $empleados->curp = $request->post('curp');
                $empleados->tipo_sangre = $request->get('tipo_sangre');
                $empleados->contacto_emergencia = $request->get('contacto_emergencias');
                $empleados->telefono_emergencia = $request->get('telefono_emergencia');
                $empleados->estado = 'A';
                $empleados->descripcion_estado = 'ALTA EMPLEADO';
                $empleados->estado_civil = $request->get('estado_civil');
                $empleados->created_at = $fecha;
                $empleados->fecha_ingreso = $request->get('fecha_alta');
                $empleados->save();
        
        
                //insertamos en la tabla empleados
                $nominas = new nominas();
                $nominas->idempresa=$request->get('cmbempresas');
                $nominas->idempleado=$ultimoemple->id+1;
                $nominas->idbancos=$request->get('banco');
                $nominas->salario_bruto=$request->get('salario_bruto');
                $nominas->salario_neto=$request->get('salario_neto');
                $nominas->salario_fijo=$request->get('salario_fijo');
                $nominas->pago_imss=0.00;
                $nominas->excedente=$request->get('excedente');
                $nominas->sueldo_fiscal=$request->get('sueldo_fiscal');
                $nominas->efectivo=$request->get('efectivo');
                $nominas->numero_tarjeta=$request->get('numero_tarjeta');
                $nominas->numero_cuenta=$request->get('numero_cuenta');
                $nominas->id_tipoinfonavit = $request->post('tipo_infonavit');
                $nominas->factor_sua = $request->post('factor_sua');
                $nominas->descuento_quincenal = $request->post('descuento_quincenal');
                $nominas->numero_credito_infonavit = $request->post('numero_credito_infonavit');
                $nominas->fecha_ingreso_imss = $request->get('fecha_ingreso_imss');
                $nominas->created_at = $fecha;
                $nominas->save();
                copy($file, $ruta);
                return redirect()->route('verempleados')->with("success","¡Se guardaron los cambios correctamente!");
                
            }else{
                return redirect()->route('verempleados')->with("PDFwarning","¡Se guardaron los cambios correctamente!");
            }

        }

        // $texto = "Acrchivo enviado";
        // return response($texto, 200);
        // return view('Empleados.Index',compact('varpantallas','varsubmenus','varlistaempleados','varpuestos','varsucursales','varciudades','varempresas','varbancos','vartipodescinfo'));
            // ->with("success","Empleado creado correctamente")
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varpuestos = $this->obtenerpuestos();
        $varsucursales = $this->obtenersucursales();
        $varciudades =  $this->obtenerciudades();
        $varempresas = $this->obtenerempresas();
        $varbancos = $this->obtenerbancos();
        $varlistaempleados=  $this-> obtenerlistaempleados();
        $vartipodescinfo= $this->obtenertipodescinfonavit();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $obtenerempleado = $this->obtenerlistaempleadoid($id);
            return view('Empleados.edit',compact('varpantallas','varsubmenus','varlistaempleados','varpuestos','varsucursales','varciudades','varempresas','varbancos','obtenerempleado','vartipodescinfo'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpleadosRequest  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function cambiar(request $request, $id)
    {
           // $ultimoemple =$this->obtenerultimoempleado();
           $date = Carbon::now();
           $fecha = $date->format('Y-m-d');
         
     
           $empleados = Empleados::find($id);
           $empleados->primer_nombre = $request->post('primer_nombre');
           $empleados->segundo_nombre = $request->post('segundo_nombre');
           $empleados->apellido_paterno = $request->post('apellido_paterno');
           $empleados->apellido_materno = $request->post('apellido_materno');
           $empleados->telefono = $request->post('telefono');
           $empleados->correo = $request->post('correo');
           $empleados->grado_estudio= $request->post('grado_estudio');
           $empleados->nacionalidad = $request->post('nacionalidad');
           $empleados->idsucursal = $request->post('sucursal');
           $empleados->idciudad = $request->post('ciudad');
           $empleados->idbanco = $request->post('banco');
           $empleados->calle = $request->post('calle');
           $empleados->colonia = $request->post('colonia');
           $empleados->numero_interior = $request->post('numero_interior');
           $empleados->numero_exterior = $request->post('numero_exterior');
           $empleados->codigo_postal = $request->post('codigo_postal');
           $empleados->sexo = $request->post('sexo');
           $empleados->fecha_nacimiento = $request->post('fecha_nacimiento');
        //    $empleados->foto = $request->post('foto');
           $empleados->rfc = $request->post('rfc');
           $empleados->nss = $request->post('nss');
           $empleados->curp = $request->post('curp');
           $empleados->tipo_sangre = $request->post('tipo_sangre');
           $empleados->contacto_emergencia = $request->post('contacto_emergencias');
           $empleados->telefono_emergencia = $request->post('telefono_emergencia');
           $empleados->estado = 'A';
           $empleados->descripcion_estado = 'alta empleado';
           $empleados->estado_civil = $request->post('estado_civil');
           $empleados->fecha_ingreso = $request->post('fecha_alta');
           $empleados->estado_civil = $request->post('estado_civil');
           $empleados->updated_at=$fecha;
           $empleados->save();

           $idnomina = $request->post('idnomina');
           $nominas =  nominas::find($idnomina);
           $nominas->idempresa=$request->post('cmbempresas');
           $nominas->idbancos=$request->post('banco');
           $nominas->salario_bruto=$request->post('salario_bruto');
           $nominas->salario_neto=$request->post('salario_neto');
           $nominas->salario_fijo=$request->post('salario_fijo');
           $nominas->pago_imss=$request->post('pago_IMSS');
           $nominas->sueldo_fiscal=$request->post('sueldo_fiscal');
           $nominas->excedente=$request->post('excedente');
           $nominas->efectivo=$request->post('efectivo');
           $nominas->numero_tarjeta=$request->post('numero_tarjeta');
           $nominas->numero_cuenta=$request->post('numero_cuenta');
           $nominas->id_tipoinfonavit = $request->post('tipo_infonavit');
           $nominas->factor_sua = $request->post('factor_sua');
           $nominas->descuento_quincenal = $request->post('descuento_quincenal');
           $nominas->numero_credito_infonavit = $request->post('numero_credito_infonavit');
           $nominas->fecha_ingreso_imss = $request->post('fecha_ingreso_imss');
           $nominas->updated_at=$fecha ;
           $nominas->save();
     
        //    return redirect()->route('verempleados')->with("success","¡Se guardaron los cambios correctamente!");
        if($empleados->save() && $nominas->save()){
            return redirect()->route('verempleados')->with("success","¡Se guardaron los cambios correctamente!");
        }
        return redirect()->route('verempleados')->with("warning","No se logro");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */

     public function vistaReactivar($id)
    {
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varpuestos = $this->obtenerpuestos();
        $varsucursales = $this->obtenersucursales();
        $varciudades =  $this->obtenerciudades();
        $varempresas = $this->obtenerempresas();
        $varbancos = $this->obtenerbancos();
        $varlistaempleados=  $this-> obtenerlistaempleados();
        $vartipodescinfo= $this->obtenertipodescinfonavit();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $obtenerempleado = $this->obtenerlistaempleadoid($id);
            return view('Empleados.reactivar',compact('varpantallas','varsubmenus','varlistaempleados','varpuestos','varsucursales','varciudades','varempresas','varbancos','obtenerempleado','vartipodescinfo'));

    }

    public function traerVistaReactivar($id){
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varpuestos = $this->obtenerpuestos();
        $varsucursales = $this->obtenersucursales();
        $varciudades =  $this->obtenerciudades();
        $varempresas = $this->obtenerempresas();
        $varbancos = $this->obtenerbancos();
        $varlistaempleados=  $this-> obtenerlistaempleados();
        $vartipodescinfo= $this->obtenertipodescinfonavit();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $obtenerempleado = $this->obtenerlistaempleadoid($id);
            return view('Empleados.reactivar',compact('varpantallas','varsubmenus','varlistaempleados','varpuestos','varsucursales','varciudades','varempresas','varbancos','obtenerempleado','vartipodescinfo'));
    }
    
    public function reactivar($id,request $request)
    {
        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
        
        if($request->hasFile("urlpdf")){
            
            $empleados = Empleados::find($id);
            $empleados->estado = 'A';
            $empleados->descripcion_estado = 'Reingreso de empleado';
            $empleados->updated_at=$fecha;
            $empleados->fecha_ingreso = $request->post('fecha_alta');
            $empleados->archivo_baja = 0;
           

            $idnomina = $request->post('idnomina');
            $nominas =  nominas::find($idnomina);
            $nominas->idempresa=$request->post('cmbempresas');
            $nominas->salario_bruto=$request->post('salario_bruto');
            $nominas->salario_neto=$request->post('salario_neto');
            $nominas->salario_fijo=$request->post('salario_fijo');
            $nominas->fecha_ingreso_imss = $request->post('fecha_ingreso_imss');
            $nominas->sueldo_fiscal=$request->post('sueldo_fiscal');
            $nominas->excedente=$request->post('excedente');
            $nominas->efectivo=$request->post('efectivo');
            $nominas->id_tipoinfonavit = $request->post('tipo_infonavit');
            $nominas->factor_sua = $request->post('factor_sua');
            $nominas->descuento_quincenal = $request->post('descuento_quincenal');
            $nominas->numero_credito_infonavit = $request->post('numero_credito_infonavit');
           

            $file=$request->file("urlpdf");
            $id = $request->get('rfc');
            $nombre = "contrato_"."$id".".".$file->guessExtension();
            $ruta = public_path("DetallesEmpleados/contratos/".$nombre);

            if($file->guessExtension()=="pdf"){
                $empleados->save();
                $nominas->save();
                copy($file, $ruta);
                return redirect()->route('verempleados')->with("success","¡Se guardaron los cambios correctamente!");
            }else{
                return redirect()->route('verempleados')->with("PDFwarning","¡Se guardaron los cambios correctamente!");
            }

        }

        
    }

    public function bajas(Request $request)
    {

         $date = Carbon::now();
        
        $idempleado = $request->get('ids');
        $descripcionbaja=$request->get('descripcion_baja');
        $fecha = $date->format('Y-m-d');
        $empleadosbaja = new empleados_bajas();
        $empleadosbaja->idempleado=$idempleado;
        $empleadosbaja->tipo_baja=$request->get('tipo_baja');
        $empleadosbaja->descripcion=$descripcionbaja;
        $empleadosbaja->fecha_baja=$request->get('fecha_baja');
        $empleadosbaja->dias_gratificacion=$request->get('diasgratificacion');
        $empleadosbaja->dias_aguinaldo=$request->get('dias_trabajados');
        $empleadosbaja->dias_sueldo_a_deber=$request->get('dias_trabajadosa_deber');
        $empleadosbaja->dias_vacaciones=$request->get('dias_vacaciones');
        $empleadosbaja->cantidad_gratificacion=$request->get('gratificacion');
        $empleadosbaja->cantidad_aguinaldo=$request->get('Aguinaldo_poporcional');
        $empleadosbaja->cantidad_sueldo=$request->get('sueldo_poporcional');
        $empleadosbaja->cantidad_vacaciones=$request->get('vacaciones_poporcionales');


        $empleadosbaja->cantidaddeduccion_imms=$request->get('imms');
        $empleadosbaja->cantidaddeduccion_infonavit=$request->get('infonavit');
        $empleadosbaja->cantidaddeduccion_transporte=$request->get('transporte');
        $empleadosbaja->cantidaddeduccion_prestamo=$request->get('prestamo');
        $empleadosbaja->cantidaddeduccion_otros=$request->get('otras');
        $empleadosbaja->cantidadtotal_entregada=$request->get('total_entregar');
        $empleadosbaja->created_at = $fecha;
        $empleadosbaja->save();


        $empleado = empleados::find($idempleado);
        $empleado->estado = 'I';
        $empleado->descripcion_estado = $descripcionbaja;
        $empleado->save();

       
        $datenow = $date->format('l jS \\of F Y');
        // $datenow =Carbon::setLocale(config('app.locale'));
        // setlocale(LC_ALL, 'es_MX', 'es', 'ES', 'es_MX.utf8');
        $idempleado = $request->get('ids');
        $nombreemplado=$request->get('nombre');
        $nombreempresa=$request->get('empresa');
        $puesto=$request->get('ids');
        $fecha_baja=$request->get('fecha_baja');
        $fecha_ingreso=$request->get('fecha_ingresoe');
        $salario=$request->get('salario');
        $puesto=$request->get('t_puesto');
        $rptvardiasgratificacion=  $request->get('gratificacion');
        $rtpvaraguinaldoporporcional =$request->get('Aguinaldo_poporcional');
        $rptvarsueldoporporcional =$request->get('sueldo_poporcional');
        $rptvarvacacionesporporcionales = $request->get('vacaciones_poporcionales');
        $rptvardeudaimms =$request->get('imms');
        $rptvardeduedainfonavit = $request->get('infonavit');
        $rptvardeudatransporte = $request->get('transporte');
        $rptvardeudaprestamo =$request->get('prestamo');
        $rptvarotrasdeudas = $request->get('otras');
        $totalper =$request->get('total_p');
        $rptotaldeducciones =$request->get('total_d');
        $rpttotalentregar =$request->get('total_entregar');
        $rptfechaactual=$request->get('fecha_baja');


        $fechaEmision = Carbon::parse($fecha_ingreso);
        $fechaExpiracion = Carbon::parse($fecha_baja);
        $diasDiferencia = $fechaExpiracion->diffInDays($fechaEmision);


        $pdf = \PDF::loadView('Empleados.rptfiniquito',compact('idempleado','nombreemplado','diasDiferencia','datenow','nombreempresa','fecha_baja','fecha_ingreso','salario','puesto','rpttotalentregar','totalper','rptotaldeducciones','rptvardiasgratificacion','rtpvaraguinaldoporporcional','rptvarsueldoporporcional','rptvarvacacionesporporcionales','rptvardeudaimms','rptvardeduedainfonavit','rptvardeudatransporte','rptvardeudaprestamo','rptvarotrasdeudas',));
        return $pdf->download("finiquito_empleado$idempleado.pdf");
          
    }

    public function editarBaja($id){
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $obtenerbajas = $this->obtenerbajas_empleados($id);
            return view('Empleados.baja',compact('varpantallas','varsubmenus','obtenerbajas'));
    }

    public function BajaEmpleadoEdit(Request $request)
    {

        $date = Carbon::now();
        $idempleado = $request->post('ids');
        $id = $request->post('id');
        $descripcionbaja=$request->post('descripcion_baja');
        $fecha = $date->format('Y-m-d');
        $empleadosbaja = empleados_bajas::find($id);
        $empleadosbaja->idempleado=$idempleado;
        $empleadosbaja->tipo_baja=$request->post('tipo_baja');
        $empleadosbaja->descripcion=$descripcionbaja;
        $empleadosbaja->fecha_baja=$request->post('fecha_baja');
        $empleadosbaja->dias_gratificacion=$request->post('diasgratificacion');
        $empleadosbaja->dias_aguinaldo=$request->post('dias_trabajados');
        $empleadosbaja->dias_sueldo_a_deber=$request->post('dias_trabajadosa_deber');
        $empleadosbaja->dias_vacaciones=$request->post('dias_vacaciones');
        $empleadosbaja->cantidad_gratificacion=$request->post('gratificacion');
        $empleadosbaja->cantidad_aguinaldo=$request->post('Aguinaldo_poporcional');
        $empleadosbaja->cantidad_sueldo=$request->post('sueldo_poporcional');
        $empleadosbaja->cantidad_vacaciones=$request->post('vacaciones_poporcionales');


        $empleadosbaja->cantidaddeduccion_imms=$request->post('imms');
        $empleadosbaja->cantidaddeduccion_infonavit=$request->post('infonavit');
        $empleadosbaja->cantidaddeduccion_transporte=$request->post('transporte');
        $empleadosbaja->cantidaddeduccion_prestamo=$request->post('prestamo');
        $empleadosbaja->cantidaddeduccion_otros=$request->post('otras');
        $empleadosbaja->cantidadtotal_entregada=$request->post('total_entregar');
        $empleadosbaja->updated_at = $fecha;
        $empleadosbaja->save();


        $empleado = empleados::find($idempleado);
        $empleado->descripcion_estado = $descripcionbaja;
        $empleado->save();

       
        $datenow = $date->format('l jS \\of F Y');
        $idempleado = $request->get('ids');
        $nombreemplado=$request->get('nombre');
        $nombreempresa=$request->get('empresa');
        $puesto=$request->get('ids');
        $fecha_baja=$request->get('fecha_baja');
        $fecha_ingreso=$request->get('fecha_ingresoe');
        $salario=$request->get('salario');
        $puesto=$request->get('t_puesto');
        $rptvardiasgratificacion=  $request->get('gratificacion');
        $rtpvaraguinaldoporporcional =$request->get('Aguinaldo_poporcional');
        $rptvarsueldoporporcional =$request->get('sueldo_poporcional');
        $rptvarvacacionesporporcionales = $request->get('vacaciones_poporcionales');
        $rptvardeudaimms =$request->get('imms');
        $rptvardeduedainfonavit = $request->get('infonavit');
        $rptvardeudatransporte = $request->get('transporte');
        $rptvardeudaprestamo =$request->get('prestamo');
        $rptvarotrasdeudas = $request->get('otras');
        $totalper =$request->get('total_p');
        $rptotaldeducciones =$request->get('total_d');
        $rpttotalentregar =$request->get('total_entregar');
        $rptfechaactual=$request->get('fecha_baja');


        $fechaEmision = Carbon::parse($fecha_ingreso);
        $fechaExpiracion = Carbon::parse($fecha_baja);
        $diasDiferencia = $fechaExpiracion->diffInDays($fechaEmision);


        $pdf = \PDF::loadView('Empleados.rptfiniquito',compact('idempleado','nombreemplado','diasDiferencia','datenow','nombreempresa','fecha_baja','fecha_ingreso','salario','puesto','rpttotalentregar','totalper','rptotaldeducciones','rptvardiasgratificacion','rtpvaraguinaldoporporcional','rptvarsueldoporporcional','rptvarvacacionesporporcionales','rptvardeudaimms','rptvardeduedainfonavit','rptvardeudatransporte','rptvardeudaprestamo','rptvarotrasdeudas',));
        return $pdf->download("finiquito_empleado$idempleado.pdf");
          
    }

    public function exportar_excel(){
      
        return Excel::download(new UsersExport, 'EmpleadosExport.xlsx');

    }
    public function grafica_empleados(){
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varpuestos = $this->obtenerpuestos();
        $varsucursales = $this->obtenersucursales();
        $varciudades =  $this->obtenerciudades();
        $varempresas = $this->obtenerempresas();
        $varbancos = $this->obtenerbancos();
        $varlistaempleados=  $this-> obtenerlistaempleados();
        foreach($varlistaempleados as $articulo){
            $puntos[] = ['name'=>$articulo['primer_nombre'],'y'=>floatval($articulo['idpuesto'])];
        }
        return view('Empleados.graficaempleados',['data'=> json_encode($puntos)],compact('varpantallas','varsubmenus','varlistaempleados','varpuestos','varsucursales','varciudades','varempresas','varbancos',));
    }

    public function mform(){
        return view('Empleados.Index');
    }

    public function mguardar(Request $request){
        if($request->hasFile("urlpdf")){
            $file=$request->file("urlpdf");
            $id = $request->get('idd');

            $empleados = Empleados::find($id);
            $empleados->archivo_baja = 1;
            $empleados->save();

            $nombre = "baja_"."$id".".".$file->guessExtension();
            $ruta = public_path("DetallesEmpleados/bajas/".$nombre);

            if($file->guessExtension()=="pdf"){
                copy($file, $ruta);
                return redirect()->route('verempleados')->with("success","¡Se guardaron los cambios correctamente!");
            }
            else
            {
                return redirect()->route('verempleados')->with("PDFwarning","¡Se guardaron los cambios correctamente!");
            }
        }
    }
}