<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Client;
use App\Models\Address;
use App\Models\StatusClient;
use Illuminate\Http\Request;
use App\Models\ClientHasAddress;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{   
    public function index()
    {
        # $clients = Client::all();
        $clients = Client::with('getStatus')->get();
        $clientStatus = StatusClient::with('clients')->get();
        return view('clients.show', compact('clients', 'clientStatus'));
    }

    public function create()
    {
        return view('clients.create');
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
                'status' => $request->estatus
            ]);

            ClientHasAddress::create([
                'id_client' =>  $client->id,
                'id_address' => $address->id,
                'created_at' => Carbon::now()
            ]);

            // Redireccionar
            return redirect()->route('client');
        });
    }
       
}
