<?php

namespace App\Exports;

use App\Models\GenralEnquiry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GenralEnquiryExport implements FromCollection, WithHeadings, WithMapping
{ 
    protected $genralenquiry;

    public function __construct($genralenquiry){
        $this->genralenquiry = $genralenquiry;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return GenralEnquiry::all();
        return $this->genralenquiry;
    }

    public function headings(): array
    {
        return [
            'S. No.',
            'Name',
            'Mobile Number',
            'Email'
        ];
    }


    public function map($row): array
    {
        static  $rowNumber = 1;

        return [
            $rowNumber++,
            $row->name,
            $row->phone,
            $row->email,
        ];
    }
}
