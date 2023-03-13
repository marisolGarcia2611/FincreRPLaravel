<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vistas;
use App\Models\usuario_pantallas;
use App\Traits\MenuTrait;

class HomeController extends Controller
{
    use MenuTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
       
        return view('home',compact('varpantallas','varsubmenus'));
    }

}
