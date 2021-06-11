<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('product.index')->withProducts($products);
    }

    public function detail($slug){
        $product = Product::where('slug',$slug)->first();
        $products = Product::get();
        return view('product.detail')->withProduct($product)->withProducts($products);
    }
}
