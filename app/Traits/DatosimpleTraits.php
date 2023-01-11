<?php
namespace App\Traits;
use App\Models\Puestos;
use App\Models\Sucursales;
use App\Models\Ciudades;
use App\Models\Empresas;
use App\Models\empleados;
use App\Models\bancos;


use Illuminate\Support\Facades\Request;
trait DatosimpleTraits
{
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
    public  function obtenerlistaempleados(){
        $varlistaempleado = Empleados::join(
            'tblnominas','tblempleados.id','=','tblnominas.idempleado')
            ->join("tblpuestos", "tblempleados.idpuesto", "=", "tblpuestos.id")
            ->join("tblsucursales", "tblempleados.idsucursal", "=", "tblsucursales.id")
            ->join("tblciudades", "tblempleados.idciudad", "=", "tblciudades.id")
            ->join("tblbancos", "tblempleados.idbanco", "=", "tblbancos.id")
            ->select(
            'tblempleados.id',
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
            'tblnominas.salario_bruto',
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
            'tblempleados.descripcion_estado',
            'tblempleados.fecha_ingreso',
            'tblnominas.pago_imss',
            'tblnominas.excedente',
            'tblnominas.efectivo')
            ->get();

            return $varlistaempleado;

    }



    

}