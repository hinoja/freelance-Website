<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            tagSeeder::class,
            RoleSeeder::class,
            StatusSeeder::class,
            categorySeeder::class,
            StateSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // Role::factory()
        // ->count(3)
        // ->hasPosts(1)
        // // ->create();
    }
}
