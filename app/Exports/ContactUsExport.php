<?php

namespace App\Exports;

use App\Models\ContactUs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class ContactUsExport implements FromCollection, WithHeadings, WithMapping
{
    protected $contactusEnquiries;

    public function __construct($contactusEnquiries)
    {
        $this->contactusEnquiries = $contactusEnquiries;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->contactusEnquiries;
    }


    public function headings(): array
    {
        return [
            'S. No.',
            'Name',
            'Course Name',
            'Mobile Number',
            'Email',
            'Message'
        ];
    }


    public function map($row): array
    {
        static $rowNumber = 1;

        return [
            $rowNumber++,
            $row->name,
            $row->course_name,
            $row->phone,
            $row->email,
            $row->message,
        ];
    }
}
