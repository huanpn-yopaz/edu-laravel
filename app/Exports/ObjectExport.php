<?php

namespace App\Exports;

use App\Models\Objects;
use Maatwebsite\Excel\Concerns\FromCollection;

class ObjectExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Objects::all();
    }
}
