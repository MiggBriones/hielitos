<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    // NOTE: Para tener acceso al controlador, protegemos de que el usuario debe estár autenticado
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all();
        $products = Product::all();

        return view('maintenance.show', compact('clients', 'products'));
    }

}
