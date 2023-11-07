@extends('layouts.app')

@section('titulo')
    Agregar Producto
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <!-- NOTA: La opción novalidate, desactiva las validaciones del explorador con HTML5 -->
            <form action="{{ route('product') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="numeroSerie" class="mb-2 block uppercase text-gray-500 font-bold">
                        numero de serie
                    </label>
                    <input
                        id="numeroSerie"
                        name="numeroSerie"
                        type="text"
                        placeholder="Número de serie"
                        class="border p-3 w-full rounded-lg @error('numeroSerie') border-red-500 @enderror"
                        value="{{ old('nombre') }}"
                    />
                    
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </form>
        </div>
    </div>
    @endsection