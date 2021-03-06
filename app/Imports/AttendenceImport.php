<?php

namespace App\Imports;

use App\Attendence;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use \PhpOffice\PhpSpreadsheet\Shared\Date;

class AttendenceImport extends DefaultValueBinder  implements ToModel,WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user=User::where('employee_id',$row['user_id'])->first();
        if(count($user)==1)
        {
            $attendence=Attendence::where('user_id',$user->id)->where('date',Date::excelToDateTimeObject($row['date']))->exists();
            if(!$attendence)
            {
                return new Attendence([
                    'user_id'=>$user->id,
                    'date'=>Date::excelToDateTimeObject($row['date']),
                    'in_time'=>$row['in_time'],
                    'out_time'=>$row['out_time'],
                    'status'=>$row['status'],
                ]);
            }
        }
    }
}
