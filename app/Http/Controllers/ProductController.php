<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = DB::select('SELECT * FROM products');
        return view('shop', compact('products'));
    }
}
