<?php

use Illuminate\Database\Seeder;

class ParentMartialStatusSeeder extends Seeder
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
              'status' => 'living together'
          ],
          [
              'status' => 'father remarried'
          ],
          [
              'status' => ' mother remarried'
          ],
          [
              'status' => 'legally separated'
          ],
          [
              'status' => 'deceased father'
          ],
          [
              'status' => 'deceased mother'
          ],
          [
              'status' => 'marriage annulled'
          ]
        ];

        \App\ParentMaritalStatus::insert($data);
    }
}
