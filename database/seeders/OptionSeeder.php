<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            [
                'name' => 'Talla',
                'type' => 1,
                'features' => [
                    [
                        'value' => 'S',
                        'description' => 'Small'
                    ],
                    [
                        'value' => 'M',
                        'description' => 'Medium'
                    ],
                    [
                        'value' => 'L',
                        'description' => 'Large'
                    ],
                    [
                        'value' => 'XL',
                        'description' => 'Extra Large'
                    ],
                ],
            ],
            [
                'name' => 'Color',
                'type' => 2,
                'features' => [
                    [
                        'value' => 'S',
                        'description' => 'Small'
                    ],
                    [
                        'value' => 'M',
                        'description' => 'Medium'
                    ],
                    [
                        'value' => 'L',
                        'description' => 'Large'
                    ],
                    [
                        'value' => 'XL',
                        'description' => 'Extra Large'
                    ],
                ],
            ],
            [
                'name' => 'Sexo',
                'type' => 1,
                'features' => [
                    [
                        'value' => 'm',
                        'description' => 'masculino'
                    ],
                    [
                        'value' => 'f',
                        'description' => 'femenino'
                    ],
                ],
            ],

        ];

        foreach ($options as $option) {
            $optionModel = Option::create([
                'name' => $option['name'],
                'type' => $option['type'],
            ]);

            foreach ($option['features'] as $feature) {
                $optionModel->features()->create([
                    'value' => $feature['value'],
                    'description' => $feature['description'],
                ]);
            }
        }
    }
}
