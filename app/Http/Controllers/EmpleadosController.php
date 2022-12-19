<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use App\Models\Empresas;
use App\Models\nominas;
use App\Models\Vistas;
use App\Http\Requests\StoreEmpleadosRequest;
use App\Http\Requests\UpdateEmpleadosRequest;
use App\Traits\Menutrait;
use App\Traits\DatosimpleTraits;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
    $date = Carbon::now();
    $date = $date->format('Y-m-d');
        return view('Empleados.Index',compact('varpantallas','varsubmenus','varlistaempleados','varpuestos','varsucursales','varciudades','varempresas','varbancos'));
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
        $empleados->created_at = $date;
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
        $nominas->efectivo=$request->get('efectivo');
        $nominas->numero_tarjeta=$request->get('numero_tarjeta');
        $nominas->numero_cuenta=$request->get('numero_cuenta');
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
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
            return view('Empleados.Index',compact('varpantallas','varsubmenus','varlistaempleados','varpuestos','varsucursales','varciudades','varempresas','varbancos'));
            // ->with("success","Empleado creado correctamente")
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleados $empleados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpleadosRequest  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpleadosRequest $request, Empleados $empleados)
    {
        //
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
}
