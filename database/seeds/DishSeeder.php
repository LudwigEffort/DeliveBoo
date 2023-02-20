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
        $dishes = [
            'Pasta alla carbonara',
            'Pizza',
            'Pasta allo scoglio',
            'Kebab',
            'Pulled pork',
            'Hamburger',
        ];

        foreach ($dishes as $dish) {
            Dish::create([
                'user_id'       => rand(1, 3), //da sistemare con faker
                'slug'          => Dish::getSlug($dish),
                'name'          => $dish,
                'description'   => "lorem ipsum blablablablablabla",
                'price'         => 1000,
                'available'     => rand(0, 1),
                'is_visible'    => rand(0, 1), //da definire
            ]);
        }
    }
}
