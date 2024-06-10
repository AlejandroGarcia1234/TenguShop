<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');

        // User::factory(10)->create();

    //    User::factory()->create([
    //        'name' => 'Test User',
    //        'email' => 'test@example.com',
    //    ]);

        $this->call([
            FamilySeeder::class,
            OptionSeeder::class,
            UserSeeder::class,
        ]);

        Product::factory(10)->create();

    }
}
