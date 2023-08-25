<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    public $fillable = [
        'product_id',
        'initial_date',
        'final_date',
        'user_id',
        'total_value',
        'description',
        'obs',
        'contract'
    ];

        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rent';
}
