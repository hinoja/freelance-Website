<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class requirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $requirements = ['PHP', 'Javascript', 'Java', 'C++', 'Visual Basic', 'Analyse', 'Management', 'C#', 'laravel', 'React Js', 'Vue Js', 'Angular'];
        for ($i = 0; $i < 12; $i++) {
            DB::table('requirements')->insert([
                'name' => $requirements[$i],
            ]);
        }
    }
}
