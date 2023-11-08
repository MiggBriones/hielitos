<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\GasType;
use App\Models\Product;
use App\Models\Capacity;
use App\Models\EngineSize;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('getProductWithBrand')->get();
        $productBrand = Brand::with('getBrandWithProducts')->get();

        return view('products.show', compact('products', 'productBrand'));
    }

    public function create()
    {
        $productBrand = Brand::with('getBrandWithProducts')->get();
        $productCapacity = Capacity::with('getCapacityWithProducts')->get();
        $productColor = Color::with('getColorWithProducts')->get();
        $productEngineSize = EngineSize::with('getEngineSizeWithProducts')->get();
        $productGasType = GasType::with('getGasTypeWithProducts')->get();

        return view('products.create', compact (
                'productBrand', 'productCapacity'
                ,'productColor', 'productEngineSize'
                ,'productGasType'
        ));
    }

    public function store(Request $request)
    {
        // TODO revisar asignación de cliente
        $this->validate($request, [ 
            'numeroSerie' => 'required|min:5|max:20',
            'descripcion' => 'required|max:155',
            'numeroPuertas' => 'required|numeric',
            'tipoPuertas' => 'required|min:5|max:15',
            // 'idCliente' => 'required|numeric',
            'marca' => 'required|numeric',
            'capacidad' => 'required|numeric',
            'color' => 'required|numeric',
            'tamanioMotor' => 'required|numeric',
            'tipoDeGas' => 'required|numeric'
        ]);

        Product::create([
            'serial_number' => $request->numeroSerie,
            'description' => $request->descripcion,
            'doors_num' => $request->numeroPuertas,
            'door_type' => $request->tipoPuertas,
            // 'id_client' => $request->idCliente,
            'id_brand' => $request->marca,
            'id_capacity' => $request->capacidad,
            'id_color' => $request->color,
            'id_engine_size' => $request->tamanioMotor,
            'id_gas_type' => $request->tipoDeGas

        ]);

        // Redireccionar
        return redirect()->route('product');
    }

}
