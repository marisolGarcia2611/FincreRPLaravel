<?php

namespace App\Http\Controllers;
use App\Models\Vistas;
use Illuminate\Http\Request;
use App\Traits\Menutrait;

class RecursosController extends Controller
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
        return view('Empleados.Index',compact('varpantallas','varsubmenus'));
    }
}
