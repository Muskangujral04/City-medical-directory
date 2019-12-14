<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use notifiable;

    protected $guard='admin';

    protected $fillable=['email' , 'password'];

    protected $hidden=['password' , 'remember_token'];
}
