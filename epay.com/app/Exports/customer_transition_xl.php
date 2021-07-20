<?php

namespace App\Exports;
use App\Customer_balance;
use Maatwebsite\Excel\Concerns\FromCollection;

class customer_transition_xl implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customer_balance::all();
    }
}
