<?php

namespace Database\Seeders;

use App\Models\FormLastRunner;
use Illuminate\Database\Seeder;

class FormLastRunnersTableSeeder extends Seeder
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
        for ($i = 0; $i < 15; $i++) {
            FormLastRunner::create([
                'runner_id' =>rand(1,5),
                'track' =>$faker->company,
                'date' =>$faker->dateTimeThisYear,
                'distance' =>rand(500, 1000),
            ]);
        }
    }
}
