<?php

use Illuminate\Database\Seeder;

class PlaceStringInGensanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
          'place' => 'boarding house'
            ],
            [
                'place' => 'dormitory'
            ],
            [
                'place' => 'Apartment'
            ],
            [
                'place' => 'relatives'
            ],
            [
                'place' => 'employer'
            ],
            [
                'place' => 'others'
            ]
        ];

        \App\PlaceStayingInGensan::insert($data);
    }
}
