@extends('layouts.app')

@section('titulo')
    Agregar Cliente
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <!-- NOTA: La opción novalidate, desactiva las validaciones del explorador con HTML5 -->
            <form action="{{ route('client') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                        id="nombre"
                        name="nombre"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror"
                        value="{{ old('nombre') }}"
                    />
                    
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="last_name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Apellido
                    </label>
                    <input
                        id="apellido"
                        name="apellido"
                        type="text"
                        placeholder="Tu apellido"
                        class="border p-3 w-full rounded-lg @error('apellido') border-red-500 @enderror"
                        value="{{ old('apellido') }}"
                    />

                    @error('apellido')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="estatus" class="mb-2 block uppercase text-gray-500 font-bold">
                        Estatus
                    </label>
                    <select
                        id="estatus"
                        name="estatus"
                        class="border p-3 w-full rounded-lg @error('estatus') border-red-500 @enderror"
                        value="{{ old('id_client_status') }}"
                        >

                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                        <option value="3">Suspendido</option>
                      </select> 

                    @error('estatus')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <input
                    type="submit"
                    value="Crear cliente"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >

            </form>
        </div>
    </div>
@endsection