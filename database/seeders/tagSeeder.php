<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = ['php', 'C#', 'C++', 'Maths', 'Anglais', 'python', 'management', 'maintenance', 'Visual Basic', 'javascript', 'Flask', 'Django'];
        for ($i = 0; $i < 12; $i++) {
            DB::table('tags')->insert([
                'name' => $tag[$i],
            ]);
        }
    }
}
