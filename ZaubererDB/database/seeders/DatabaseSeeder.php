<?php

namespace Database\Seeders;

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
       
        $this->call(StyleSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(PerformanceSeeder::class);
        $this->call(TrickSeeder::class);
       

    }
}
