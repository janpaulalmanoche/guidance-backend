<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
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
            ['teacher_id' => 1,
                'start' => \Carbon\Carbon::now(),
                'end_time' => '7:30',
                'start_time' => '7:30',
                'status' => 'finish',
                'color' => 'blue',
                'title' => 'BSED_1',
                'encoded_by' => '2'
                ],
            ['teacher_id' => 1,
                'start' => '2019-12-21',
                'end_time' => '7:30',
                'start_time' => '7:30',
                'color' => 'blue',
                'status' => 'finish',
                'title' => 'BSED_2',
                'encoded_by' => '2'
            ],

        ];

        \App\Booking::insert($data);
    }
}
