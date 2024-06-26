<div class="bg-white py-12">
    <x-container class="md:flex px-4">
        {{-- <aside class="w-52 flex-shrink-0 mr-8">
            <ul class="space-y-4">
                @foreach ($options as $option)
                    <li x-data="{
                        open: true;
                     }">
                       <button class="px-4 py-2 bg-gray-200 w-full text-left text-gray-700 flex justify-between items-center" x-on:click="open = !open">
                        {{ $option->name}}

                        <i class="fa-solid fa-angle-down" x-bind:class="{'fa-angle-down' : open, 'fa-angle-up' : !open,}"></i>
                       </button>

                        <ul class="mt-2 space-y-2" x-show="open">
                            @foreach ($option->features as $feature)
                                <li>
                                    <label class="inline-flex items-center">
                                        <x-checkbox class="mr-2"/>
                                        {{ $feature->ndescription }}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </aside> --}}

        <div class="md:flex-1">

            <div class="flex items-center">
                <span class="mr-2">
                    Ordenar por:
                </span>

                <x-select wire:model.live="orderBy">
                    <option value="1">Precio: Mayor a menor</option>
                    <option value="2">Precio: Menor a mayor</option>
                </x-select>

            </div>

            <hr class="my-4">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @foreach ($products as $product)
    
                <article class="bg-white shadow rounded overflow-hidden">
                    <img src="{{$product->image}}" class="w-full h-48 object-cover object-center">
                
                    <div class="p-4">
                        <h1 class="text-lg font-bold text-gray-700 line-clamp-2 min-h-[56px] mb-2">
                            {{$product->name}}
                        </h1>
    
                        <p class="text-gray-600 mb-4">
                            {{$product->price}} €
                        </p>
    
                        <a href="{{route('products.show', $product)}}" class="btn btn-purple">
                            Ver más
                        </a>
                    </div>
                
                </article>
    
                @endforeach
    
            </div>

            <div class="mt-8">
                {{$products->links()}}
            </div>

        </div>

    </x-container>
</div>
