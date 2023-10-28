<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function storeUserWithAddress(Request $request)
    {
        //dd($request);

        // Validaciones en formularios
        $this->validate($request, [ 
            'calle' => 'required|min:10|max:255',
            'numero' => 'required|min:1|max:10',
            'codigoPostal' => 'required|min:3|max:5',
            'longitud' => 'max:15',
            'latitud' => 'max:15',
            'estatus' => 'required|max:1'
        ]);

        $Address = Address::create([
            'street' => $request->calle,
            'number' => $request->numero,
            'zip_code' => $request->codigoPostal,
            'longitude' => $request->longitud,
            'latitude' => $request->latitud,
            'status' => $request->estatus
        ]);

        // return $Address->id;
        // Redireccionar
        return redirect()->route('address');
    }
}
