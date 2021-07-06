<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer_detail';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function subs(){
        return $this->belongsTo(Subscription::class,'subscription_id');
    }
}
