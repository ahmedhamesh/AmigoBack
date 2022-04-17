<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = '	categories' ;

    public function category()
    {
        return $this->hasMany(Products::class,'category_id');
    }
}
