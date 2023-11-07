<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Capacity;
use App\Models\EngineSize;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('getProductWithBrand')->get();
        $productBrand = Brand::with('getBrandWithProducts')->get();

        return view('products.show', compact('products', 'productBrand'));
    }

    public function create()
    {
        $productBrand = Brand::with('getBrandWithProducts')->get();
        $productCapacity = Capacity::with('getCapacityWithProducts')->get();
        $productColor = Color::with('getColorWithProducts')->get();
        $productEngineSize = EngineSize::with('getEngineSizeWithProducts')->get();

        return view('products.create', compact('productBrand', 'productCapacity','productColor', 'productEngineSize'));
    }

}
