<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallRecord extends Model
{
    protected $table = 'call_record';
    protected $guarded = ['id'];
    public $timestamps = false;
}
