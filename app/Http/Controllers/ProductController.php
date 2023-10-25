<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        /* $clients = Client::with('getStatus')->get(); */

        /* return view('products.show', compact('clients', 'clientStatus')); */
        return view('products.show');
    }

}
