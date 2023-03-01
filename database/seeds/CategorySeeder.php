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
            $category = Category::create([
                'slug' => Category::getSlug($category),
                'name' => $category,
                'description' => "lorem ipsum blablablablablabla",
            ]);
            $num_users = rand(1, 3);
            $user_ids = User::where('id', '<>', $category->id)->inRandomOrder()->take($num_users)->pluck('id')->toArray();
            $category->users()->sync($user_ids);
        }

}
}
