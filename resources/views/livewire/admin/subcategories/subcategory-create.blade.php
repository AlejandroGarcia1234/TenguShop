<form>

    <div class="card">

        <x-validation-errors class="mb-4"></x-validation-errors>

        <div class="mb-4">

            {{-- <div class="mb-4">
                <x-label class="mb-2">
                    Categorías
                </x-label>

                <x-select name="category_id">

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                    @endforeach

                </x-select>

            </div> --}}

            <x-label class="mb-2">
                Nombre
            </x-label>
            <x-input class="w-full" placeholder="Ingrese el nombre de la categoría" />
        </div>

        <div class="flex justify-end">
            <x-button>
                Guardar
            </x-button>
        </div>

    </div>

</form>
