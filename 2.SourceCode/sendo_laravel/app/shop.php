<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    protected $table='shop';
    public $timestamps = false;
	public function get_shop()
    {
        return $this->beLongsTo('App\account_seller','sellerId','shopId');
    }
    public function get_customer()
    {
        return $this->hasMany('App\shop_customer','shopId','shopId');
    }
     public function get_items()
    {
        return $this->hasMany('App\shop_items','shopId','shopId');
    }
}
