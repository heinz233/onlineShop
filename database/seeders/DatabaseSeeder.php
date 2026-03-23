<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::create([
            'name'=>'Admin',
        ]);
         Role::create([
                'name'=> 'User',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => '233ateng@gmail.com',
            'phone'=> '0781544283',
            'delivery_address'=> 'N/A',
            'role_id'=> 1,
            'password'=> Hash::make('Qwerty1234'),
                ]);

        User::create([
            'name' => 'User',
            'email' => 'ateng.heinz@gmail.com',
            'phone'=> '0701585836',
            'delivery_address'=> 'N/A',
            'role_id'=> 2,
            'password'=> Hash::make('Qwerty1234'),
                ]);
    }
}
