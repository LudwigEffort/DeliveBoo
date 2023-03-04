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
                'name'          => 'Kebab Habdul',
                'email'         => 'kebabhabdul@gmail.com',
                'password'      =>  Hash::make('123'),
                'slug'          =>  User::getSlug('Kebab Hallah'),
                'vat_number'    => '09876543210',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1,
                'uploaded_img'   => 'img/kebab_habdul.webp'
            ],
            // pizza
            [
                'name'          => 'Pizzeria Napoletana',
                'email'         => 'pizzerianapoletana@gmail.com',
                'password'      =>  Hash::make('123'),
                'slug'          =>  User::getSlug('Pizzeria Napoletana'),
                'vat_number'    => '09876543219',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1,
                'uploaded_img'   => 'img/pizza_ciro.jpg'
            ],
            // sushi
            [
                'name'          => 'Sushi Zen',
                'email'         => 'sushizen@gmail.com',
                'password'      =>  Hash::make('123'),
                'slug'          =>  User::getSlug('Sushi Zen'),
                'vat_number'    => '09876543218',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1,
                'uploaded_img'   => 'img/sushi.jpg'
            ],
            // poke
            [
                'name'          => 'Mario Poke',
                'email'         => 'mariopoke@gmail.com',
                'password'      =>  Hash::make('123'),
                'slug'          =>  User::getSlug('Mario Poke'),
                'vat_number'    => '09876543217',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1,
                'uploaded_img'   => 'img/poke.webp'
            ],
            // grill e pasta
            [
                'name'          => 'Grill & Pasta',
                'email'         => 'grillpasta@gmail.com',
                'password'      =>  Hash::make('123'),
                'slug'          =>  User::getSlug('Grill & Pasta'),
                'vat_number'    => '09876543216',
                'opening_time'  => '12:05:43',
                'closing_time'  => '12:05:43',
                'is_opened'     => 1,
                'uploaded_img'   => 'img/grill_pasta.jpg'
            ],
        ];

        foreach ($users as $user) {
            $user = User::create($user);
        }



    }
}
