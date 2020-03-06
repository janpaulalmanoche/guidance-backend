<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'first_name' => 'teacher1',
                'middle_name' => 'cru',
                'last_name' => 'dela',
                'id_no' => 'c-18989',
                'department_id' => 1,
                'email' => 'pol@gmail.com',
                'role_id' => '2',
                'type_id' => '2',
                'password' => \Illuminate\Support\Facades\Hash::make('12345')
            ],
            [
                'first_name' => 'admin',
                'middle_name' => 'adminM',
                'last_name' => 'adminL',
                'id_no' => 'c-189892',
                'type_id' => '3',
                'department_id' => 2,
                'email' => 'admin@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('12345'),
                'role_id' => '1',
            ]
        ];

        $data2 = [
            ['role' => 'admin'],
            ['role' => 'user']
        ];

        $data3 = [
            ['type' => 'student'],
            ['type' => 'working'],
            ['type' => 'staff'],
        ];
        \App\Type::insert($data3);

        \App\Role::insert($data2);

        \App\User::insert($data);

        $dep = [
            [
                'department' => 'college of test1',
                'a' => 'test1',
            ],
            [
                'department' => 'college of test2',
                'a' => 'test2',
            ]
        ];

        \App\Department::insert($dep);

    }
}
