<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder {
    /**
     * Run the database seeds.
     *@return void 
     */
        public function run() {

            $faker = Faker::create();

            for ($i = 1; $i <= 10; $i++) { 
                DB::table('students')->insert([
                    'name' => $faker->name,
                    'address' => $faker->address,
                    'mobile' => $faker->phoneNumber,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
        }
    }
}
