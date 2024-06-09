<x-app-layout>
    <x-container class="mt-12">
        <div class="grid grid-cols-3 gap-6">
            
            <div class="col-span-2">
                @livewire('shipping-addresses')
            </div>

            <div class="col-span-1">
                
                <div class="mb-4 bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-purple-600 text-white p-4">
                        <p class="font-semibold">
                            Resumen de compra ({{Cart::instance('shopping')->count()}})
                        </p>
                    </div>

                    <div class="p-4 text-gray-600">
                        <ul>
                            @foreach (Cart::content() as $item)
                                <li class="flex items-center space-x-4">
                                    <figure class="shrink-0">
                                        <img class="h-12 aspect-square" src="{{$item->options->image}}" alt="">
                                    </figure>
                                    <div class="flex-1">
                                        <p class="text-sm">
                                            {{$item->name}}
                                        </p>
                                        <p>
                                            {{$item->price}} €
                                        </p>
                                    </div>
                                    <div class="shrink-0">
                                        <p>
                                            {{$item->qty}}
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <hr class="my-4">

                        <div class="flex justify-between">
                            <p class="text-lg">
                                Total
                            </p>
                            <p>
                                {{Cart::subtotal()}} €
                            </p>
                        </div>
                    </div>
                </div>

                <a href="" class="btn btn-purple text-center">
                    Siguiente
                </a>

            </div>

        </div>
    </x-container>
</x-app-layout>