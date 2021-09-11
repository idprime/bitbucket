<?php

namespace Database\Seeders;

use App\Models\Runner;
use Illuminate\Database\Seeder;

class RunnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            Runner::create([
                'external_id' => $faker->uuid,
                'name' => $faker->name,
                'race_id' =>rand(1,5),
                'age' => rand(30, 45),
                'sex' => $faker->randomElement(['male', 'female']),
                'color' => $faker->randomElement(['#ecbcb4', '#d1a3a4']),
            ]);
        }
    }
}
