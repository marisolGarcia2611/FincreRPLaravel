<?php

namespace App\Imports;

use App\Models\Nominas_pagosdet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Http\Request;
use App\Http\Controllers\NominasController;
use Illuminate\Http\RedirectResponse;
use  Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class BoTranImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    // public function __construct(){
    //     $this->nominas_pagosdet = Nominas_pagosdet::select('id')->get();
    // }

    public function model(array $row)
    {
        $nomina = Nominas_pagosdet::find($row['id']);
        if($nomina->idempleado = ($row['idempleado']))
        {
            
            $nomina->transporte= ($row['transporte']);
            $nomina->bono= ($row['bono']);
            $nomina->deudores_fiscal=($row['deudores_fiscal']);
            $nomina->deudores_no_fiscal=($row['deudores_no_fiscal']);
            $nomina->save();

            // return redirect()->route('/Nominas')->with("successExcel","¡Se guardaron los cambios correctamente!");

        }

        
        // return redirect()->route('/Nominas')->with("warningExcel","¡Se guardaron los cambios correctamente!");
        // $nominas = $this->nominas_pagosdet->where('id', $row['id']);
        // return new Nominas_pagosdet([
        //     'bono'=>$row['bono'],
        //     'transporte'=>$row['transporte'],
        // ]);
    }
}
