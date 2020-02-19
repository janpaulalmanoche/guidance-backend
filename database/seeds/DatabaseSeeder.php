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
        $this->call(GenderSeeder::class);
        $this->call(LiveAtPresentSeeder::class);
        $this->call(ParentMartialStatusSeeder::class);
        $this->call(SocioEconomicStatusSeeder::class);
        $this->call(VehicleSeeder::class);
        $this->call(AppliancesSeeder::class);
    }
}
