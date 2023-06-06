<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\ValeTraits;
use App\Models\distribuidores;

class CapitalxdistribuidoresList extends Component
{
    use ValeTraits;


    public $distribuidores,$capitales;
    public $distribuidor =[], $capital=[];

    public function mount(){
        
    //TRAEMOS EL ID DEL USUARIO LOGUEADO
    $idusuario=auth()->user()->id;

    //TRAEMOS CON UN TRAIT LA INFORMACIÓN
    $distribuidores= $this->obtenerdisxsucursal($idusuario);
        
      $this->distribuidor =$distribuidores;
      $this->capital = collect();
    }

    public function updateddistribuidores($value){
        
             $this->capital = distribuidores::where('id',$value)->get();
             $this->capitales = $this->capital->first()->id ?? null;
    }

  
    public function render()
    {
        return view('livewire.capitalxdistribuidores-list');
    }
}
