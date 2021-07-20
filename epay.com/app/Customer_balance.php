<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_balance extends Model
{
    protected $table = 'customer_balance';
    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'email',
        'card_no',
        'bank_name',
        'added',
        'transferred',
        'loan',
        'loanreq ',
        'balance ',
        'phone',
        'mobile_recharge',
        'electricity_bill',
        'profile_img',
        'status',
        'created_at',
        'updated_at',
    ];

}
