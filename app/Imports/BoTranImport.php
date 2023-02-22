<?php

namespace App\Imports;

use App\Models\Nominas_pagosdet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Http\Request;

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
            $nomina->save();
        }
        
        // $nominas = $this->nominas_pagosdet->where('id', $row['id']);
        // return new Nominas_pagosdet([
        //     'bono'=>$row['bono'],
        //     'transporte'=>$row['transporte'],
        // ]);
    }
}
