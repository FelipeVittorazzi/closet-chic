<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

}
