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
    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class => function (AfterSheet $event) {

    //             $position_last = count($this->headings()[1]);

    //             $column = Coordinate::stringFromColumnIndex($position_last);
    //             $cells = "A1:{$column}1";
    //             $event->sheet->mergeCells($cells);
    //             $event->sheet->getDelegate()->getStyle($cells)->getFont()->setBold(true);
    //             $event->sheet->getDelegate()->getStyle($cells)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
    //             $event->sheet->getDelegate()->getStyle($cells)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                

    //         }
    //         // $sheet->getStyle('A1')->applyFromArray(array(
    //         //     'fill' => array(
    //         //         'type'  => PHPExcel_Style_Fill::FILL_SOLID,
    //         //         'color' => array('rgb' => 'FF0000')
    //         //     )
    //         // ));
    //     ];
    // // }
    // public function registerEvents(): array
    // {
    //     return [
    //         BeforeExport::class  => function(BeforeExport $event) {
    //             $event->writer->setCreator('Patrick');
    //         },
    //         AfterSheet::class    => function(AfterSheet $event) {
    //             $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

    //             $event->sheet->styleCells(
    //                 'A1:W1',
    //                 [
    //                     'borders' => [
    //                         'outline' => [
    //                             'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
    //                             'color' => ['argb' => 'FFFF0000'],
    //                         ],
    //                     ]
    //                 ]
    //             );
    //         },
    //     ];
    // }
    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {

              
                // $cells = "A1:W1";
                // $event->sheet->mergeCells($cells);
                // $event->sheet->getDelegate()->getStyle($cells)->getFont()->setBold(true);
                // $event->sheet->getDelegate()->getStyle($cells)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
                // $event->sheet->getDelegate()->getStyle($cells)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $cells = 'A2:WW2';
                $event->sheet->getDelegate()->getStyle($cells)->getFont()->setBold(true);
                $event->sheet->getDelegate()->setAutoFilter('A2:AN2');
                // $event->$shet->setAutoFilter('A2');


                $event->sheet->getDelegate()->getStyle('A2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFD3D3DE');

                $event->sheet->getDelegate()->getStyle('B2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF6495ED');

                $event->sheet->getDelegate()->getStyle('C2:F2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF9ACD32');

                $event->sheet->getDelegate()->getStyle('G2:K2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF008080');

                $event->sheet->getDelegate()->getStyle('L2:Q2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFBA55D3');

                $event->sheet->getDelegate()->getStyle('R2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF9ACD32');

                $event->sheet->getDelegate()->getStyle('S2:U2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFFA8072');

                $event->sheet->getDelegate()->getStyle('V2:X2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF1E90FF');//VERDE

                $event->sheet->getDelegate()->getStyle('Y2:AA2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFFF8C00');

                $event->sheet->getDelegate()->getStyle('AB2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFC0C0C0');

                $event->sheet->getDelegate()->getStyle('AC2:AJ2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF9ACD32');

                $event->sheet->getDelegate()->getStyle('AK2:AL2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FF20B2AA');

                $event->sheet->getDelegate()->getStyle('AM2:AN2')
                ->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()
                ->setARGB('FFFF1493');
            },
        ];
    }

    // public function styles(Worksheet $sheet)
    // {
    //     $styleArray = [
    //         'font' => [
    //             'bold' => true,
    //         ],
    //     ];

    //     $sheet->getStyle("D");

    //     $column_range = 'D4:D' . $sheet->getHighestRow();

    //     return [
    //         $column_range  => $styleArray
    //     ];
    // }

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
                'Estado',
                'Primer Nombre',
                'Segundo Nombre',
                'Apellido Paterno',
                'Apellido Materno',
                'Sexo',
                'Tipo Sangre',
                'Estado Civil',
                'Telefono.',
                'Correo',
                'Calle',
                'Colonia',
                'No. Interior',
                'No. Exterior',
                'C.P.',
                'Ciudad',
                'Fecha Nacimiento',
                'Fecha Ingreso',
                'Puesto',
                'Sucursal',
                'ID Nomina',
                'RFC',
                'NSS',
                'Banco',
                'No. Tarjeta',
                'No. Cuenta',
                'Empresa',
                'Salario Bruto',
                'Salario Fijo',
                'Salario Neto',
                'Pago IMSS',
                'Excedente',
                'Efectivo',
                'Factor SUA',
                'Descuento Quincenal',
                'No. Credito Infonavit',
                'Tipo Infonavit',
                'Contato Emergencia',
                'Telefono Emergencia',
            ]
        ];
    }

   
}
