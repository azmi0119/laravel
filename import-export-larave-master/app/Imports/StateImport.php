<?php

namespace App\Imports;

use App\State;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class StateImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new State([
            'state'     => $row[0],
            'city'      => $row[1],
            'pincode'   => $row[2],
            'location'  => $row[3],
        ]);
    }

    public function startRow(): int {
        return 2;       // it'll heading part in your excel
    }
}
