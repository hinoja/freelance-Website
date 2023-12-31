<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Mobile Developers', 'Designers Creatives', 'Writers', 'Virtual Assistants', 'Accountants Consultants', 'Customer Service Agents', 'Sales Marketing Experts'];
        for ($i = 0; $i < 7; $i++) {
            DB::table('categories')->insert([
                'name' => $categories[$i],
            ]);
        }
    }
}
