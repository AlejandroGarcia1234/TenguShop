<x-app-layout>
    <div class="-mb-16 text-gray-700" x-data="{ pago: 1 }">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="col-span-1 bg-white">
                <div class="lg:max-w-[40rem] py-12 px-4 lg:pr-8 sm:pl-6 lg:pl-8">
                    <h1 class="text-2xl font-semibold mb-2">
                        Pago
                    </h1>
                    <div class="shadow rounded-lg overflow-hidden border border-gray-200">
                        <ul class="divide-y divide-gray-400">
                            <li>
                                <label class="p-4 flex items-center">
                                    <input type="radio" value="1" x-model="pago">
                                    <span class="ml-2">
                                        Tarjeta de débito/crédito
                                    </span>
                                    <img src="https://codersfree.com/img/payments/credit-cards.png" class="h-6 ml-auto">
                                </label>
                                <div class="p-4 bg-gray-100 text-center" x-show="pago == 1">
                                    <i class="fa-regular fa-credit-card text-9xl"></i>
                                    <p class="mt-2">
                                        Tras hacer click en "Pagar ahora" se abrirá el checkout de Niubiz para completar tu compra de forma segura
                                    </p>
                                </div>
                            </li>
                            <li>
                                <label class="p-4 flex items-center">
                                    <input type="radio" value="2" x-model="pago">
                                    <span class="ml-2">
                                        Depósito Bancario
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="lg:max-w-[40rem] py-12 px-4 lg:pl-8 sm:pr-6 lg:pr-8">
                    <p>
                        <!-- Aquí puedes agregar contenido adicional para la segunda columna -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
