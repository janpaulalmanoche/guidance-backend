<?php

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            ['vehicle' => 'none'],
          ['vehicle' => 'car/suv'],
          ['vehicle' => 'jeep'],
          ['vehicle' => 'tricycle'],
          ['vehicle' => 'tricycle'],
          ['vehicle' => 'motorcycle']
        ];

        \App\Vehicle::insert($data);
    }
}
