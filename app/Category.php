<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['category_name'];

    public function UserDetail()
    {
    	return $this->hasOne('App\UserDetail');
    }
}
