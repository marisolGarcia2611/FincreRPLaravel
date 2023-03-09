<?php
namespace App\Traits;
use App\Models\Vistas;
use Illuminate\Support\Facades\Request;
trait Menutrait{
 

public  function Traermenuenc(){
    $Varusuario = Auth() ->user()->name;
    $varpantalla  = Vistas::join('tblusuario_pantallas','tblusuario_pantallas.idvista','=','tblvistas.id')
    ->join("users", "users.id", "=", "tblusuario_pantallas.idusuario")
    ->join("tbldepartamentos", "tbldepartamentos.id", "=", "tblusuario_pantallas.iddepartamento")
    ->where("Users.name", "=",  $Varusuario)
    ->orderby('tbldepartamentos.nombre')
    ->select('tbldepartamentos.nombre' )
    ->distinct()->get();

    return $varpantalla;
}

public function Traermenudet(){
    $Varusuario = Auth() ->user()->name;
    $varsubmenu = Vistas::join('tblusuario_pantallas','tblusuario_pantallas.idvista','=','tblvistas.id')
    ->join("users", "users.id", "=", "tblusuario_pantallas.idusuario")
    ->join("tbldepartamentos", "tbldepartamentos.id", "=", "tblusuario_pantallas.iddepartamento")
    ->where("Users.name", "=", $Varusuario)
    ->orderby('tbldepartamentos.nombre')
    ->select('tbldepartamentos.nombre','tblvistas.nombre AS nom','tblvistas.descripcion AS descripcion' )
    ->get();

 return $varsubmenu;
}
}