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
}
