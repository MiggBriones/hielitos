@extends('layouts.app')

@section('titulo')
    Congeladores
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
                    <th class="px-6 py-4"># serie</th>
                    <th class="px-6 py-4">Descripción</th>
                    <th class="px-6 py-4"># puertas</th>
                    <th class="px-6 py-4">Marca</th>
                    <th class="px-6 py-4">Capacidad</th>
                    <th class="px-6 py-4">Color</th>
                    <th class="px-6 py-4">Motor</th>
                    <th class="px-6 py-4">Gas</th>
                    <th class="px-6 py-4">Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-3">{{$product->serial_number}}</td>
                        <td class="px-6 py-3">{{$product->description}}</td>
                        <td class="px-6 py-3">{{$product->doors_num}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithBrand->description}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithCapacity->capacity}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithColor->description}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithEngineSize->size}}</td>
                        <td class="px-6 py-3">{{$product->getProductWithGasType->description}}</td>
                        <td class="px-6 py-3">
                            <a href="{{ route('products.edit', $product) }}" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection