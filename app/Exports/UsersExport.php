<?php

namespace App\Exports;

use App\Models\Empleados;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Traits\Menutrait;
use App\Traits\DatosimpleTraits;

class UsersExport implements FromCollection
{

    use MenuTrait;
    use DatosimpleTraits;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $varlistaempleados=  $this-> obtenerlistaempleados();
        return $varlistaempleados;
    }
}
