<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vistas;
use App\Models\usuario_pantallas;
use App\Traits\Menutrait;

class CreditosController extends Controller
{
    use MenuTrait;
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Creditos.Index',compact('varpantallas','varsubmenus'));
    }

    public function getDistribuidor()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Creditos.distribuidor',compact('varpantallas','varsubmenus'));
    }

    public function getAval()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Creditos.aval',compact('varpantallas','varsubmenus'));
    }

    public function getDocumentos()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Creditos.documentos',compact('varpantallas','varsubmenus'));
    }

    public function getGestionFase1()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Creditos.gestionFase1',compact('varpantallas','varsubmenus'));
      
    }
}
