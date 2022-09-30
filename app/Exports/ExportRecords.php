<?php

namespace App\Exports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

 
class ExportRecords implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Record::all();
    }
    public function headings(): array
    {
        return [
            'refNum',
            'date',
            'payer',
            'city',
            'prov',
            'nameOfdead',
            'nat',
            'age',
            'sex',
            'dateofdeath',
            'causeofdeath',
            'nameofcemetery',
            'infect',
            'embalm',
            'disposition',
            'amt',
            'colOfficer'
        ];
    }
}
