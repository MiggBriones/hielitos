<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\StatusClient;
use Illuminate\Http\Request;

class ClientController extends Controller
{   
    public function show()
    {
        # $clients = Client::all();
        $clients = Client::with('get_status')->get();
        $status_client = StatusClient::with('clients')->get();
        return view('clients.show', compact('clients', 'status_client'));
    }
}
