<?php

namespace App\Exports;

use App\Sales;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SalesExport implements FromCollection, WithHeadingRow
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Sales::all();
    }
}
