<?php
namespace App\Traits;
use App\Models\Vistas;
use App\Models\distribuidores;
use Illuminate\Support\Facades\Request;
use DB;


trait PagosTrait{
 


    public function obtenerdistribuidoresactivos(){
        $vardistribuidores = distribuidores::join('tbltipo_distribuidor','tbldistribuidores.tipo_distribuidor','=','tbltipo_distribuidor.id')
        ->select(
        'tbldistribuidores.id', 
        DB::raw('CONCAT(tbldistribuidores.primer_nombre," ",tbldistribuidores.segundo_nombre," ",tbldistribuidores.apellido_paterno," ",tbldistribuidores.apellido_materno) as nombredis'),
        'tbldistribuidores.fecha_nacimiento', 
        'tbldistribuidores.curp', 
        'tbldistribuidores.rfc', 
        'tbldistribuidores.sexo', 
        'tbldistribuidores.estado_civil', 
        'tbldistribuidores.telefono', 
        'tbldistribuidores.idsucursal', 
        'tbldistribuidores.idpromotor', 
        'tbldistribuidores.calle', 
        'tbldistribuidores.colonia', 
        'tbldistribuidores.numero_interior', 
        'tbldistribuidores.numero_exterior', 
        'tbldistribuidores.codigo_postal', 
        'tbldistribuidores.idciudad', 
        'tbldistribuidores.lugar_empleo', 
        'tbldistribuidores.puesto_empleo', 
        'tbldistribuidores.salario_mensual', 
        'tbldistribuidores.antiguedad', 
        'tbldistribuidores.telefono_empresa', 
        'tbldistribuidores.direccion_empresa', 
        'tbldistribuidores.egreso_fijomensual', 
        'tbldistribuidores.idestado',
        'tbldistribuidores.estado_captura',
        'tbldistribuidores.capital',
        'tbldistribuidores.capital_autorizado',
        'tbldistribuidores.tipo_distribuidor',
        'tbltipo_distribuidor.nombre',
        'tbldistribuidores.status')
        ->where('tbldistribuidores.status','=','pro_val')
        ->get();
        return $vardistribuidores;
    }
}