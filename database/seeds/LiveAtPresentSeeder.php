<?php

use Illuminate\Database\Seeder;

class LiveAtPresentSeeder extends Seeder
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
          ['live' => 'brothers and sisters'],
          ['live' => 'both parents'],
          ['live' => 'relatives'],
          ['live' => 'father'],
          [
              'live' => 'mother'
          ],
          ['live'=>'grandparents']
        ];

            \App\LiveAtPresent::insert($data);
    }
}
