<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Variant;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

Route::get('families/{family}', [FamilyController::class, 'show'])->name('families.show');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('subcategories/{subcategory}', [SubcategoryController::class, 'show'])->name('subcategories.show');

// Rutas protegidas por middleware de autenticación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Incluir las rutas de admin sin duplicar el prefijo
    require base_path('routes/admin.php');
});

Route::get('prueba', function () {

    $product =  Product::find(10);

    $features = $product->options->pluck('pivot.features');

    $combinaciones = generarCombinaciones($features);

    $product->variants()->delete();

    foreach ($combinaciones as $combinacion){

        $variant = Variant::create([
            'product_id' => $product->id,
        ]);

        $variant->features()->attach($combinacion);

    }

    return "Variantes creadas";
});

function  generarCombinaciones($arrays, $indice = 0, $combinacion = [])

{

    if ($indice == count($arrays)){

        return [$combinacion];

    }

    $resultado= [];

    foreach ($arrays[$indice] as $item){

        $combinacionesTemporal = $combinacion;

        $combinacionesTemporal[] = $item['id'];

       $resultado = array_merge($resultado, generarCombinaciones($arrays, $indice + 1, $combinacionesTemporal));

    }

    return  $resultado;

}