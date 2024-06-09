<x-container>
    <div class="card">

        <div class="grid md:grid-cols-2 gap-6">

            <div class="col-span-1">
                <figure class="mb-2">
                    <img src="{{$product->image}}" class="aspect-[16/9 w-full object-cover object-center]" alt="">
                </figure>

                <div class="text-sm">
                    {{$product->description}}
                </div>
            </div>

            <div class="col-span-1">

                <h1 class="text-xl text-gray-600 mb-2">
                    {{$product->name}}
                </h1>

                <p class="font-semibold text-2xl text-gray-600 mb-4">
                    {{$product->price}} €
                </p>

                <div class="flex space-x-6 items-center mb-6"
                 x-data="{
                    qty: @entangle('qty')
                 }">
                    <button class="btn btn-gray" x-on:click= "qty = qty - 1" x-bind:disabled="qty == 1">
                        -
                    </button>

                    <span x-text="qty" class="inline-block w-2 text-center"></span>

                    <button class="btn btn-gray" x-on:click= "qty = qty + 1">
                        +
                    </button>
                </div>

                <button class="btn btn-purple w-full mb-6"
                    wire:click="add_to_cart"
                    wire:loading.attr="disabled">
                    Agregar al carrito
                </button>

                <div class="text-gray-700 flex items-center space-x-4">
                    <i class="fa-solid fa-truck-fast text-2xl"></i>

                    <p>Envíos a domicilio</p>
                </div>

            </div>

        </div>

    </div>
</x-container>
