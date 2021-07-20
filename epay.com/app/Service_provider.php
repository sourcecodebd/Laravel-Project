<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_provider extends Model
{
    protected $table = 'service_provider_table';
    public $timestamps = false;
    protected $primaryKey = 'userId';
}
