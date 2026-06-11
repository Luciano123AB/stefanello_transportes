<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpj',
        'whatsapp',
        'phone'
    ];
    protected $casts = [
        'cnpj' => 'string',
        'whatsapp' => 'string',
        'phone' => 'string'
    ];

}
