<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard')
    ],
    [
        'name' => 'Portadas',
        
    ]
]">

    <x-slot name="action">
        <a class="btn btn-blue" href="{{route('admin.covers.create')}}">
            Añadir
        </a>
    </x-slot>

</x-admin-layout>