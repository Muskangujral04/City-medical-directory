<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $fillable=['speciality_name'];

    public function USerDetail()
    {
    	return $this->hasMany('App\UserDetail');
    }
}
