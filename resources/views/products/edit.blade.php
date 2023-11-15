@extends('layouts.app')

@section('titulo')
    Editar Producto
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <!-- NOTA: La opción novalidate, desactiva las validaciones del explorador con HTML5 -->
            <form action="#" method="POST" novalidate>
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
                        value="{{ old('numeroSerie', $product->serial_number ) }}"
                    />
                    
                    @error('numeroSerie')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                    </label>
                    <input
                        id="descripcion"
                        name="descripcion"
                        type="text"
                        placeholder="Descripcion del producto"
                        class="border p-3 w-full rounded-lg @error('descripcion') border-red-500 @enderror"
                        value="{{ old('descripcion', $product->description) }}"
                    />
                    
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="numeroPuertas" class="mb-2 block uppercase text-gray-500 font-bold">
                        Número de puertas
                    </label>
                    <input
                        id="numeroPuertas"
                        name="numeroPuertas"
                        type="number"
                        onKeyDown="return false"
                        min="1"
                        max="2"
                        placeholder="Número de puertas"
                        class="border p-3 w-full rounded-lg @error('numeroPuertas') border-red-500 @enderror"
                        value="{{ old('numeroPuertas', $product->doors_num) }}"
                    />
                    
                    @error('numeroPuertas')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="tipoPuertas" class="mb-2 block uppercase text-gray-500 font-bold">
                        Tipo de puertas
                    </label>
                    <select
                        id="tipoPuertas"
                        name="tipoPuertas"
                        class="border p-3 w-full rounded-lg @error('tipoPuertas') border-red-500 @enderror"
                        >

                        <option 
                            value="{{ $product->door_type }}">
                            {{ $product->door_type}}
                        </option>
                        <option 
                            value="{{ $product->door_type == 'Vidrio' ? 'Lamina' : 'Vidrio' }}">
                            {{ $product->door_type == 'Vidrio' ? 'Lamina' : 'Vidrio' }}
                        </option>
                      </select> 
                    
                    @error('tipoPuertas')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <input
                    type="submit"
                    value="Editar producto"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>
    </div>
@endsection