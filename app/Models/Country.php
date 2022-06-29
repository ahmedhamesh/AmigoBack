<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries' ;

    protected $fillable = [
        'name',
        'currency',
    ];
    public function products(){
        return $this->belongsToMany(Product::class,'product_countries');
    }
}
