<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Log;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::selectAllProducts();
        return view('product.index')
            ->with('products', $products);
    }

    public function show($id)
    {
        return view('product.show')
            ->with('product', Product::find($id));
    }
}