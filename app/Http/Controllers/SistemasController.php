<?php

namespace App\Http\Controllers;
use App\Models\Vistas;
use App\Models\usuario_pantallas;
use Illuminate\Http\Request;
use App\Traits\MenuTrait;
use Carbon\Carbon;
use App\Traits\DatosimpleTraits;


class SistemasController extends Controller
{
    use MenuTrait;
    use DatosimpleTraits;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    { 
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        return view('sistemas.index',compact('varpantallas','varsubmenus'));
    }

    public function indexAcciones()
    {
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varlistavistas=$this->obtenervistas();
        $varlistapuestos=$this->obtenerpuestos();
        $varlistausers=$this->obtenerusuarios();
        $varlistadepas = $this->obtenerdepartamentos();
        return view('sistemas.acciones',compact('varpantallas','varsubmenus','varlistavistas','varlistausers','varlistadepas'));
    }

    protected function asignarPermiso(Request $request)
    {

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');


        $vis = new usuario_pantallas();
        $vis->idusuario=$request->get('idusuario');
        $vis->idvista=$request->get('idvista');
        $vis->iddepartamento=$request->get('iddepartamento');
        $vis->estado="A";
        $vis->created_at=$fecha;
        $vis->save();

        if($vis->save()){
            return redirect()->route('permisos')->with("success","¡Se guardaron los cambios correctamente!");
        }
        else
        {
            return redirect()->route('permisos')->with("warning","No se logro");
        }
          
    }




}
