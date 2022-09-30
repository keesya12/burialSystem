<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Admin\EmbalmSeeder;
use Database\Seeders\Admin\DispoSeeder;
use Database\Seeders\Admin\InfectSeeder;
use Database\Seeders\Admin\SexSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            SexSeeder::class,
            InfectSeeder::class,
            EmbalmSeeder::class,
            DispoSeeder::class
        ]);
    }
}
