<?php

namespace App\Imports;

use App\Ramo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RamosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $ramos= Ramo::get();
        foreach($ramos as $ramo){
            if($ramo['NRC'] == $row['nrc']){
                return;
            }
        }
        
        return new Ramo([
            'codigo'=> $row['codigo'],
            'NRC'=> $row['nrc'],
            'nombre'=> $row['nombre']
        ]);
    }
}
