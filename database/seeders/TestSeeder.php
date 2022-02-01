<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            for ($i = 0; $i < 1000;  $i++){

                DB::table('test')->insert([

                    'name' => $faker->name(),
                    'position' => $faker->text($maxNbChars = 15),
                    'description' => $faker->realTextBetween($minNbChars = 100 , $maxNbChars= 200),
                    'address' => $faker->address(),
                ]);
            }


    }
}
