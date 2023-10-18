<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show()
    {
        $clients = Client::all();
        // dd($clients);
        return view('clients.show', compact('clients'));
    }
}
