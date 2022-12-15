<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registrocontroller extends Controller
{
    use MenuTrait;
    use DatosimpleTraits;

    public function index()
    {

        $varempleados = $this->obtenerempleados();
        return view('login.registro',compact('varempleados'));
    }   
}
