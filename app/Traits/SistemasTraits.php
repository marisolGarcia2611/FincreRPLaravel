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

   
}



