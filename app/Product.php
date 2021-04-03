<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeSelectAllProducts() {
        $result = DB::select("SELECT * FROM products");
        return $result;
    }
}
