<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    protected $table='items';
    public function get_item()
    {
    	return $this->hasMany('App\shop_items','itemId','itemId');
    }
}
