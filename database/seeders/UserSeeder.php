<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create(['name' => 'admin']);

        User::create([
            'name' => 'Admin User',
            'last_name' => 'Admin Last Name',
            'document_type' => '1',
            'document_number' => '123456789',
            'email' => 'admin@example.com',
            'phone' => '123456789',
            'password' => Hash::make('password'),
        ])->assignRole('admin');
    }
}
