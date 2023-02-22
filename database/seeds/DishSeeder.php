<?php

use App\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes  = [
            // ludovico
            [
                'user_id' => 5,
                'slug' => Dish::getSlug('Strudel di mele'),
                'name' => 'Strudel di mele',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            // alessio
            [
                'user_id' => 5,
                'slug' => Dish::getSlug('cheesecake'),
                'name' => 'cheesecake',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            // camillo
            [
                'user_id' => 2,
                'slug' => Dish::getSlug('pizza fritta'),
                'name' => 'pizza fritta',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            // dario
            [
                'user_id' => 5,
                'slug' => Dish::getSlug('spezzatino'),
                'name' => 'spezzatino',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            // matteo
            [
                'user_id' => 5,
                'slug' => Dish::getSlug('cotoletta alla milanese'),
                'name' => 'cotoletta alla milanese',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 4,
                'slug' => Dish::getSlug('poke'),
                'name' => 'poke',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 3,
                'slug' => Dish::getSlug('sushi di salmome'),
                'name' => 'sushi di salmone',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 5,
                'slug' => Dish::getSlug('salsiccia'),
                'name' => 'Salsiccia',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 3,
                'slug' => Dish::getSlug('sushi di tonno'),
                'name' => 'sushi di tonno',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 1,
                'slug' => Dish::getSlug('Amaro Montenegro'),
                'name' => 'Amaro Montenegro',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 2,
                'slug' => Dish::getSlug('vino della casa'),
                'name' => 'Vino della casa',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 3,
                'slug' => Dish::getSlug('acqua frizzante'),
                'name' => 'Acqua frizzante',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 4,
                'slug' => Dish::getSlug('acqua naturale'),
                'name' => 'Acqua naturale',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 1,
                'slug' => Dish::getSlug('patatine fritte'),
                'name' => 'Patatine fritte',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 1,
                'slug' => Dish::getSlug('Fanta'),
                'name' => 'Fanta',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 3,
                'slug' => Dish::getSlug('Coca Cola'),
                'name' => 'Coca Cola',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 2,
                'slug' => Dish::getSlug('pizza margherita'),
                'name' => 'pizza margherita',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 1,
                'slug' => Dish::getSlug('Kebab'),
                'name' => 'Kebab',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 5,
                'slug' => Dish::getSlug('Pasta al pomodoro'),
                'name' => 'Pasta al pomodoro',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
            [
                'user_id' => 5,
                'slug' => Dish::getSlug('Pasta alla carbonara'),
                'name' => 'Pasta alla carbonara',
                'description'  => 'lorem ipsum sic amet okokokokokookokokokokokokokokokokok',
                'price' => 5000,
                'available'=> rand(0,1),
                'is_visible' => rand(0,1),
            ],
        ];

        foreach ($dishes as $dish) {
            $dish = Dish::create($dish);
        }
    }
}
