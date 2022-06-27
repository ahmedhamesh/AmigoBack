<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'sale_price',
        'image',
        'images',
        'category_id',
        'country_id',
        'brands_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
