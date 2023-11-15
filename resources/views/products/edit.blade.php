@extends('layouts.app')

@section('titulo')
    Editar Producto
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <!-- NOTA: La opción novalidate, desactiva las validaciones del explorador con HTML5 -->
            <form action="{{ route('products.update', $product->id) }}" method="POST" novalidate>
                @csrf @method('PATCH')
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
                            value="{{ old('tipoPuertas', $product->door_type ) }}"
                        >
                            {{ old('tipoPuertas', $product->door_type ) }}
                        </option>
                        <option 
                            value="{{ old('tipoPuertas', $product->door_type ) == 'Vidrio' ? 'Lamina' : 'Vidrio' }}"
                        >
                            {{ old('tipoPuertas', $product->door_type ) == 'Vidrio' ? 'Lamina' : 'Vidrio' }}
                        </option>
                    </select> 
                    
                    @error('tipoPuertas')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="idCliente" class="mb-2 block uppercase text-gray-500 font-bold">
                        Clientes
                    </label>
                    <select
                        id="idCliente"
                        name="idCliente"
                        class="border p-3 w-full rounded-lg @error('idCliente') border-red-500 @enderror"
                    >

                        @foreach ($clients as $client)
                            <option
                                value="{{ $client->id }}"
                                {{ old('idCliente', $product->id_client) == $client->id ? "selected" : ""  }}
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
                    <label for="marca" class="mb-2 block uppercase text-gray-500 font-bold">
                        Marca
                    </label>
                    <select
                        id="marca"
                        name="marca"
                        class="border p-3 w-full rounded-lg @error('marca') border-red-500 @enderror"
                    >

                        @foreach ($brands as $brand)
                            <option
                                value="{{ $brand->id }}"
                                {{ old('marca', $product->id_brand) == $brand->id ? "selected" : ""  }}
                            >
                                {{$brand->description}}
                            </option>    
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
                    >

                        @foreach ($capacities as $capacity)
                            <option
                                value="{{ $capacity->id }}"
                                {{ old('capacidad', $product->id_capacity) == $capacity->id ? "selected" : ""  }}
                            >
                                {{$capacity->capacity}}
                            </option>    
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
                    >

                        @foreach ($colors as $color)
                            <option
                                value="{{ $color->id }}"
                                {{ old('color', $product->id_color) == $color->id ? "selected" : ""  }}
                            >
                                {{$color->description}}
                            </option>    
                        @endforeach
                    </select> 

                    @error('color')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="tamanioMotor" class="mb-2 block uppercase text-gray-500 font-bold">
                        Tamaño de motor
                    </label>
                    <select
                        id="tamanioMotor"
                        name="tamanioMotor"
                        class="border p-3 w-full rounded-lg @error('tamanioMotor') border-red-500 @enderror"
                    >

                        @foreach ($enginesSize as $engineSize)
                            <option
                                value="{{ $engineSize->id }}"
                                {{ old('tamanioMotor', $product->id_engine_size) == $engineSize->id ? "selected" : ""  }}
                            >
                                {{$engineSize->size}}
                            </option>    
                        @endforeach
                    </select> 

                    @error('tamanioMotor')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="tipoDeGas" class="mb-2 block uppercase text-gray-500 font-bold">
                        Tipo de gas
                    </label>
                    <select
                        id="tipoDeGas"
                        name="tipoDeGas"
                        class="border p-3 w-full rounded-lg @error('tipoDeGas') border-red-500 @enderror"
                    >

                        @foreach ($gasesType as $gasType)
                            <option
                                value="{{ $gasType->id }}"
                                {{ old('tipoDeGas', $product->id_gas_type) == $gasType->id ? "selected" : ""  }}
                            >
                                {{$gasType->description}}
                            </option>    
                        @endforeach
                    </select> 

                    @error('tipoDeGas')
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