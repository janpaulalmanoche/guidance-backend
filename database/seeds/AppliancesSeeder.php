<?php

use Illuminate\Database\Seeder;

class AppliancesSeeder extends Seeder
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
            ['appliances' => 'television' ],
            ['appliances' => 'electric fan'],
            ['appliances' => 'gas range'],
            ['appliances' => 'gas stove'],
            ['appliances' => 'laptop'],
            ['appliances' => 'desktop'],
            ['appliances' => 'air conditioning unit'],
            ['appliances' => 'washin machine']
        ];
            \App\Appliance::insert($data);
    }
}
