<?php

namespace App\Exports;

use App\Models\Empleados;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Traits\Menutrait;
use App\Traits\DatosimpleTraits;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
// use Maatwebsite\Excel\Concerns\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class UsersExport implements   FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{

    use MenuTrait;
    use DatosimpleTraits;
    use Exportable;
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
                $event->sheet->getDelegate()->setAutoFilter('A2:AT2');
                $event->sheet->getStyle('A2:AT2')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ]
                ]);
                // $ev
                // $event->$shet->setAutoFilter('A2');


                $event->sheet->getDelegate()->getStyle('A2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFD3D3DE');

              

                $event->sheet->getDelegate()->getStyle('B2:AE2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF1E90FF');
      

                $event->sheet->getDelegate()->getStyle('AF2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFBA55D3');

                $event->sheet->getDelegate()->getStyle('AG2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF9ACD32');

             

                $event->sheet->getDelegate()->getStyle('AH2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF9ACD32');//VERDE

                $event->sheet->getDelegate()->getStyle('AI2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFFF8C00');

                $event->sheet->getDelegate()->getStyle('AJ2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFC0C0C0');

                $event->sheet->getDelegate()->getStyle('AK2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF9ACD32');

                $event->sheet->getDelegate()->getStyle('AL2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFC0C0C0');

                $event->sheet->getDelegate()->getStyle('AM2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF20B2AA');

                $event->sheet->getDelegate()->getStyle('AN2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF1E90FF');

                $event->sheet->getDelegate()->getStyle('AO2:AP2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFFF1493');

                $event->sheet->getDelegate()->getStyle('AQ2:AR2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFFF8C00');

                $event->sheet->getDelegate()->getStyle('AS2:AT2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF20B2AA');
            },
        ];
    }


    public function collection()
    {
        $varlistaempleados=  $this-> extraerempleados();
        return $varlistaempleados;
    }
    

    public function headings(): array
    {
        return [
            ['Catalogo de Empleadaos'],
            [
                'No. Empleado',
                'Empresa',
                'Sucursal',          
                'Apellido Paterno',
                'Apellido Materno',
                'Primer Nombre',
                'Segundo Nombre',
                'Telefono.',
                'Correo',
                'Nacionalidad',
                'Fecha Nacimiento',
                'Grado de estudio',
                'Puesto',
                'Banco',
                'RFC',
                'CURP',
                'NSS',
                'Sexo',
                'Tipo Sangre',
                'Estado Civil',
                'Calle',
                'Colonia',
                'No. Interior',
                'No. Exterior',
                'C.P.',
                'Ciudad',
                'Fecha de Ingreso IMSS',
                'Fecha Alta',
                'Fecha Baja', 
                'Contato Emergencia',
                'Telefono Emergencia',
                'ID Nomina',
                'Estado',
                'Descripcion de estado',          
                'Salario Bruto',
                'Salario Neto',
                'Salario Fijo',
                'Pago IMSS',
                'Excedente',
                'Efectivo',    
                'Factor SUA',
                'Descuento Quincenal',
                'No. Tarjeta',
                'No. Cuenta',    
                'Tipo Infonavit',
                'No. Credito Infonavit',        
                
                
                
                
            ]
        ];
    }

   
}
