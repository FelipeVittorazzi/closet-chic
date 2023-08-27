<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'image',
        'description',
    ];

    public function product() {
        return $this->hasMany(Product::class);
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
}
