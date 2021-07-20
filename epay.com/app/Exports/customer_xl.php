<?php

namespace App\Exports;
use App\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;

class customer_xl implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customer::all();
    }
}
