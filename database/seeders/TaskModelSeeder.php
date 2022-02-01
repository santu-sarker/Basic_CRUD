<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskModelSeeder extends Seeder
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
            DB::table('task_models')->insert([

                'title' => $faker->text($maxNbChars = 40),
                'description' => $faker->text(),

            ]);
        }
    }

}
