<?php

namespace App\Http\Controllers;

use App\Models\Vistas;
use App\Models\usuario_pantallas;
use App\Models\conyuges;
use App\Models\documentos;
use App\Models\avales;
use App\Models\referencias;
use App\Models\distribuidores;
use Illuminate\Http\Request;
use App\Traits\MenuTrait;
use App\Traits\DatosimpleTraits;
use App\Traits\ValeTraits;
use App\Models\tipo_distribuidor;
use App\Models\historial;
use App\Models\mensajes;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\File;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class valeraController extends Controller
{
    use MenuTrait;
    use DatosimpleTraits;
    use ValeTraits;

    public function indexGestionCreditos()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Gestion.Index',compact('varpantallas','varsubmenus'));
      
    }

    public function getValera()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Gestion.EntregaValeras.Index',compact('varpantallas','varsubmenus'));
      
    }

    public function getCliente()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Gestion.ClienteFinal.cliente',compact('varpantallas','varsubmenus'));
      
    }

    public function getnuevoCliente()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Gestion.ClienteFinal.clienteNuevo',compact('varpantallas','varsubmenus'));
      
    }

    public function getnuevoCanje()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Gestion.ClienteFinal.canjeNuevo',compact('varpantallas','varsubmenus'));
      
    }

    public function getIndexCatalogo()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Catalogo.Index',compact('varpantallas','varsubmenus'));
      
    }

    public function getcontrolValeras()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Catalogo.controlValeras',compact('varpantallas','varsubmenus'));
      
    }

    public function getaltaValeras()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('Vales.Catalogo.altaValeras',compact('varpantallas','varsubmenus'));
      
    }

}