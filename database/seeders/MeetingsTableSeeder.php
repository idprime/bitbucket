<?php

namespace Database\Seeders;

use App\Models\Meeting;
use Illuminate\Database\Seeder;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Meeting::truncate();
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            Meeting::create([
                'external_id' => $faker->uuid,
                'name' => $faker->company,
            ]);
        }
    }
}
