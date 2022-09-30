<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmbalmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('embalm_choices')->insert([
            ['id'=>1, 'embalm'=>'Body Embalmed'],
            ['id'=>2, 'embalm'=>'Not Embalmed'],
            ['id'=>3, 'embalm'=>'For Injection Only'],
        ]);
    }
}
