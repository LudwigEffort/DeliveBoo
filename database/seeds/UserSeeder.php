<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'Kebab Halal',
                'email'     => 'qwer@qwer.qwer',
                'password'  =>  Hash::make('qwer'),
                'slug'      => 'ciao0',
                'vat_number'=> 'ciao9',
                'opening_time'=> '12:05:43',
                'closing_time'=> '12:05:43',
                'is_opened'=> 1
            ],
            [
                'name'      => 'Pizzeria Napoletana',
                'email'     => 'asdf@asdf.asdf',
                'password'  =>  Hash::make('asdf'),
                'slug'      => 'ciao1',
                'vat_number'=> 'ciao4',
                'opening_time'=> '12:05:43',
                'closing_time'=> '12:05:43',
                'is_opened'=> 0
            ],
            [
                'name'      => 'Sushi Zen',
                'email'     => 'zxcv@zxcv.zxcv',
                'password'  =>  Hash::make('zxcv'),
                'slug'      => 'ciao2',
                'vat_number'=> 'ciao6',
                'opening_time'=> '12:05:43',
                'closing_time'=> '12:05:43',
                'is_opened'=> 1
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
