<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por tu pedido</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('https://source.unsplash.com/1600x900/?thank-you');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-md w-full bg-white shadow-md rounded-lg overflow-hidden">
        <div class="background-image h-48 flex items-center justify-center">
            <div class="bg-black bg-opacity-50 w-full h-full flex items-center justify-center">
                <h1 class="text-white text-4xl font-bold">¡Gracias!</h1>
            </div>
        </div>
        <div class="p-6 text-center">
            <h2 class="text-2xl font-semibold mb-4">Tu pedido ha sido procesado con éxito</h2>
            <p class="text-gray-600 mb-6">Gracias por confiar en nosotros. Hemos recibido tu pedido y comenzaremos a procesarlo de inmediato. Te notificaremos cuando tu pedido haya sido enviado.</p>
            <a href="{{ url('/') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition duration-300">Volver al inicio</a>
        </div>
    </div>
</body>
</html>

