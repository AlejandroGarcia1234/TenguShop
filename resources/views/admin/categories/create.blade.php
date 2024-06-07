<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Categorías',
        'route' => route('admin.categories.index'),
    ],
    [
        'name' => 'Crear',
    ],
]">

    <form action="{{ route('admin.categories.store') }}" method="POST">

        @csrf

        <div class="card">

            <x-validation-errors class="mb-4"></x-validation-errors>

            <div class="mb-4">

                <div class="mb-4">
                    <x-label class="mb-2">
                        Familia
                    </x-label>

                    <x-select name="family_id">

                        @foreach ($families as $family)
                            <option value="{{ $family->id }}" @selected(old('family_id') == $family->id)>{{ $family->name }}</option>
                        @endforeach

                    </x-select>

                </div>

                <x-label class="mb-2">
                    Nombre
                </x-label>
                <x-input class="w-full" placeholder="Ingrese el nombre de la categoría" name="name"
                    value="{{ old('name') }}" />
            </div>

            <div class="flex justify-end">
                <x-button>
                    Guardar
                </x-button>
            </div>

        </div>

    </form>

</x-admin-layout>
