<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $role=['Freelance','Customer'];
                  for($i=0;$i<2;$i++)
                   {
                        DB::table('roles')->insert
                        ([
                            'name' =>$role[$i],
                        ]);
                   }
    }
}