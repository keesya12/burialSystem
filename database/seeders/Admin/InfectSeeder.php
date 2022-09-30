<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InfectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infect_choices')->insert([
            ['id'=>1, 'infect'=>'Infectious'],
            ['id'=>2, 'infect'=>'Non-Infectious']
        ]);
    }
}
