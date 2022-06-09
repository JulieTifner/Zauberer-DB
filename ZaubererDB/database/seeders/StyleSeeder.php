<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use App\Models\Style;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class StyleSeeder extends Seeder
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
            DB::table('styles')->insert([
                'type' => $faker->lastName,
            ]);
        }
    }
}
