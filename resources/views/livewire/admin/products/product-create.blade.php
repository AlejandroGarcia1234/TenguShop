<div class="card">

    <div class="mb-4" >
        <x-label class="mb-1">
            Código
        </x-label>

        <x-input wire:model="product.sku" class="w-full" placeholder="Por favor ingrese el código del producto"/>

    </div>

    <div class="mb-4">
        <x-label class="mb-1">
            Nombre
        </x-label>

        <x-input wire:model="product.name" class="w-full" placeholder="Por favor ingrese el nombre del producto"/>
    </div>

    <div class="mb-4">
        <x-label class="mb-1">
            Descripción
        </x-label>

        <x-textarea wire:model="product.description" class="w-full" placeholder="Por favor ingrese la descripción del producto">
        </x-textarea>
    </div>

    <div class="mb-4">
        <x-label class="mb-1">
            Familias
        </x-label>

        <x-select wire:model.live="family_id">

            <option value="" disabled>Seleccione una familia</option>

            @foreach ($families as $family)
                <option value="{{$family->id}}">{{$family->name}}</option>
            @endforeach
        </x-select>

    </div>

    <div class="mb-4">

        <x-label class="mb-1">
            Categorías
        </x-label>

        <x-select wire:model.live="category_id">

            <option value="" disabled>Seleccione una categoría</option>

            @foreach ($this->categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </x-select>
    </div>

    <div class="mb-4">

        <x-label class="mb-1">
            Subcategorías
        </x-label>

        <x-select wire:model.live="product.subcategory_id">

            <option value="" disabled>Seleccione una subcategoría</option>

            @foreach ($this->subcategories as $subcategory)
                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
            @endforeach
        </x-select>
    </div>
    
</div>
