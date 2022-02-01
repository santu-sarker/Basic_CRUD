<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10000; $i++) {
            DB::table('comments')->insert([
                'comment_des' => $faker->realText($maxNbChars = 200),
                'comment_owner' => $faker->numberBetween(1, 500),
                'created_at' => $faker->dateTimeBetween('-30 days', '+0 days'),
                'updated_at' => $faker->dateTimeBetween('-30 days', '+0 days'),
            ]);
        }
    }
}
