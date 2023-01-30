<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;

class CustomerController extends Controller
{
    public function index(){
        return view('marketplace.pages.d_customer');
    }
}
