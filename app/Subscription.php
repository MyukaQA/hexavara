<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscription_plan';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function customer(){
        return $this->hasMany(Customer::class);
    }
}
