<?php
namespace App\Traits;
use App\Models\Puestos;
use App\Models\Sucursales;
use App\Models\Ciudades;
use App\Models\Empresas;
use App\Models\empleados;
use App\Models\bancos;
use App\Models\tipo_descuento_infonavit;
use App\Models\Nominas_pagosenc;
use App\Models\Nominas_pagosdet;
use App\Models\tarifasisr_det;
use App\Models\tarifasisr_enc;
use App\Models\tarifas_subsidio;
use App\Models\Vistas;
use App\Models\User;
use App\Models\Departamentos;
use App\Models\empleados_bajas;
use DB;



use Illuminate\Support\Facades\Request;
trait DatosimpleTraits
{
    public  function obtenerusuarios(){
        $varuser  = User::select('users.id','users.name' )
        ->get();
        return $varuser;
    }
    public  function obtenervistas(){
        $varvista  = Vistas::select('tblvistas.id','tblvistas.nombre' )
        ->get();
        return $varvista;
    }

    public  function obtenerdepartamentos(){
        $vardepa  = Departamentos::select('tbldepartamentos.id','tbldepartamentos.nombre' )
        ->get();
        return $vardepa;
    }

    public  function obtenerpuestos(){
        $varpuesto  = Puestos::select('tblpuestos.id','tblpuestos.nombre' )
        ->get();
        return $varpuesto;
    }
    public  function obtenersucursales(){
        $varsucursal = Sucursales::select('tblsucursales.id','tblsucursales.nombre' )
        ->get();
        return $varsucursal;
    }
    public  function obtenerciudades(){
        $varciudad = Ciudades::select('tblciudades.id','tblciudades.nombre' )
        ->get();
        return $varciudad;
    }

    public  function obtenerempresas(){
        $varempresa = Empresas::select('tblempresas.id','tblempresas.nombre_empresa' )
        ->get();
        return $varempresa;
    }

    public  function obtenerempleados(){
        $varempleado = empleados::select('tblempleados.id','tblempresas.primer_nombre' )
        ->get();
        return $varempresa;
    }

    public  function obtenerbancos(){
        $varbanco = bancos::select('tblbancos.id','tblbancos.nombre' )
        ->get();
        return $varbanco;
    }
    public  function obtenerultimoempleado(){
        $varultimoempleado = empleados::latest('id')->first();
        return $varultimoempleado;

    }

    public  function obtenernominas(){
        $varnomina = Nominas_pagosenc::join(
            'tbltipo_nominas','tblnominas_pagoenc.idtiponomina','=','tbltipo_nominas.id')
            ->select('tblnominas_pagoenc.id','tblnominas_pagoenc.fecha_inicio','tblnominas_pagoenc.fecha_fin','tblnominas_pagoenc.estado_nomina','tblnominas_pagoenc.nombre_nomina','tblnominas_pagoenc.comentarios','tblnominas_pagoenc.idtiponomina','tbltipo_nominas.tipo' )
        ->get();
        return $varnomina;


    }
    public  function obtenertipodescinfonavit(){
        $vartipodescuentoinfonavit = tipo_descuento_infonavit::select('tbltipoinfonavit.id','tbltipoinfonavit.Nombre' )
        ->get();
        return $vartipodescuentoinfonavit;

    }

    public  function obtenerisrenc(){
        $varobtenerisrdet = tarifasisr_enc::select('tbltipo_nominas.id','tbltipo_nominas.tipo')
        ->get();
        return $varobtenerisrdet;
    }

    public  function obtenerisrdet(int $id){
        $varobtenerisr = tarifasisr_det::join(
            'tbltarifas_subsidio','tbltarifas_isr.idtarifas_det','=','tbltarifas_subsidio.idsubdet')
        ->select('tbltarifas_isr.id','tbltarifas_isr.idtarifas_det','tbltarifas_isr.limite_inferior','tbltarifas_isr.limite_superior','tbltarifas_isr.porc_aplicarse_exc_inf','tbltarifas_isr.cuota_fija' )
        ->where('tbltarifas_isr.idtarifas_det','=',$id)
        ->get();
        return $varobtenerisr;
    }


    public  function obtenersubsisdiordet(int $id){
        $varobtenersubsidio = tarifas_subsidio::select('tbltarifas_subsidio.pago_ingreso_de','tbltarifas_subsidio.pago_ingreso_hasta','tbltarifas_subsidio.cantidad_subsidio_empleo_act')
        ->where('tbltarifas_subsidio.idsubdet','=',$id)
        ->get();
        return $varobtenersubsidio;
    }

    public  function obtenerbajas_empleados(int $id){
        $varbajas = empleados_bajas::join(
            'tblempleados','tblempleados.id','=','tblempleado_bajas.idempleado')
            ->join("tblpuestos", "tblempleados.idpuesto", "=", "tblpuestos.id")
            ->join("tblnominas", "tblnominas.idempleado", "=", "tblempleados.id")
            ->join("tblempresas", "tblempresas.id", "=", "tblnominas.idempresa")
            ->join("tbltipoinfonavit", "tbltipoinfonavit.id", "=", "tblnominas.id_tipoinfonavit")
            ->select('tblempleado_bajas.id','tblempleado_bajas.idempleado','tblempleado_bajas.tipo_baja','tblempleado_bajas.descripcion','tblempleado_bajas.fecha_baja','tblempleado_bajas.dias_gratificacion','tblempleado_bajas.dias_aguinaldo','tblempleado_bajas.dias_sueldo_a_deber','tblempleado_bajas.dias_vacaciones','tblempleado_bajas.cantidad_gratificacion','tblempleado_bajas.cantidad_aguinaldo','tblempleado_bajas.cantidad_sueldo','tblempleado_bajas.cantidad_vacaciones','tblempleado_bajas.cantidaddeduccion_infonavit','tblempleado_bajas.cantidaddeduccion_transporte','tblempleado_bajas.cantidaddeduccion_prestamo','tblempleado_bajas.cantidaddeduccion_otros','tblempleado_bajas.cantidadtotal_entregada','tblempleado_bajas.cantidaddeduccion_imms',
            'tblempleados.primer_nombre','tblempleados.segundo_nombre','tblempleados.apellido_paterno','tblempleados.apellido_materno','tblpuestos.nombre as puesto','tblempleados.fecha_ingreso',
            'tblnominas.salario_fijo as salarioDiario','tblnominas.salario_bruto as salarioMensual','tbltipoinfonavit.Nombre as infonavit','tblempresas.nombre_empresa as empresa')
            ->where('tblempleado_bajas.idempleado','=',$id)
            ->get();
        return $varbajas;
    }
    
    public  function obtenerlistaempleados(){
        $varlistaempleado = Empleados::join(
            'tblnominas','tblempleados.id','=','tblnominas.idempleado')
            ->join("tblpuestos", "tblempleados.idpuesto", "=", "tblpuestos.id")
            ->join("tblsucursales", "tblempleados.idsucursal", "=", "tblsucursales.id")
            ->join("tblciudades", "tblempleados.idciudad", "=", "tblciudades.id")
            ->join("tblbancos", "tblempleados.idbanco", "=", "tblbancos.id")
            ->join("tblempresas", "tblempresas.id", "=", "tblnominas.idempresa")
            ->join("tbltipoinfonavit", "tbltipoinfonavit.id", "=", "tblnominas.id_tipoinfonavit")
            ->select(
            'tbltipoinfonavit.id as idinfonavit',
            'tbltipoinfonavit.Nombre as nombreinfonavit',
            'tblnominas.pago_imss',
            'tblnominas.id as idnomina',
            'tblempleados.id as idempleado',
            'tblpuestos.id as idpuesto',
            'tblempleados.primer_nombre',
            'tblempleados.segundo_nombre',
            'tblempleados.apellido_paterno',
            'tblempleados.apellido_materno',
            'tblempleados.telefono',
            'tblempleados.correo',
            'tblpuestos.nombre as puesto',
            'tblsucursales.nombre as sucursal',
            'tblciudades.nombre as ciudad',
            'tblempleados.calle',
            'tblempleados.colonia',
            'tblempleados.numero_interior',
            'tblempleados.numero_exterior',
            'tblempleados.codigo_postal',
            'tblempleados.sexo',
            'tblempleados.fecha_nacimiento',
            'tblempleados.foto',
            'tblempleados.archivo_baja',
            'tblnominas.salario_bruto',
            'tblnominas.salario_fijo',
            'tblnominas.salario_neto',
            'tblbancos.nombre as banco',
            'tblnominas.numero_tarjeta',
            'tblnominas.numero_cuenta',
            'tblempleados.rfc',
            'tblempleados.nss',
            'tblempleados.tipo_sangre',
            'tblempleados.contacto_emergencia',
            'tblempleados.telefono_emergencia',
            'tblempleados.estado',
            'tblempleados.estado_civil',
            'tblempleados.descripcion_estado',
            'tblempleados.fecha_ingreso',
            'tblempleados.nacionalidad',
            'tblempleados.grado_estudio',
            'tblempleados.curp',
            'tblnominas.pago_imss',
            'tblnominas.sueldo_fiscal',
            'tblnominas.excedente',
            'tblnominas.efectivo',
            'tblnominas.factor_sua',
            'tblnominas.descuento_quincenal',
            'tblnominas.numero_credito_infonavit',
            'tblnominas.fecha_ingreso_imss',
            'tblempresas.id',
            'tblempresas.nombre_empresa')
            ->get();

            return $varlistaempleado;

    }

    public  function extraerempleados(){
        $varlistaempleado = Empleados::join(
            'tblnominas','tblempleados.id','=','tblnominas.idempleado')
            ->join("tblpuestos", "tblempleados.idpuesto", "=", "tblpuestos.id")
            ->join("tblsucursales", "tblempleados.idsucursal", "=", "tblsucursales.id")
            ->join("tblciudades", "tblempleados.idciudad", "=", "tblciudades.id")
            ->join("tblbancos", "tblempleados.idbanco", "=", "tblbancos.id")
            ->join("tblempresas", "tblempresas.id", "=", "tblnominas.idempresa")
            ->join("tbltipoinfonavit", "tbltipoinfonavit.id", "=", "tblnominas.id_tipoinfonavit")
            ->select(
            'tblempleados.id as idempleado',
            'tblempresas.nombre_empresa',
            'tblsucursales.nombre as sucursal',
            'tblempleados.apellido_paterno',
            'tblempleados.apellido_materno',
            'tblempleados.primer_nombre',
            'tblempleados.segundo_nombre',
            'tblempleados.correo',
            'tblempleados.telefono',
            'tblempleados.nacionalidad',
            'tblempleados.fecha_nacimiento',
            'tblempleados.grado_estudio',
            'tblpuestos.nombre as puesto',
            'tblbancos.nombre as banco',
            'tblempleados.rfc',
            'tblempleados.curp',
            'tblempleados.nss',
            'tblempleados.sexo',
            'tblempleados.tipo_sangre',
            'tblempleados.estado_civil',       
            'tblempleados.calle',
            'tblempleados.colonia',
            'tblempleados.numero_interior',
            'tblempleados.numero_exterior',
            'tblempleados.codigo_postal',
            'tblciudades.nombre as ciudad',
            'tblnominas.fecha_ingreso_imss',
            'tblempleados.fecha_ingreso',
            'tblempleados.fecha_baja',
            'tblempleados.contacto_emergencia',
            'tblempleados.telefono_emergencia',
            'tblnominas.id as idnomina',
            'tblempleados.estado',
            'tblempleados.descripcion_estado',
            'tblnominas.salario_bruto',
            'tblnominas.salario_neto',
            'tblnominas.salario_fijo',
            'tblnominas.pago_imss',
            'tblnominas.sueldo_fiscal',
            'tblnominas.excedente',
            'tblnominas.efectivo',  
            'tblnominas.factor_sua',
            'tblnominas.descuento_quincenal', 
            'tblnominas.numero_tarjeta',
            'tblnominas.numero_cuenta',
            'tbltipoinfonavit.Nombre as nombreinfonavit',
            'tblnominas.numero_credito_infonavit')
            ->get();
            return $varlistaempleado;

    }


    public  function obtenerlistaempleadoid(int $id){
        $varlistaempleado = Empleados::join(
            'tblnominas','tblempleados.id','=','tblnominas.idempleado')
            ->join("tblpuestos", "tblempleados.idpuesto", "=", "tblpuestos.id")
            ->join("tblsucursales", "tblempleados.idsucursal", "=", "tblsucursales.id")
            ->join("tblciudades", "tblempleados.idciudad", "=", "tblciudades.id")
            ->join("tblbancos", "tblempleados.idbanco", "=", "tblbancos.id")
            ->join("tblempresas", "tblempresas.id", "=", "tblnominas.idempresa")
            ->join("tbltipoinfonavit", "tbltipoinfonavit.id", "=", "tblnominas.id_tipoinfonavit")
            ->select(
            'tbltipoinfonavit.id as idinfonavit',
            'tbltipoinfonavit.Nombre as nombreinfonavit',
            'tblnominas.pago_imss',
            'tblnominas.id as idnom',
            'tblempleados.id as idempleado',
            'tblpuestos.id as idpuesto',
            'tblsucursales.id as idsucursal',
            'tblciudades.id as idciudad',
            'tblbancos.id as idbanco',
            'tblempleados.primer_nombre',
            'tblempleados.segundo_nombre',
            'tblempleados.apellido_paterno',
            'tblempleados.apellido_materno',
            'tblempleados.telefono',
            'tblempleados.correo',
            'tblpuestos.nombre as puesto',
            'tblsucursales.nombre as sucursal',
            'tblciudades.nombre as ciudad',
            'tblempleados.calle',
            'tblempleados.colonia',
            'tblempleados.numero_interior',
            'tblempleados.numero_exterior',
            'tblempleados.codigo_postal',
            'tblempleados.sexo',
            'tblempleados.fecha_nacimiento',
            'tblempleados.foto',
            'tblnominas.salario_bruto',
            'tblnominas.salario_neto',
            'tblnominas.salario_fijo',
            'tblbancos.nombre as banco',
            'tblnominas.numero_tarjeta',
            'tblnominas.numero_cuenta',
            'tblempleados.rfc',
            'tblempleados.nss',
            'tblempleados.nacionalidad',
            'tblempleados.grado_estudio',
            'tblempleados.curp',
            'tblempleados.tipo_sangre',
            'tblempleados.contacto_emergencia',
            'tblempleados.telefono_emergencia',
            'tblempleados.estado',
            'tblempleados.estado_civil',
            'tblempleados.descripcion_estado',
            'tblempleados.fecha_ingreso',
            'tblnominas.pago_imss',
            'tblnominas.sueldo_fiscal',
            'tblnominas.excedente',
            'tblnominas.efectivo' ,
            'tblnominas.factor_sua',
            'tblnominas.descuento_quincenal',
            'tblnominas.numero_credito_infonavit',
            'tblempresas.id',
            'tblnominas.fecha_ingreso_imss',
            'tblempresas.nombre_empresa')
            ->where('tblempleados.id','=',$id)
            ->get();

            return $varlistaempleado;

    }

    public  function obtenernominasporid($id){


        $varnomina = Nominas_pagosdet::join(
        'tblempleados','tblnominas_pagodet.idempleado','=','tblempleados.id')
        ->join("tblpuestos", "tblempleados.idpuesto", "=", "tblpuestos.id")
        ->join("tblsucursales", "tblempleados.idsucursal", "=", "tblsucursales.id")
        ->join('tblnominas','tblempleados.id','=','tblnominas.idempleado')
        ->join("tblbancos", "tblempleados.idbanco", "=", "tblbancos.id")
        ->join("tblnominas_pagoenc", "tblnominas_pagodet.idpagonomina", "=", "tblnominas_pagoenc.id")
        ->select(
        'tblnominas_pagoenc.idtiponomina',
        'tblempleados.id as idempleado',
        'tblnominas_pagodet.id',
        'tblnominas_pagodet.idpagonomina',
        'tblempleados.primer_nombre',
        'tblempleados.segundo_nombre',
        'tblempleados.apellido_paterno',
        'tblempleados.apellido_materno',
        'tblpuestos.nombre as puesto',
        'tblsucursales.nombre as sucursal',
        'tblnominas_pagodet.faltas_reta_aus',
        'tblnominas_pagodet.dias_laborados',     
        'tblnominas.excedente',
        'tblnominas.efectivo',
        'tblnominas.sueldo_fiscal',
        'tblnominas_pagodet.total_sueldo',
        'tblnominas_pagodet.deudores_fiscal',
        'tblnominas_pagodet.deudores_no_fiscal',
        'tblnominas_pagodet.total_deudores',
        'tblnominas_pagodet.pago_infonavit',
        'tblnominas_pagodet.pago_imss',
        'tblnominas_pagodet.pago_isr',
        'tblnominas_pagodet.pago_subsidio',
        'tblnominas_pagodet.pago_prima_vacacional',
        'tblnominas_pagodet.dias_pendiente',
        'tblnominas_pagodet.bono',
        'tblnominas_pagodet.transporte',
        'tblnominas_pagodet.total_nomina_fiscal',
        'tblnominas_pagodet.total_apagar_excedente',
        'tblnominas_pagodet.total_efectivo',
        'tblnominas_pagodet.pago_nomina_fiscal_global',
        'tblnominas_pagodet.pago_efectivo_cajas',
        'tblnominas_pagodet.total_apagar',
        'tblbancos.nombre as banco',
        'tblnominas.numero_tarjeta',
        'tblnominas.numero_cuenta')
        ->where('tblnominas_pagodet.idpagonomina','=',$id)
        ->get();
        return $varnomina;
}

public  function obtenernominasporidexport($id){


    $sql = "call traernomina($id)";
    $varnomina = DB::select($sql);
     return collect($varnomina);
}

public  function obteneempleadonomaeditar(int $idpagonom,  int $idempleado){
    $varobtenernomemp = Nominas_pagosenc::join(
        'tblnominas_pagodet','tblnominas_pagoenc.id','=','tblnominas_pagodet.idpagonomina')
    ->select('tblnominas_pagoenc.id','tblnominas_pagoenc.idtiponomina','tblnominas_pagodet.id as idpadodet','tblnominas_pagodet.idempleado','tblnominas_pagodet.dias_laborados','tblnominas_pagodet.deudores_fiscal','tblnominas_pagodet.deudores_no_fiscal','pago_infonavit','pago_imss','pago_subsidio','pago_isr','bono','transporte')
    ->where(['tblnominas_pagoenc.id' => $idpagonom,'tblnominas_pagodet.idempleado' => $idempleado])
    ->get();
    return $varobtenernomemp;
}



}