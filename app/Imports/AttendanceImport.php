<?php

namespace App\Imports;

use App\Attendance;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class AttendanceImport extends DefaultValueBinder implements WithHeadingRow,ToModel
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Attendance([
            'user_id'     => $row['user_id'],
            'date'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date']),
            'in_time'    => $row['in_time'],
            'out_time'    => $row['out_time'],
            'status'    => $row['status']
        ]);
    }
}
