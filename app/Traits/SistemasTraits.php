<?php
namespace App\Traits;
use App\Models\promotores;
use App\Models\estados;
use App\Models\distribuidores;
use App\Models\avales;
use App\Models\documentos;
use App\Models\historial;
use App\Models\mensajes;
use App\Models\tipo_distribuidor;
use App\Models\usuario_acciones;
use App\Models\acciones;
use App\Models\Vistas;
use Illuminate\Support\Facades\Request;
use DB;


trait SistemasTraits{


    public function  obtenerpermisos(){
    $varpermisos = acciones::join('tblvistas','tblacciones.idvista','tblvistas.id')
    ->join('tbldepartamentos','tblvistas.iddepartamento','tbldepartamentos.id')
    ->select('tbldepartamentos.id as iddepartamento','tblvistas.id as idvista','tblacciones.id as idacciones','tbldepartamentos.nombre as nombre_departamento','tblvistas.nombre as nombre_vista', 'tblacciones.nombre_accion','tblacciones.descripcion_accion')
    ->get();
    return $varpermisos;
    }


    public function obtenerpermisosxusuario(){

    }

    public function obtenerdepartamentoXvista(int $iddistribuidor){
    $vardeparatamento = vistas::select('tblvistas.iddepartamento')
    ->where('tblvistas.id','=',$iddistribuidor)
    ->get();
    return $vardeparatamento;
    }

   public function obtener_permisosxusuario(int $idusuario){

    $varpermisos = DB::select('select b.nombre_accion,b.id,c.name from tblusuario_acciones a inner join tblacciones b on a.idacciones = b.id inner join users c on a.idusuario = c.id where a.idusuario = ? and c.estado_user = "A" order by id asc;',[$idusuario]);
    return collect($varpermisos);
   }

   public function forpermisos(String $permisobuscado){
    $idusuario=auth()->user()->id;
    $permisos = $this->obtener_permisosxusuario($idusuario);  

    $permisoa ="";
    foreach($permisos as $permiso)
    {
        if($permiso->nombre_accion == $permisobuscado){
            $permisoa = $permisobuscado;
            break;
        }
        else{
            $permisoa = "null";
        }

    }
    return $permisoa;
}
}



