<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sex_choices')->insert([
            ['id'=>1, 'sex'=>'Female'],
            ['id'=>2, 'sex'=>'Male']
        ]);
    }
}
