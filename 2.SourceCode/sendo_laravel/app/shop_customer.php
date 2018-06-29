<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop_customer extends Model
{
    protected $table='shop_customer';
    public function get_shop()
    {
    	return $this->beLongsTo('App\shop','shopId','shopId');

    }
     public function get_customer()
    {
    	return $this->beLongsTo('App\customer','customerId','customerId');
    	
    }
}
