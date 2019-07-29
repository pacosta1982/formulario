<?php

namespace App\Exports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class HistorialExport implements FromQuery, WithHeadings,WithMapping, ShouldAutoSize,WithEvents
{
    use Exportable;

    public function __construct()
    {
        
    }

    public function query()
    {
        return Persona::query();
        //->select('DENroLin','DEFecDis')
        //->where('NroCi',$this->ci)
        //->where('Nombre',$this->nombre)
        //->orderBy('nombre', 'asc');
        //->get();
    }

    public function map($invoice): array
    {
        return [
            
            $invoice->ci,
            $invoice->nombre,
            $invoice->apellido,
            $invoice->sexo,
            date("d/m/Y", strtotime($invoice->fecha_nac)),
            $invoice->email,
            $invoice->domicilio_actual,
            'Central',
            //$invoice->ciudad,
            $invoice->ciudad?$invoice->getCity->CiuNom:"",
            $invoice->barrio,
            $invoice->estado_civil,
            $invoice->nacionalidad,
            $invoice->ingreso,
            $invoice->celular,
            date("d/m/Y", strtotime($invoice->created_at)),
            //$invoice->DEUnOrHa?$invoice->deporigen->DepenDes:"",
            //Date::dateTimeToExcel($invoice->created_at),
        ];
    }


    public function headings(): array
    {
        return [
            'CI',
            'Nombre',
            'Apellido',
            'Sexo',
            'Fecha_Nac',
            'email',
            'Domicilio_Actual',
            'Departamento',
            'Ciudad',
            'Barrio',
            'Estado_Civil',
            'Nacionalidad',
            'Ingreso',
            'Celular',
            'Fecha Creación',
            
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:O1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(15);
            },
        ];
    }
}

