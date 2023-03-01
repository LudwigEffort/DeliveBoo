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
            'Cucina internazionale',
            'Koreano',
            'Marocchina',
        ];

        foreach ($categories as $category) {
            $newCategory = Category::create([
                'slug' => Category::getSlug($category),
                'name' => $category,
                'description' => "lorem ipsum blablablablablabla",
            ]);

            $num_categories = rand(1, 3);
            $category_ids = Category::pluck('id')->shuffle()->take($num_categories)->toArray();
            $newCategory->users()->sync($category_ids);
        }

}
}
