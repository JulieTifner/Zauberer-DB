<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

class TrickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $faker = Faker::create();

        $styleID = DB::table('styles')->pluck('id');
        $performanceID = DB::table('performance')->pluck('id');
        $storageID = DB::table('person')->pluck('id');
        $actID = DB::table('person')->pluck('id');

        foreach(range(1, 20) as $index){
            DB::table('tricks')->insert([
                'trickname' => $faker->streetSuffix(),
                'description' => Str::random(10),
                'style_id' => $faker->randomElement($styleID),
                'performance_id' => $faker->randomElement($performanceID),
                'storage_person_id' => $faker->randomElement($storageID),
                'act_person_id' => $faker->randomElement($actID),
                'time' => rand(5, 20),
                'rating' => rand(1, 4),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                
            
            ]);

        }
 
    }
}
