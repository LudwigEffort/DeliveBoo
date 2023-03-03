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

            $num_users = rand(1, 3);
            $user_ids = User::where('id', '<>', $category->id)->inRandomOrder()->take($num_users)->pluck('id')->toArray();
            $category->users()->sync($user_ids);
    }
}
