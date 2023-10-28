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
                    <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">
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
                    <label for="apellido" class="mb-2 block uppercase text-gray-500 font-bold">
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
                        value="{{ old('estatus') }}"
                        >

                        @foreach ($clientStatus as $status)
                            <option value="{{ $status->id }}">{{$status->description}}</option>    
                        @endforeach
                      </select> 

                    @error('estatus')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="calle" class="mb-2 block uppercase text-gray-500 font-bold">
                        Calle
                    </label>
                    <input
                        id="calle"
                        name="calle"
                        type="text"
                        placeholder="Tu calle"
                        class="border p-3 w-full rounded-lg @error('calle') border-red-500 @enderror"
                        value="{{ old('calle') }}"
                    />

                    @error('calle')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="numero" class="mb-2 block uppercase text-gray-500 font-bold">
                        Número
                    </label>
                    <input
                        id="numero"
                        name="numero"
                        type="text"
                        placeholder="Tu número de casa"
                        class="border p-3 w-full rounded-lg @error('numero') border-red-500 @enderror"
                        value="{{ old('numero') }}"
                    />

                    @error('numero')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="codigoPostal" class="mb-2 block uppercase text-gray-500 font-bold">
                        Código postal
                    </label>
                    <input
                        id="codigoPostal"
                        name="codigoPostal"
                        type="text"
                        placeholder="Tu código postal"
                        class="border p-3 w-full rounded-lg @error('codigoPostal') border-red-500 @enderror"
                        value="{{ old('codigoPostal') }}"
                    />

                    @error('codigoPostal')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="longitud" class="mb-2 block uppercase text-gray-500 font-bold">
                        Longitud
                    </label>
                    <input
                        id="longitud"
                        name="longitud"
                        type="text"
                        placeholder="Tu longitud"
                        class="border p-3 w-full rounded-lg @error('longitud') border-red-500 @enderror"
                        value="{{ old('longitud') }}"
                    />

                    @error('longitud')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="latitud" class="mb-2 block uppercase text-gray-500 font-bold">
                        Latitud
                    </label>
                    <input
                        id="latitud"
                        name="latitud"
                        type="text"
                        placeholder="Tu latitud"
                        class="border p-3 w-full rounded-lg @error('latitud') border-red-500 @enderror"
                        value="{{ old('longitud') }}"
                    />

                    @error('latitud')
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