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
            RoleSeeder::class,
        ]);
        // $this->call([
        //     requirementSeeder::class,
        // ]);

        $this->call([
            StatusSeeder::class,
        ]);
        $this->call([
            categorySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // Role::factory()
        // ->count(3)
        // ->hasPosts(1)
        // // ->create();
    }
}
