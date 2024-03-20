<?php

namespace App\Imports;

use App\Models\Course;
use App\Models\Order;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Row;

class ReportImport implements WithStartRow, WithValidation, OnEachRow, WithCalculatedFormulas
{
//    /**
//    * @param array $row
//    *
//    * @return \Illuminate\Database\Eloquent\Model|null
//    */
//    public function model(array $row)
//    {
////        dd($row);
//        return new User([
//            'name'     => $row[0],
//            'username'    => $row[1],
//            'email'    => $row[2],
//            'password'    => '123456',
//            'phone'    => $row[3],
//            'address'    => $row[4],
//        ]);
//    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        return [
            '1' => 'unique:users,email'
        ];
    }

    public function customValidationMessages()
    {
        return [
            '1.unique' => 'Email không được trùng lặp',
        ];
    }

    public function onRow(Row $row)
    {
//        dd($row);
        $rowIndex = $row->getIndex();
        $row = $row->toArray();

        $report = Report::create([
            'First_fragment_label' => $row[0],
            'String' => $row[1],
            'String_Length' => $row[2],
            'Comment' => $row[3],
            'Gender' => $row[4],
            'Plurality' => $row[5],
            'Language' => $row[6],
            'Platform' => $row[7],
            'TV_Brand' => $row[8],
            'Tip_ID' => $row[9],
            'Location' => $row[10]
        ]);
    }
}
