<div class="mx-2 md:mx-[60px] mt-[20px]">
    <!-- Cabecera -->
    <div class="w-full h-full py-4 bg-terciario shadow-lg rounded-md overflow-x-hidden border-2 border-color-borde">
        <div class="mx-[10px] md:mx-[50px] justify-between">
            <p class="text-fuente text-[40px] mb-[20px]">Editar Lote</p>
        </div>
    </div>

    <form wire:submit.prevent="submit" class="bg-terciario p-5 rounded mt-5">
        @csrf
        <!-- Información general -->
        <h3 class="text-lg font-semibold text-fuente mb-4">Información General</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <!-- Campos de información general -->
            @foreach (['lote', 'manzana', 'catastral', 'superficie', 'precio'] as $field)
                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-bold mb-2" for="{{ $field }}">
                        {{ ucfirst($field) }}:
                    </label>
                    <input wire:model.lazy="{{ $field }}" id="{{ $field }}" type="text"
                        placeholder="{{ ucfirst($field) }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-200 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        @if ($field == 'lote') required readonly disabled @endif>                      
                        @error($field)
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror

                </div>
            @endforeach
        </div>

        <!-- Medidas y colindancias -->
        <div class="mb-6">
            <h3 class="text-lg text-fuente font-semibold mb-4">Medidas y colindancias</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Campos de medidas y colindancias -->
                @foreach ([
                    'norte' => 'Norte',
                    'colindancia_norte_id' => 'Colindancia Norte',
                    'sur' => 'Sur',
                    'colindancia_sur_id' => 'Colindancia Sur',
                    'este' => 'Este',
                    'colindancia_este_id' => 'Colindancia Este',
                    'oeste' => 'Oeste',
                    'colindancia_oeste_id' => 'Colindancia Oeste',
                    'noreste' => 'Noreste',
                    'colindancia_noreste_id' => 'Colindancia Noreste',
                    'sureste' => 'Sureste',
                    'colindancia_sureste_id' => 'Colindancia Sureste',
                    'suroeste' => 'Suroeste',
                    'colindancia_suroeste_id' => 'Colindancia Suroeste'
                    'noroeste' => 'Noroeste',
                    'colindancia_noroeste_id' => 'Colindancia Noroeste',
                ] as $field => $label)
                    <div class="mb-4">
                        <label class="block text-gray-300 text-sm font-bold mb-2" for="{{ $field }}">
                            {{ ucfirst($label) }}:
                        </label>
                        @if (strpos($field, 'colindancia_') !== false)
                            <select wire:model.lazy="{{ $field }}" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="0" disabled selected>Selecciona un lote</option>
                                @foreach ($lotes as $lote)
                                    <option value="{{ $lote->id }}">{{ $lote->lote }} - {{ $lote->catastral }}</option>
                                @endforeach
                            </select>
                        @else
                            <input wire:model.lazy="{{ $field }}" type="text"
                                placeholder="{{ ucfirst($label) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @endif
                        @error($field)
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                @endforeach
            </div>
        </div>

        <p class="text-fuente ml-[4px] mb-[10px]">Opciones</p>
        <div class="flex gap-2 mt-6">
            <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">
                Guardar
            </button>
            <button class="btn-primary" wire:click="cancelar">Cancelar</button>
        </div>
    </form>
</div>

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('success', event => {
            Swal.fire({
                position: 'center-middle',
                icon: 'success',
                title: 'Lote Creado con Exito',
                showConfirmButton: false,
                text: 'EL lote se ha creado correctamente',
                timer: 1500,
            });
        });
    </script>
@endsection
