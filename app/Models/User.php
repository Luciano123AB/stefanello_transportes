<?php

namespace App\Models;

use App\Notifications\VerificationEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'role'
    ];
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'role' => 'string'
    ];

    public function sendEmailVerificationNotification() {
        $this->notify(new VerificationEmail);
    }
}
