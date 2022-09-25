<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $status = ['Full-Time', 'Part-Time','Writers','Internship','Freelance'];
        for ($i = 0; $i <5; $i++) {
            DB::table('statuses')->insert([
                'name' => $status[$i],
            ]);
        }
    }
}
