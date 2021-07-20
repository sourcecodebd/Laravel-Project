<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk_manager extends Model
{
    protected $table = 'desk_manager_table';
    public $timestamps = false;
    protected $primaryKey = 'userId';
}
