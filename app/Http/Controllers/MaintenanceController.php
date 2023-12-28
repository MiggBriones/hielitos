<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\Client;
use App\Models\Product;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Models\StatusMaintenance;
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
        # $maintenances = Maintenance::all();
        $maintenances = Maintenance::with(['getStatus', 'getProduct'] )->get();

        return view('maintenance.show', compact('maintenances'));
    }

    public function create() {
        $clients = Client::all();
        $maintenanceStatus = StatusMaintenance::with('maintenances')->get();

        return view('maintenance.create', compact('clients', 'maintenanceStatus'));
    }

    public function GetProductsByClient($idClient) {
        echo json_encode(DB::table('products')->where('id_client', $idClient)->get());
    }

    public function store(Request $request)
    {
        $this->validate($request, [ 
            'idCliente' => 'required|numeric',
            'observacion' => 'required|min:5|max:1500',
            'imagen' => 'min:5',
            'idProducto' => 'required|numeric',
            'estatus' => 'required|numeric'
        ]);

        $imagenPath = $request->imagen;

        Maintenance::create([
            'observation' => $request->observacion,
            'image' => $imagenPath,
            'id_products' => $request->idProducto,
            'id_status_maintenance' => $request->estatus
        ]);

        // Redireccionar
        return redirect()->route('maintenance');
    }

    public function edit(Maintenance $maintenance)
    {
        $maintenanceStatus = StatusMaintenance::with('maintenances')->get();
        $product = Product::find($maintenance->id_products);
        $client = Client::find($product->id_client);

        return view('maintenance.edit', compact('maintenance', 'maintenanceStatus', 'client'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [ 
            'estatus' => 'required|numeric'
        ]);

        $maintenance = Maintenance::find($id);

        $maintenance->id_status_maintenance = $request->estatus;

        $maintenance->update();
        
        // Redireccionar
        return redirect()->route('maintenance');
    }

    public function report(Maintenance $maintenance)
    {
        
        $product = Product::find($maintenance->id_products);
        $client = Client::find($product->id_client);
        $maintenance = Maintenance::find($maintenance->id);
        $maintenanceStatus = StatusMaintenance::with('maintenances')->get();
        
        // dd($product);


        $pdf = PDF::loadView('reports.maintenance.tickets', compact(
            'maintenance', 'product', 'client')
        );
    
        return $pdf->stream();
    }

}
