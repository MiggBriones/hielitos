<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Client;
use App\Models\Address;
use App\Models\StatusClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    // NOTE: Para tener acceso al controlador, protegemos de que el usuario debe estár autenticado
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        # $clients = Client::all();
        $clients = Client::with('getStatus')->get();
        return view('clients.show', compact('clients'));
    }

    public function create()
    {
        $clientStatus = StatusClient::with('clients')->get();
        return view('clients.create', compact('clientStatus'));
    }

    public function store(Request $request)
    {
        // dd($request);

        // Validaciones en formularios
        // TODO separar estatus del cliente y de la dirección.
        $this->validate($request, [ 
            'nombre' => 'required|min:5|max:55',
            'apellido' => 'max:55',
            'calle' => 'required|min:10|max:255',
            'numero' => 'required|min:1|max:10',
            'codigoPostal' => 'required|min:3|max:5',
            'longitud' => 'max:15',
            'latitud' => 'max:15',
            'estatus' => 'required|max:1'
        ]);

        return DB::transaction(function () use($request) {
            $client = Client::create([
                'name' => $request->nombre,
                'last_name' => $request->apellido,
                'id_client_status' => $request->estatus
            ]);

            $address = Address::create([
                'street' => $request->calle,
                'number' => $request->numero,
                'zip_code' => $request->codigoPostal,
                'longitude' => $request->longitud,
                'latitude' => $request->latitud,
                'status' => 1, /* Cuando se dá de alta la direccion por defecto */
                'id_client' => $client->id
            ]);

            // Redireccionar
            return redirect()->route('client');
        });
    }
       
}
