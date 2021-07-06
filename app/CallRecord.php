<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallRecord extends Model
{
    protected $table = 'call_record';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function incoming(){
        return $this->belongsTo(Customer::class,'incoming_number');
    }

    public function outgoing(){
        return $this->belongsTo(Customer::class,'outgoing_number');
    }
}


