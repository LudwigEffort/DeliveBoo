<?php

use App\Dish;
use App\User;
use App\Order;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $last_user_id = User::max('id');

        $orders = Order::all();

        for ($i = 0; $i < 20; $i++) {

            $user_id = rand(1, $last_user_id);
            $dish_ids = Dish::where('user_id', $user_id)->pluck('id')->toArray();

            // $amount = 0;

            // foreach ($selected_dishes as $dish_id) {
            //         $dish = Dish::find($dish_id);
            //         $amount += $dish->price;
            //         $order->dishes()->attach($dish);
            //      }



            $order = Order::create([
                'f_name' => $faker->firstName(),
                'l_name' => $faker->lastName(),
                'email' => $faker->email(),
                'phone_number' => $faker->phoneNumber(),
                'address' => $faker->address(),
                'order_date' => $faker->dateTimeBetween('-1 hour', 'now'),
                'pickup_date' => $faker->dateTimeBetween('now', '+2 hours'),
                'payment_date' => $faker->dateTimeBetween('-1 hour', 'now'),
                'amount' => $amount,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $min_dishes = 1;
            $max_dishes = min(5, count($dish_ids));
            $selected_dishes = $faker->randomElements($dish_ids, $faker->numberBetween($min_dishes, $max_dishes));
            $order->dishes()->attach($selected_dishes);
    };
}
}
