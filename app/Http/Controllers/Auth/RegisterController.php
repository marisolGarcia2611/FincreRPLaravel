<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Vistas;
use App\Models\usuario_pantallas;
use App\Traits\MenuTrait;
use App\Traits\SistemasTraits;
use App\Traits\DatosimpleTraits;
use Carbon\Carbon;
use App\Models\Empleados;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use MenuTrait;
    use RegistersUsers;
    use DatosimpleTraits;
    use SistemasTraits;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function Index()
    {

        // $permisos = $this->forpermisos('calcular_nominas'); 
        // if($permisos=="registrar_usuarios")
        // {
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varlistaempleados=  $this-> obtenerlistaempleados();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        return view('sistemas.registro',compact('varpantallas','varsubmenus','varlistaempleados'));
        // }
        // else{
        //     return redirect()->route('panel')->with("Errorpermisos","No se logro");  
        // }


    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // esta funcion corrobora que no estes logeado ya
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
        
        

        if($request->hasFile("urlpdf")){
            $file=$request->file("urlpdf");

            $pass = bcrypt($request->get('contrasena'));
            $idempleado = $request->get('idempleado');

            $user = new User();
            $user->name=$request->get('name');
            $user->email=$request->get('email');
            $user->password = $pass;
            $user->idempleado=$idempleado;
            $user->estado_user="A";
            $user->created_at=$fecha;

            $empleados = Empleados::find($idempleado);
            $empleados->foto = 1;
            $empleados->save();
            $user->save();

            $nombre = "$idempleado".".".$file->guessExtension();
            $ruta = public_path("Images/Perfil/".$nombre);

            if($file->guessExtension()=="png"){
                copy($file, $ruta);
                return redirect()->route('registro')->with("success","¡Se guardaron los cambios correctamente!");
            }else{
                return redirect()->route('registro')->with("warning","No se logro");
            }
        }

    
          

    }
}
