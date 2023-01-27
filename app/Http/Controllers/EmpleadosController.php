<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Empresas;
use App\Models\nominas;
use App\Models\Vistas;
use App\Models\empleados_bajas;
use App\Http\Requests\StoreEmpleadosRequest;
use App\Http\Requests\UpdateEmpleadosRequest;
use App\Traits\Menutrait;
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
    public function create()
    {
        
    }
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
  
        $empleados = new empleados();
        $empleados->primer_nombre = $request->get('primer_nombre');
        $empleados->segundo_nombre = $request->get('segundo_nombre');
        $empleados->apellido_paterno = $request->get('apellido_paterno');
        $empleados->apellido_materno = $request->get('apellido_materno');
        $empleados->telefono = $request->get('telefono');
        $empleados->correo = $request->get('correo');
        $empleados->idpuesto = $request->get('puesto');
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
        $empleados->foto = $request->get('foto');
        $empleados->rfc = $request->get('rfc');
        $empleados->nss = $request->get('nss');
        $empleados->tipo_sangre = $request->get('tipo_sangre');
        $empleados->contacto_emergencia = $request->get('contacto_emergencias');
        $empleados->telefono_emergencia = $request->get('telefono_emergencia');
        $empleados->estado = 'Activo';
        $empleados->descripcion_estado = 'alta empleado';
        $empleados->estado_civil = $request->post('estado_civil');
        $empleados->created_at = $date;
        $empleados->fecha_ingreso = $request->get('fecha_alta');
        $empleados->fecha_baja = $date;
        $empleados->save();


        //insertamos en la tabla empleados
        $nominas = new nominas();
        $nominas->idempresa=$request->get('cmbempresas');
        $nominas->idempleado=$ultimoemple->id+1;
        $nominas->idbancos=$request->get('banco');
        $nominas->salario_bruto=$request->get('salario_bruto');
        $nominas->salario_neto=$request->get('salario_neto');
        $nominas->salario_fijo=$request->get('salario_fijo');
        $nominas->pago_imss=$request->get('pago_IMSS');
        $nominas->excedente=$request->get('excedente');
        $nominas->sueldo_fiscal=$request->get('sueldo_fiscal');
        $nominas->efectivo=$request->get('efectivo');
        $nominas->numero_tarjeta=$request->get('numero_tarjeta');
        $nominas->numero_cuenta=$request->get('numero_cuenta');
        $nominas->id_tipoinfonavit = $request->post('tipo_infonavit');
        $nominas->factor_sua = $request->post('factor_sua');
        $nominas->descuento_quincenal = $request->post('descuento_quincenal');
        $nominas->numero_credito_infonavit = $request->post('numero_credito_infonavit');
//checar id para que no fallen
        $nominas->created_at = $fecha;
        $nominas->save();




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
    public function update(request $request, $id)
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
           $empleados->idpuesto = $request->post('puesto');
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
           $empleados->foto = $request->post('foto');
           $empleados->rfc = $request->post('rfc');
           $empleados->nss = $request->post('nss');
           $empleados->tipo_sangre = $request->post('tipo_sangre');
           $empleados->contacto_emergencia = $request->post('contacto_emergencias');
           $empleados->telefono_emergencia = $request->post('telefono_emergencia');
           $empleados->estado = 'Activo';
           $empleados->descripcion_estado = 'alta empleado';
           $empleados->estado_civil = $request->post('estado_civil');
           $empleados->created_at = $date;
           $empleados->fecha_ingreso = $request->post('fecha_alta');
           $empleados->estado_civil = $request->post('estado_civil');
           $empleados->fecha_baja = $date;
           $empleados->save();

           $idnomina = $request->post('idnomina');
           $nominas =  nominas::find($idnomina);
           $nominas->idempresa=$request->post('cmbempresas');
           $nominas->idbancos=$request->post('banco');
           $nominas->salario_bruto=$request->post('salario_bruto');
           $nominas->salario_neto=$request->post('salario_neto');
           $nominas->salario_fijo=$request->post('salario_fijo');
           $nominas->pago_imss=$request->post('pago_IMSS');
           $nominas->sueldo_fiscal=$request->get('sueldo_fiscal');
           $nominas->excedente=$request->post('excedente');
           $nominas->efectivo=$request->post('efectivo');
           $nominas->numero_tarjeta=$request->post('numero_tarjeta');
           $nominas->numero_cuenta=$request->post('numero_cuenta');
           $nominas->id_tipoinfonavit = $request->post('tipo_infonavit');
           $nominas->factor_sua = $request->post('factor_sua');
           $nominas->descuento_quincenal = $request->post('descuento_quincenal');
           $nominas->numero_credito_infonavit = $request->post('numero_credito_infonavit');
   
           $nominas->created_at = $fecha;
           $nominas->save();

           $date = $date->format('Y-m-d');

           
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
    public function destroy(Empleados $empleados)
    {
        //
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
        $empleado->estado = 'Inactivo';
        $empleado->descripcion_estado = $descripcionbaja;
        $empleado->save();


        $idempleado = $request->get('ids');
        $nombreemplado=$request->get('nombre');
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


        $pdf = \PDF::loadView('Empleados.rptfiniquito',compact('idempleado','nombreemplado','fecha_baja','fecha_ingreso','salario','puesto','rpttotalentregar','totalper','rptotaldeducciones','rptvardiasgratificacion','rtpvaraguinaldoporporcional','rptvarsueldoporporcional','rptvarvacacionesporporcionales','rptvardeudaimms','rptvardeduedainfonavit','rptvardeudatransporte','rptvardeudaprestamo','rptvarotrasdeudas',));
        return $pdf->download("finiquito_empleado$idempleado.pdf",);
          
    }


    public function exportar_excel(){
      
        return Excel::download(new UsersExport, 'exportando.xlsx');

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
    


}