<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = null;
    public $timestamps = false;
    protected $primaryKey = 'reviewId';
}
