<?php

namespace App\Imports;

use App\Bulk;
use App\User;
// use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       // var_dump($row[1]);die();
        // $user = User::create([
        //     'name' => $row['name'],
        //     'email'    => $row['email'],
        //     'password' => Hash::make('password'),
        // ]);
        
        return new Bulk([
            // 'name'     => $row['name'],
            // 'email'    => $row['email'],
            // 'phone'    => $row['phone_no'],
            // 'address' => $row['address'],
            'due_amount' => $row['due_amount'],
            'paid_amount' => $row['paid_amount'],
            'concession_amount' => $row['concession_amount'],
            'scholarship_amount' => $row['scholarship_amount'],
            'reverse_concession_amount' => $row['reverse_concession_amount'],
            'write_off_amount' => $row['writeoff_amount'],
            'adjusted_amount' => $row['adjusted_amount'],
            'refund_amount' => $row['refund_amount'],
            'fund_transfer_amount' => $row['fund_transfer_amount'],
        ]);
    }
}
