@extends('layouts.app')

@section('titulo')
    Editar Mantenimiento
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <!-- NOTA: La opción novalidate, desactiva las validaciones del explorador con HTML5 -->
            <form action="{{ route('maintenance.update', $maintenance->id) }}" method="POST" novalidate>
                @csrf @method('PATCH')
                <div class="mb-5">
                    <label for="nombreCliente" class="mb-2 block uppercase text-gray-500 font-bold">
                        Cliente
                    </label>
                    <input
                        id="nombreCliente"
                        name="nombreCliente"
                        type="text"
                        class="border p-3 w-full rounded-lg bg-neutral-100 @error('nombreCliente') border-red-500 @enderror"
                        value="{{  $client->name . " " . $client->last_name }}"
                        readonly="readonly"
                    />
                    
                    @error('numeroSerie')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="numeroSerie" class="mb-2 block uppercase text-gray-500 font-bold">
                        Producto
                    </label>
                    <input
                        id="numeroSerie"
                        name="numeroSerie"
                        type="text"
                        class="border p-3 w-full rounded-lg bg-neutral-100 @error('numeroSerie') border-red-500 @enderror"
                        value="{{ $maintenance->getProduct->serial_number }}"
                        readonly="readonly"
                    />
                    
                    @error('numeroSerie')
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

                        @foreach ($maintenanceStatus as $status)
                            <option
                                value="{{ $status->id }}"
                                {{ old('estatus', $maintenance->id_status_maintenance) == $status->id ? "selected" : ""  }}
                            >
                                {{$status->description}}
                            </option>
                        @endforeach
                      </select> 

                    @error('estatus')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="observacion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Observaciones
                    </label>
                    <textarea
                        id="observacion"
                        name="observacion"
                        rows="12" 
                        class="block p-2.5 w-full text-sm text-gray-900 bg-neutral-100 rounded-lg border
                            border-gray-300"
                        readonly="readonly"
                    >
                    {{ $maintenance->observation }}
                    </textarea>
                    
                    @error('observacion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <input
                    type="submit"
                    value="Editar mantenimiento"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >


            </form>
        </div>
    </div>
        
@endsection