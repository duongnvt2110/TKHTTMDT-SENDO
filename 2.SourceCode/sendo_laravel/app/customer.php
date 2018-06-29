<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customer';
    public function get_customer()
    {
    	return $this->hasMany('App\shop_customer','customerId','customerId');
    }
}
