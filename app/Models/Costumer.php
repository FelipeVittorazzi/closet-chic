<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'address',
        'phone',
        'email',
        'photo',
        'email_verified_at',
        'payment_method_id',
    ];
}
