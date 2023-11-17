@extends('layouts.app')

@section('titulo')
    Mantenimiento
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <form
                action="{{ route('images.store') }}"
                method="POST"
                enctype="multipart/form-data"
                id="dropzone"
                class="dropzone border-dashed border-2 
                w-full h-96 rounded flex flex-col justify-center items-center"
            >
                @csrf
            </form>
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <!-- NOTA: La opción novalidate, desactiva las validaciones del explorador con HTML5 -->
            <form action="#" method="POST" novalidate>
                <div class="mb-5">
                    <label for="idCliente" class="mb-2 block uppercase text-gray-500 font-bold">
                        Cliente
                    </label>
                    <select
                        id="idCliente"
                        name="idCliente"
                        class="border p-3 w-full rounded-lg @error('idCliente') border-red-500 @enderror"
                    >

                        @foreach ($clients as $client)
                            <option
                                value="{{ $client->id }}"
                                {{ old('idCliente') == $client->id ? "selected" : ""  }}
                            >
                                {{ $client->name . "  " . $client->last_name }}
                            </option>    
                        @endforeach
                    </select> 
                    
                    @error('idCliente')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="idProducto" class="mb-2 block uppercase text-gray-500 font-bold">
                        Producto
                    </label>
                    <select
                        id="idProducto"
                        name="idProducto"
                        class="border p-3 w-full rounded-lg @error('idProducto') border-red-500 @enderror"
                    >

                        @foreach ($products as $product)
                            <option
                                value="{{ $product->id }}"
                                {{ old('idProducto') == $product->id ? "selected" : ""  }}
                            >
                                {{ $product->serial_number . " - " . $product->description }}
                            </option>    
                        @endforeach
                    </select> 
                    
                    @error('idProducto')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="Observación" class="mb-2 block uppercase text-gray-500 font-bold">
                        Observaciones
                    </label>
                    <textarea
                        id="observacion"
                        name="observacion"
                        rows="4" 
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                            border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                            dark:focus:border-blue-500"
                        placeholder="Tus observaciones aquí...">

                    </textarea>
                    
                    @error('observacion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </form>
        </div>
    </div>
@endsection