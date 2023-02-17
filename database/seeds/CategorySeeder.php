<?php

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
            'Giapponese sushi',
            'Cinese',
            'Italiano',
            'Arabo',
            'Francese',
        ];

        foreach ($categories as $category) {
            Category::create([
                'slug'          => Category::getSlug($category),
                'name'          => $category,
                'description'   => "lorem ipsum blablablablablabla",
            ]);
    }
}
}