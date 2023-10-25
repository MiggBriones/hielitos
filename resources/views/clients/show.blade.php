@extends('layouts.app')

@section('titulo')
    Clientes
@endsection

@section('contenido')
    <div class="grid place-items-center">    
        <table class="text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="text-left">
                <a href="{{ route('clients.create') }}" class="p-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </caption>

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-4">Id</th>
                    <th class="px-6 py-4">Nombre</th>
                    <th class="px-6 py-4">Apellido</th>
                    <th class="px-6 py-4">Estatus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-3">{{$client->id}}</td>
                        <td class="px-6 py-3">{{$client->name}}</td>
                        <td class="px-6 py-3">{{$client->last_name}}</td>
                        <td class="px-6 py-3">{{$client->getStatus->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection