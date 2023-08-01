<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
    ];
    public function images(){
        return $this->belongsTo(ProductImage::class);
    }
}
