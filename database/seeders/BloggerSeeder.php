<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('bloggers')->insert([
                'blogger_name' => $faker->name(),
                'blogger_email' => $faker->unique()->safeEmail(),
                'blogger_type' => $faker->randomElement(["admin", "normal"]),
                'created_at' => $faker->dateTimeBetween('-30 days', '+0 days'),
                'updated_at' => $faker->dateTimeBetween('-30 days', '+0 days'),
            ]);
        }
    }
}
