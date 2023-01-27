<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
        public function index(){
        $product = Product::all();
        $arrival = Product::latest()->paginate(20);
        return view('marketplace.pages.index', ['product' => $product], ['arrival' => $arrival]);
    }

    public function productDetails($slug_product){
        $details = Product::where('slug_product', $slug_product)->first();
        $arrival = Product::all();
        return view('marketplace.pages.product-detail', ['arrival' => $arrival], ['details' => $details]);
    }
}
