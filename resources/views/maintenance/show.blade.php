@extends('layouts.app')

@section('titulo')
    Mantenimientos
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
<div class="grid place-items-center">    
    <table class="text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="text-left">
            <a href="{{ route('maintenance.create') }}" class="p-4 inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </caption>

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-4">Id</th>
                <th class="px-6 py-4"># serie</th>
                <th class="px-6 py-4">Producto</th>
                <th class="px-6 py-4">Marca</th>
                <th class="px-6 py-4">Estatus</th>
                <th class="px-6 py-4">Fecha</th>
                <th class="px-6 py-4">Editar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($maintenances as $maintenance)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-3">{{$maintenance->id}}</td>
                    <td class="px-6 py-3">{{$maintenance->getProduct->serial_number}}</td>
                    <td class="px-6 py-3">{{$maintenance->getProduct->description}}</td>
                    <td class="px-6 py-3">{{$maintenance->getProduct->getProductWithBrand->description}}</td>
                    <td class="px-6 py-3">{{$maintenance->getStatus->description}}</td>
                    <td class="px-6 py-3">{{ $maintenance->created_at->format('Y-m-d') }}</td>
                    <td class="px-6 py-3">
                        <a href="{{ route('maintenance.edit', $maintenance) }}" >
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