<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard')
    ],
    [
        'name' => 'Categorías',
        'route' => route('admin.categories.index')
        
    ],
    [
        'name' => $category->name,
    ]
]">

<form action="{{route('admin.categories.update', $category)}}" method="POST">

    @csrf

    @method('PUT')

    <div class="card">

        <x-validation-errors class="mb-4"></x-validation-errors>

    <div class="mb-4">

        <div class="mb-4">
            <x-label class="mb-2">
                Familia
            </x-label>

            <x-select name="family_id">

                @foreach ($families as $family)
                <option value="{{$family->id}}" @selected(old('family_id', $category->family_id) == $family->id)>{{$family->name}}</option>
                @endforeach

            </x-select>

        </div>

        <x-label class="mb-2">
            Nombre
        </x-label>
        <x-input class="w-full" placeholder="Ingrese el nombre de la categoría" name="name" value="{{old('name', $category->name)}}" />
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

<form action="{{route('admin.categories.destroy', $category)}}" method="POST" id="delete-form">

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


</x-admin-layout>