<?php

namespace App\Exports;

use App\Models\Empleados;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Traits\DatosimpleTraits;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use DB;

class NominasExport implements   FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{

    use DatosimpleTraits;
    use Exportable;
    protected $id;

    function __construct($id) {
            $this->id = $id;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
   
    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {


                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $cells = 'A2:WW2';
                $event->sheet->getDelegate()->getStyle($cells)->getFont()->setBold(true);
                $event->sheet->getDelegate()->setAutoFilter('A2:AF2');
                $event->sheet->getStyle('A2:AF2')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ]
                ]);
                // $event->sheet->setBorder('A1', 'thin');
                // $event->$shet->setAutoFilter('A2');

            
                $event->sheet->getDelegate()->getStyle('A2:K2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setRGB('DADADA');

              

                $event->sheet->getDelegate()->getStyle('L2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('BBDBE9');
      

                $event->sheet->getDelegate()->getStyle('M2:N2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('DADADA');

                $event->sheet->getDelegate()->getStyle('O2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('BBDBE9');

             

                $event->sheet->getDelegate()->getStyle('P2:U2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('DADADA');

               
                $event->sheet->getDelegate()->getStyle('V2:W2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFD536');

                $event->sheet->getDelegate()->getStyle('X2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('EE754C');

                $event->sheet->getDelegate()->getStyle('Y2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('BBDBE9');

                ///
                $event->sheet->getDelegate()->getStyle('Z2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFAE36');

                $event->sheet->getDelegate()->getStyle('AA2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('85C056');

                $event->sheet->getDelegate()->getStyle('AB2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFAE36');

                $event->sheet->getDelegate()->getStyle('AC2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('EE754C');

                $event->sheet->getDelegate()->getStyle('AD2:AF2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('BBDBE9');
            },
        ];
    }


    public function collection()
    {
        $id=7;
        $varlistanomina=  $this-> obtenernominasporidexport($this->id);
        return $varlistanomina;
    }
    

    public function headings(): array
    {
        return [
            ['NOMINA DE EMPLEADOS'],
            [
                'SUCURSAL',
                'PUESTO',
                'NO. DE NOMINA POR EMPLEADO',
                'NO. DE CORRIDA NOMINA',
                'NO. EMPLEADO',
                'NOMBRE COMPLETO',
                'FALTAS/RET/AUS',
                'DIAS LABORADOS',   
                'SUELDO FISCAL',  
                'SUELDO EXCEDENTE',
                'SUELDO EFECTIVO',
                'TOTAL SUELDO',
                'DEUDORES FISCAL',
                'DEUDORES NO FISCAL',
                'TOTAL DEUDORES',
                'INFONAVIT',
                'IMSS',
                'ISR',
                'SUBSIDIO',
                'PRIMA VACACIONAL',
                'DIAS PENDIENTES',
                'BONO',
                'TRANSPORTE',
                'TOTAL NOMINA FISCAL',
                'TOTAL A PAGAR EXCEDENTE',
                'TOTAL EFECTIVO',
                'TOTAL A PAGAR',
                'PAGO EFECTIVO CAJAS',
                'PAGO NOMINA FISCAL GLOBAL',
                'BANCO',
                'NUMERO TARJETA',
                'NUMERO CUENTA'   
                
                
            ]
        ];
    }

   
}
