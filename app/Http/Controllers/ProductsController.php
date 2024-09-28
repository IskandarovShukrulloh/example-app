<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController
{
public function index(){
    $products = Product::all();
    //dd($products);
    return view ('products', compact('products'));
  }
}
