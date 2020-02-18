<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
//        $this->call(EventsSeeder::class);
        $this->call(PlaceStringInGensanSeeder::class);
//        $this->call(TimeSeeder::class);
    }
}
