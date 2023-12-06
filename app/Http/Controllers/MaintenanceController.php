<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Maintenance;
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

    public function store(Request $request)
    {
        $this->validate($request, [ 
            'idCliente' => 'required|numeric',
            'observacion' => 'required|min:5|max:255',
            'imagen' => 'min:5',
            'idProducto' => 'required|numeric'
        ]);

        $imagenPath = public_path('uploads') . '\\' . $request->imagen;

        Maintenance::create([
            'observation' => $request->observacion,
            'imagen' => $imagenPath,
            'id_products' => $request->idProducto,
            'id_status_maintenance' => 1
        ]);

        // Redireccionar
        return redirect()->route('maintenance');
    }

}
