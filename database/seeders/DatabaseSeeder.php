<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create(['name' => 'Administrator']);
        Role::create(['name' => 'People']);

        User::create([
            'role_id' => 1,
            'email' => 'admin@example.com',
            'name' => 'admin',
            'password' => Hash::make('admin')
        ]);

        User::create([
            'role_id' => 2,
            'email' => 'people@example.com',
            'name' => 'people',
            'password' => Hash::make('people')
        ]);
    }
}
