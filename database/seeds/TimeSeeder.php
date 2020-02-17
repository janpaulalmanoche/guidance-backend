<?php

use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
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
            ['time' => '7:30-8:30'],['time' => '8:30-9:30'],['time' => '9:30-10:30'],
            ['time' => '11:30-12:30'],['time' => '1:30-2:30'],['time' => '3:30-4:30'],
              ['time' => '5:30-6:30']
        ];

        \App\Time::insert($data);
    }
}
