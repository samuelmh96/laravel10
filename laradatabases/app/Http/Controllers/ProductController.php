<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index():View
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
}
