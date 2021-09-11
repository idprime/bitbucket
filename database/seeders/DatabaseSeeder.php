<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MeetingsTableSeeder::class);
        $this->call(RacesTableSeeder::class);
        $this->call(RunnersTableSeeder::class);
        $this->call(FormDataTableSeeder::class);
        $this->call(FormLastRunnersTableSeeder::class);
    }
}
