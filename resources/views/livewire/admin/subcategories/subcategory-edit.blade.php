<div>

    <form wire:submit="save">
    
        <div class="card">
    
            <x-validation-errors class="mb-4"></x-validation-errors>
    
            <div class="mb-4">
                <x-label class="mb-2">
                    Familias
                </x-label>
    
                <x-select wire:model.live="subcategoryEdit.family_id">
    
                    <option value="" disabled>
                        Seleccione una familia
                    </option>
    
                    @foreach ($families as $family)
                        <option value="{{ $family->id }}">{{ $family->name }}</option>
                    @endforeach
    
                </x-select>
            </div>
    
                <div class="mb-4">
                    <x-label class="mb-2">
                        Categorías
                    </x-label>
    
                    <x-select name="category_id" wire:model="subcategoryEdit.category_id">
    
                        <option value="" disabled>
                            Seleccione una categoría
                        </option>
    
                        @foreach ($this->categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                        @endforeach
    
                    </x-select>
    
                </div>
    
                <div class="mb-4">
    
                <x-label class="mb-2">
                    Nombre
                </x-label>
                <x-input class="w-full" placeholder="Ingrese el nombre de la categoría" wire:model="subcategoryEdit.name"/>
            </div>
    
            <div class="flex justify-end">

                <x-danger-button onclick="confirmDelete()">
                    Eliminar
                </x-danger-button>

                <x-button class="ml-2">
                    Actualizar
                </x-button>
            </div>
    
        </div>
    
    </form>

    <form action="{{route('admin.subcategories.destroy', $subcategory)}}" method="POST" id="delete-form">

        @csrf
    
        @method('DELETE')
    
    </form>

    @push('js')

    <script>
        function confirmDelete(){

            Swal.fire({
                title: "¿Estás seguro?",
                text: "¡No podrás revertir la acción!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Confirmar!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
            if (result.isConfirmed) {
                /*Swal.fire({
                    title: "¡Eliminado!",
                    text: "Su ha elimando un elemento",
                    icon: "success"
                });*/

                document.getElementById('delete-form').submit();
            }
            });
        }
    </script>
    
@endpush
    
</div>
    