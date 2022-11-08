<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = ['In Progress', 'Finish', 'Created', 'Expirated'];
        for ($i = 0; $i < 4; $i++) {
            DB::table('states')->insert([
                'name' => $state[$i],
            ]);
        }
    }
}
