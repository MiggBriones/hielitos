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
                        value="{{ old('numeroSerie') }}"
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
                        value="{{ old('descripcion') }}"
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
                        min="1"
                        placeholder="Número de puertas"
                        class="border p-3 w-full rounded-lg @error('numeroPuertas') border-red-500 @enderror"
                        value="{{ old('numeroPuertas') }}"
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
                    <input
                        id="tipoPuertas"
                        name="tipoPuertas"
                        type="text"
                        placeholder="Tipo de puertas"
                        class="border p-3 w-full rounded-lg @error('tipoPuertas') border-red-500 @enderror"
                        value="{{ old('tipoPuertas') }}"
                    />
                    
                    @error('tipoPuertas')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="marca" class="mb-2 block uppercase text-gray-500 font-bold">
                        Marca
                    </label>
                    <select
                        id="marca"
                        name="marca"
                        class="border p-3 w-full rounded-lg @error('marca') border-red-500 @enderror"
                        value="{{ old('marca') }}"
                        >

                        @foreach ($productBrand as $brand)
                            <option value="{{ $brand->id }}">{{$brand->description}}</option>    
                        @endforeach
                      </select> 

                    @error('marca')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="capacidad" class="mb-2 block uppercase text-gray-500 font-bold">
                        Capacidad
                    </label>
                    <select
                        id="capacidad"
                        name="capacidad"
                        class="border p-3 w-full rounded-lg @error('capacidad') border-red-500 @enderror"
                        value="{{ old('capacidad') }}"
                        >

                        @foreach ($productCapacity as $capacity)
                            <option value="{{ $capacity->id }}">{{$capacity->capacity}}</option>    
                        @endforeach
                      </select> 

                    @error('capacidad')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="color" class="mb-2 block uppercase text-gray-500 font-bold">
                        Color
                    </label>
                    <select
                        id="color"
                        name="color"
                        class="border p-3 w-full rounded-lg @error('color') border-red-500 @enderror"
                        value="{{ old('color') }}"
                        >

                        @foreach ($productColor as $color)
                            <option value="{{ $color->id }}">{{$color->description}}</option>    
                        @endforeach
                      </select> 

                    @error('color')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="engineSize" class="mb-2 block uppercase text-gray-500 font-bold">
                        Tamaño de motor
                    </label>
                    <select
                        id="engineSize"
                        name="engineSize"
                        class="border p-3 w-full rounded-lg @error('engineSize') border-red-500 @enderror"
                        value="{{ old('engineSize') }}"
                        >

                        @foreach ($productEngineSize as $engineSize)
                            <option value="{{ $engineSize->id }}">{{$engineSize->size}}</option>    
                        @endforeach
                      </select> 

                    @error('engineSize')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <input
                    type="submit"
                    value="Crear producto"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >


            </form>
        </div>
    </div>
    @endsection