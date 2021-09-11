<?php

namespace Database\Seeders;

use App\Models\FormData;
use Illuminate\Database\Seeder;

class FormDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        $k= 0;
        for ($i = 0; $i < 5; $i++) {
            FormData::create([
                'runner_id' =>++$k,
                'distance' => rand(50000, 150000),
            ]);
        }
    }
}
