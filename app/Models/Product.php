<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'price',
        'size',
        'color',
        'origin_product',
        'obs',
        'image',
        'description',
        'category_id'
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

}
