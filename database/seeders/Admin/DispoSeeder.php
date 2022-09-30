<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DispoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dispo_choices')->insert([
            ['id'=>1, 'dispo'=>'Burial'],
            ['id'=>2, 'dispo'=>'Cremation']
        ]);
    }
}
