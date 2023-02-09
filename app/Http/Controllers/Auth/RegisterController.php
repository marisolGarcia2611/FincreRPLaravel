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
use App\Traits\DatosimpleTraits;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use MenuTrait;
    use RegistersUsers;
    use DatosimpleTraits;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function Index()
    {
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varlistaempleados=  $this-> obtenerlistaempleados();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        
        return view('sistemas.registro',compact('varpantallas','varsubmenus','varlistaempleados'));


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
        $pass = Hash::make($request->get('password'));

        $user = new User();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password = $pass;
        $user->idempleado=$request->get('idempleado');
        $user->estado_user="A";
        $user->created_at=$fecha;
        $user->save();

        if($user->save()){
            return redirect()->route('registro')->with("success","¡Se guardaron los cambios correctamente!");
        }
        else{
            return redirect()->route('registro')->with("warning","No se logro");
        }
          

    }
}
