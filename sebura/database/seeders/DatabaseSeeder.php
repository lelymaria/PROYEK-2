<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;
use App\Models\Role;

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
        Login::create([
            'username' => "lely",
            'password' => bcrypt("lely"),
            'role' => 1
        ]);

        Role::create([
            'role_name' => 'Admin'
        ]);
    }
}
