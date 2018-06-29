<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account_seller extends Model
{
	protected $table='account_seller';
	public $timestamps = false;
	public function get_account()
    {
        return $this->hasOne('App\shop','sellerId');
    }
}
