<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'admin'; // separate guard
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password'];
}