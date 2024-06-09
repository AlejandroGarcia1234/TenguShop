<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard')
    ],
    [
        'name' => 'Portadas',
        'route' => route('admin.covers.index')
        
    ],
    [
        'name' => 'Añadir',
    ]

]">

    <form action="{{route('admin.covers.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <figure class="relative mb-4">
            <div class="absolute top-8 right-8">
                <label class="flex items-center px-4 py-2 rounded-lg bg-white cursor-pointer">
                    <i class="fas fa-camera mr-2"></i>
                        Actualizar imagen
    
                    <input type="file" class="hidden" accept="image/*" name="image" onchange="previewImage(event, '#imgPreview')">
                </label>
            </div>
            <img src="{{asset('img/1.png')}}" alt="Portada" class="aspect-[3/1] w-full object-cover object-center" id="imgPreview">
        </figure>

        <x-validation-errors class="mb-4"/>

        <div class="mb-4">
            <x-label>
                Título
            </x-label>
            <x-input class="w-full" value="{{old('title')}}" name="title" placeholder="Por favor ingrese el título de la portada"/>
        </div>

        <div class="mb-4">
            <x-label>
                Fecha de inicio
            </x-label>
            <x-input type="date" class="w-full" value="{{old('start_at', now()->format('Y-m-d'))}}" name="start_at"/>
        </div>

        <div class="mb-4">
            <x-label>
                Fecha fin (opocional)
            </x-label>
            <x-input type="date" class="w-full" value="{{old('end_at')}}" name="end_at"/>
        </div>
        
        <div class="mb-4 flex space-x-2">

            <label>
                <x-input type="radio" name="is_active" value="1" checked/>
                Activo
            </label>

            <label class="ml-1">
                <x-input type="radio" name="is_active" value="0"/>
                Inactivo
            </label>

        </div>

        <div class="flex justify-end">
            <x-button>
                Crear Portada
            </x-button>
        </div>

    </form>

    @push('js')
        <script>
            function previewImage(event, querySelector){

                //Recuperamos el input que desencadeno la acción
                const input = event.target;

                //Recuperamos la etiqueta img donde cargaremos la imagen
                $imgPreview = document.querySelector(querySelector);

                // Verificamos si existe una imagen seleccionada
                if(!input.files.length) return

                //Recuperamos el archivo subido
                file = input.files[0];

                //Creamos la url
                objectURL = URL.createObjectURL(file);

                //Modificamos el atributo src de la etiqueta img
                $imgPreview.src = objectURL;
                            
                }
        </script>
        
    @endpush

</x-admin-layout>