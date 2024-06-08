<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => 'Portadas',
    ],
]">

    <x-slot name="action">
        <a class="btn btn-blue" href="{{ route('admin.covers.create') }}">
            Añadir
        </a>
    </x-slot>

    <ul>
        @foreach ($covers as $cover)
            <li class="bg-white rounded-lg shadow-lg lg:flex overflow-hidden mb-2">
                <img src="{{ $cover->image }}" alt="" class="w-64 aspect-[3/1] object-cover object-center">

                <div class="p-4 flex-1 flex justify-between items-center">
                    <div>
                        <h1 class="font-semibold">
                            {{ $cover->title }}
                        </h1>

                        <p>
                            @if($cover->is_active)
                            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">Activo</span>
                        
                            @else
                            <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">Inactivo</span>
                            @endif
                        </p>
                    </div>
                    <div>
                        <p class="text-sm font-bold">
                            Fecha de inicio
                        </p>
                        <p>
                            {{ $cover->start_at->format('d/m/Y') }}
                        </p>
                    </div>
                    <div>
                        <p class="text-sm font-bold">
                            Fecha de finalización
                        </p>
                        <p>
                            {{ $cover->end_at ? $cover->end_at->format('d/m/Y') : '-'}}
                        </p>
                    </div>
                    <div>
                        <a class="btn btn-blue" href="{{route('admin.covers.edit', $cover)}}">
                            Editar
                        </a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

</x-admin-layout>
