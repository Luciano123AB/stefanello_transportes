<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    protected $fillable = [
        'email',
        'password'
    ];
    protected $casts = [
        'email' => 'string',
        'password' => 'string'
    ];

}
