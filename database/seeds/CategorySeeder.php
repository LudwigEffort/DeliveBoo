<?php

use App\User;
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'name'  => 'Italiano',
                'slug'  =>  Category::getSlug('Italiano'),
                'description' => 'Cucina tadizionale italiana',
            ],
            [
                'name'  => 'Giapponese',
                'slug'  =>  Category::getSlug('Giapponese'),
                'description' => 'Cucina tadizionale giapponese',
            ],
            [
                'name'  => 'Americano',
                'slug'  =>  Category::getSlug('Americano'),
                'description' => 'Cucina americana',
            ],
            [
                'name'  => 'Pizza',
                'slug'  =>  Category::getSlug('Pizza'),
                'description' => 'Pizzeria',
            ],
            [
                'name'  => 'Sushi',
                'slug'  =>  Category::getSlug('Sushi'),
                'description' => 'Sushi',
            ],
            [
                'name'  => 'Ristorante',
                'slug'  =>  Category::getSlug('Ristorante'),
                'description' => 'Ristorante',
            ],
            [
                'name'  => 'Hamburger',
                'slug'  =>  Category::getSlug('Hamburger'),
                'description' => 'Hamburger',
            ],
            [
                'name'  => 'Steakhouse',
                'slug'  =>  Category::getSlug('Steakhouse'),
                'description' => 'Steakhouse',
            ],
            [
                'name'  => 'Kebab',
                'slug'  =>  Category::getSlug('Kebab'),
                'description' => 'Kebab',
            ],
            [
                'name'  => 'Pasticceria',
                'slug'  =>  Category::getSlug('Pasticceria'),
                'description' => 'Pasticceria',
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::create($category);
        }

        $user_1 = User::find(1);
        $category_1 = Category::find([9]);
        $user_1->categories()->attach($category_1);

        $user_2 = User::find(2);
        $category_2 = Category::find([1, 4]);
        $user_2->categories()->attach($category_2);

        $user_3 = User::find(3);
        $category_3 = Category::find([2, 5]);
        $user_3->categories()->attach($category_3);

        $user_4 = User::find(4);
        $category_4 = Category::find([6]);
        $user_4->categories()->attach($category_4);

        $user_5 = User::find(5);
        $category_5 = Category::find([1, 8]);
        $user_5->categories()->attach($category_5);
    }
}
