<?php

use App\User;
use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = [
            //kebab
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
            // pizza
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
            // sushi
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
            // poke
            [
                'name'          => 'Mario Poke',
                'email'         => 'mariopoke@gmail.com',
                'password'      =>  Hash::make('zxcv'),
                'slug'          =>  User::getSlug('Mario Poke'),
                'vat_number'    => 'ciao7',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1
            ],
            // grill e pasta
            [
                'name'          => 'Grill & Pasta',
                'email'         => 'grillpasta@gmail.com',
                'password'      =>  Hash::make('zxcv'),
                'slug'          =>  User::getSlug('Grill & Pasta'),
                'vat_number'    => 'ciao8',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1
            ],
        ];

        foreach ($users as $user) {
            $user = User::create($user);
        }
    }
}
