<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop_items extends Model
{
    protected $table='shop_items';
     public function get_shop()
    {
    	return $this->beLongsTo('App\shop','shopId','shopId');

    }
     public function get_item()
    {
    	return $this->beLongsTo('App\customer','itemId','itemId');
    	
    }
}
