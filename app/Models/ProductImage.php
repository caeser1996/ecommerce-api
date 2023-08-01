<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['filename','products_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
