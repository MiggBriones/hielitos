@extends('layouts.app')

@section('titulo')
    Productos
@endsection

@section('contenido')
    <div class="grid place-items-center">    
        <table class="text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="text-left">
                <a href="{{ route('products.create') }}" class="p-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </caption>

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-4">Id</th>
                    <th class="px-6 py-4"># serie</th>
                    <th class="px-6 py-4">Descripción</th>
                    <th class="px-6 py-4"># puertas</th>
                    <th class="px-6 py-4">Marca</th>
                    <th class="px-6 py-4">Capacidad</th>
                    <th class="px-6 py-4">Color</th>
                    <th class="px-6 py-4">Motor</th>
                    <th class="px-6 py-4">Gas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-3">{{$product->id}}</td>
                        <td class="px-6 py-3">{{$product->serial_number}}</td>
                        <td class="px-6 py-3">{{$product->description}}</td>
                        <td class="px-6 py-3">{{$product->doors_num}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithBrand->description}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithCapacity->capacity}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithColor->description}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithEngineSize->size}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithGasType->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection