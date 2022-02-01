<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 500; $i++) {
            DB::table('posts')->insert([
                'post_title' => $faker->title($maxNbChars = 100),
                'post_des' => $faker->realText($maxNbChars = 200),
                'post_owner' => $faker->numberBetween(1, 100),
                'created_at' => $faker->dateTimeBetween('-30 days', '+0 days'),
                'updated_at' => $faker->dateTimeBetween('-30 days', '+0 days'),
            ]);
        }
    }
}
