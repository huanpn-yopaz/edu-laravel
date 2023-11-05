<?php
namespace App\Imports;
use App\Models\Objects;
use Maatwebsite\Excel\Concerns\ToModel;

class ObjectImport implements ToModel
{
   
    public function model(array $row)
    {
        return new Objects([
            'name_object'=>$row[0]
        ]);
    }
}
