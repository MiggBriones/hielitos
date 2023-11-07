<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('getBrand')->get();
        $productBrand = Brand::with('getProducts')->get();

        return view('products.show', compact('products', 'productBrand'));
    }

    public function create()
    {
        $productBrand = Brand::with('getProducts')->get();
        return view('products.create', compact('productBrand'));
    }

}
