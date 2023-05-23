<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\distribuidores;
use App\Traits\ValeTraits;

class Select extends Component
{


    use ValeTraits;


    public $distribuidores,$capitales;
    public $distribuidor =[], $capital=[];

    public function mount(){
        
    $idusuario=auth()->user()->id;
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
        return view('livewire.select');
    }
}
