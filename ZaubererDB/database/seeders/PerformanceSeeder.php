<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Peroformance;
use Faker\Factory as Faker;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
            foreach(range(1, 6) as $index){
            DB::table('performance')->insert([
                'name' => $faker->city,
            ]);
        }
    }
}
