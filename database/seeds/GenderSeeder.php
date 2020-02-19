<?php

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
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
            ['gender' => 'male'],
            ['gender' => 'femail']
        ];

        \App\Gender::insert($data);
    }
}
