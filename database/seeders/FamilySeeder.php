<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Family;
use App\Models\Category;
use App\Models\Subcategory;


class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $families = [
            'Biblioteca' => [
                'Cómic' => [
                    'Tapa blanda',
                    'Tapa dura',
                ],
                'Manga' => [
                    'Tapa blanda',
                    'Tapa dura',
                ],
            ],
            'Figuras' => [
                'MadHouse' => [
                    'P.V.C',
                    'Resina',
                ],
                'Funko Pop' => [
                    'Normal',
                    'Especial',
                ],
            ],
            'Pósters y Arte' => [
                'Póster' => [
                    'Cómic',
                    'Videojeugo',
                ],
                'Lámina' => [
                    'Artesanal',
                    'IA Art',
                ],
            ],
        ];

        foreach ($families as $family => $categories) {

            $family = Family::create(['name' => $family,]);
            
            foreach ($categories as $category => $subcategories) {
                $category = Category::create(['name' => $category, 'family_id' => $family->id]);
                
                foreach ($subcategories as $subcategory) {
                    Subcategory::create(['name' => $subcategory, 'category_id' => $category->id]);
                }
            }
        }
    }
}
