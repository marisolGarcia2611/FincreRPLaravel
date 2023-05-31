<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vistas;
use App\Models\usuario_pantallas;
use App\Models\conyuges;
use App\Models\documentos;
use App\Models\avales;
use App\Models\referencias;
use App\Models\valeras;
use App\Models\distribuidores;
use App\Traits\MenuTrait;
use App\Traits\PagosTrait;
use App\Traits\DatosimpleTraits;
use App\Traits\ValeTraits;
use App\Models\tipo_distribuidor;
use App\Models\distribuidores_valeras;
use App\Models\historial;
use App\Models\mensajes;
use App\Models\cliente_vales;
use App\Models\prestamos_valesdet;
use App\Models\prestamos_valesenc;

use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\File;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class pagoscontroller extends Controller
{
    use MenuTrait;
    use DatosimpleTraits;
    use ValeTraits;
    use PagosTrait;

    public function index()
    { 
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $vardistribuidores = $this->obtenerdistribuidoresactivos();
        return view('vales.pagos.gestionpagos',compact('varpantallas','varsubmenus','vardistribuidores'));
    }
}
