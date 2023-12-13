<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MaintenanceController extends Controller
{
    // NOTE: Para tener acceso al controlador, protegemos de que el usuario debe estár autenticado
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $maintenances = Maintenance::all();

        return view('maintenance.show', compact('maintenances'));
    }

    public function create() {
        $clients = Client::all();

        return view('maintenance.create', compact('clients'));
    }

    public function GetProductsByClient($idClient) {
        echo json_encode(DB::table('products')->where('id_client', $idClient)->get());
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
