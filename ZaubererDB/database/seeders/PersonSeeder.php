<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Person;
use Faker\Factory as Faker;

class PersonSeeder extends Seeder
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
            DB::table('person')->insert([
                'name' => $faker->name,
                'firstname' => $faker->name,
                'street' => $faker->streetName,
                'nr' => rand(1,100),
                'email' => $faker->name.'@gmail.com',
                'website' => Str::random(10),
                'phone' => $faker->phoneNumber,
            
            ]);
        }
    }
}
