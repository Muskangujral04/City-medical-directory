<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=['state_id','city_name'];

    public function state()
    {
    	return $this->belongsTo('App\State');
    }

     public function UserDetail()
    {
    	return $this->belongsTo('App\UserDetail');
    }
}
