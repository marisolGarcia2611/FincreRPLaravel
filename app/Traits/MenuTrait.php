<?php
namespace App\Traits;
use App\Models\Vistas;
use Illuminate\Support\Facades\Request;
use DB;
trait Menutrait{
 

public  function Traermenuenc(){
    $Varusuario = Auth() ->user()->name;
    $varpantalla  = Vistas::join('tblusuario_pantallas','tblusuario_pantallas.idvista','=','tblvistas.id')
    ->join("users", "users.id", "=", "tblusuario_pantallas.idusuario")
    ->join("tbldepartamentos", "tbldepartamentos.id", "=", "tblusuario_pantallas.iddepartamento")
    ->where("users.name", "=",  $Varusuario)
    ->orderby('tbldepartamentos.nombre')
    ->select('tbldepartamentos.nombre' )
    ->distinct()->get();

    return $varpantalla;
}


public function Traermenudet(){
    $Varusuario = Auth() ->user()->id;
    $varsubmenu = DB::select('select tbldepartamentos.nombre, tblvistas.nombre AS nom, tblvistas.descripcion AS descripcion  from tblvistas 
    inner join tblusuario_pantallas  on tblusuario_pantallas.idvista = tblvistas.id 
    inner join users on users.id = tblusuario_pantallas.idusuario 
    inner join tbldepartamentos on tbldepartamentos.id = tblusuario_pantallas.iddepartamento 
     where users.id = ? order by tblvistas.nombre asc;',[$Varusuario]);
    return collect($varsubmenu);

   
//     $varsubmenu = Vistas::join('tblusuario_pantallas','tblusuario_pantallas.idvista','=','tblvistas.id')
//     ->join("users", "users.id", "=", "tblusuario_pantallas.idusuario")
//     ->join("tbldepartamentos", "tbldepartamentos.id", "=", "tblusuario_pantallas.iddepartamento")
//     ->where("Users.name", "=", $Varusuario)
//     ->orderby('tbldepartamentos.nombre')
//     ->select('tbldepartamentos.nombre','tblvistas.nombre AS nom','tblvistas.descripcion AS descripcion' )
//     ->get();

//  return $varsubmenu;
}
}


