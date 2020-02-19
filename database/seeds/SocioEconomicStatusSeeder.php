<?php

use Illuminate\Database\Seeder;

class SocioEconomicStatusSeeder extends Seeder
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
          ['income' => 'below Php10,000'],
            ['income' => '10,000 - 20,000'],
            ['income' => '20,001 - 30,000'],
            ['income' => '30,001 - 40,000'],
            ['income' => '40,001 - 50,000'],
            ['income' => '50,001 - 60,000'],
            ['income' => '60,000 - 70,000'],
            ['income' => '70,001 - 80,000'],
            ['80,000-Above']
        ];

        \App\SocioEconomicStatus::insert($data);
    }
}
