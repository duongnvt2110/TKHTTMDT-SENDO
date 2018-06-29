<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
	protected $table='order_item';
    public function get_order_item()
    {
    	return $this->beLongsTo('App\shop','shopId','orderId');
    }
}
