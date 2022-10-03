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
            'Reference_Number',
            'Date',
            'Name',
            'City',
            'Province',
            'Name of Deceased',
            'Nationality',
            'Age',
            'Sex',
            'Date of Death',
            'Cause of Death',
            'Name of Cemetery',
            'Infectious/Non-Infectious',
            'Body_Embalmed/Not_Embalmned',
            'Disposition_of_Remains',
            'Amount',
            'Collecting Officer'
        ];
    }
}
