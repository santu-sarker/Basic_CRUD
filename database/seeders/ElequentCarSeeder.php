<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Facade\FlareClient\Time\Time;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElequentCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create() ;

        for($i=0;$i<=1000;$i++){
            DB::table('elequentcars')->insert([
                "name" => $faker->name(),
                "email" => $faker->unique()->safeEmail(),
                "phone_number" => $faker->phoneNumber(),
                "ref_id" => $faker->randomElement([4,5,6,1,3,9,8]),
                "created_at" => Carbon::now(),
            ]);
        }
    }
}
