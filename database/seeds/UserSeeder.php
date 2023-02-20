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
                'name'          => 'Kebab Hallah',
                'email'         => 'kebabhallah@gmail.com',
                'password'      =>  Hash::make('123'),
                'slug'          =>  User::getSlug('Kebab Hallah'),
                'vat_number'    => 'ciao9',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1
            ],
            [
                'name'          => 'Pizzeria Napoletana',
                'email'         => 'pizzerianapoletan@gmail.com',
                'password'      =>  Hash::make('123'),
                'slug'          =>  User::getSlug('Pizzeria Napoletana'),
                'vat_number'    => 'ciao4',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 0
            ],
            [
                'name'          => 'Sushi Zen',
                'email'         => 'sushizen@gmail.com',
                'password'      =>  Hash::make('zxcv'),
                'slug'          =>  User::getSlug('Sushi Zen'),
                'vat_number'    => 'ciao6',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1
            ],
            [
                'name'          => 'Mario Poke',
                'email'         => 'sushizen@gmail.com',
                'password'      =>  Hash::make('zxcv'),
                'slug'          =>  User::getSlug('Sushi Zen'),
                'vat_number'    => 'ciao6',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1
            ],
            [
                'name'          => 'Sushi Zen',
                'email'         => 'sushizen@gmail.com',
                'password'      =>  Hash::make('zxcv'),
                'slug'          =>  User::getSlug('Sushi Zen'),
                'vat_number'    => 'ciao6',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
