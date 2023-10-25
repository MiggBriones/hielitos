<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\StatusClient;
use Illuminate\Http\Request;

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
        //dd($request);

        // Validaciones en formularios
        $this->validate($request, [
            'nombre' => 'required|min:5|max:55',
            'apellido' => 'max:55',
            'estatus' => 'required'
        ]);

        Client::create([
            'name' => $request->nombre,
            'last_name' => $request->apellido,
            'id_client_status' => $request->estatus
        ]);

        // Redireccionar
        return redirect()->route('client');
    }
       
}
