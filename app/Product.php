<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function carts()
    {
        return $this->belongsToMany(
          Cart::class,
          'line_items',
        )->withPivot(['id', 'quantity']);
    }

    public function scopeSelectAllProducts() 
    {
        $result = DB::select("SELECT * FROM products");
        return $result;
    }
}
