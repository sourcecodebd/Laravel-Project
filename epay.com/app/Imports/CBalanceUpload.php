<?php
  
namespace App\Imports;
  
use App\Customer_balance;
use Maatwebsite\Excel\Concerns\ToModel;
  
class CBalanceUpload implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer_balance([
            //
             'id' => $row[0],
             'username'=> $row[1],
             'email'=> $row[2],
             'card_no'=> $row[3],
             'bank_name'=> $row[4],
             'added'=> $row[5],
             'transferred'=> $row[6],
             'loan'=> $row[7],
             'loanreq'=> $row[8],
             'balance'=> $row[9],
             'total_purchased'=> $row[10],
             'phone'=> $row[11],
             'mobile_recharge'=> $row[12],
             'electricity_bill'=> $row[13],
             'profile_img'=> $row[14],
             'status'=> $row[15],
             'created_at'=> $row[16],
             'updated_at'=> $row[17],
        ]);
    }
}