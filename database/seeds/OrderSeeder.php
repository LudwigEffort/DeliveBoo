<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders  = [
            [
                'f_name' => 'Ludovico',
                'l_name' => 'Sforzo',
                'email'  => 'ludovico@gmail.com',
                'amount' => 5000,
                'address'=> 'Via Montecitorio 12',
                'phone_number' => '+393456789012',
                'order_date' => '2023-02-24 12:30:00',
                'payment_date' => '2023-02-24 12:40:00',
                'pickup_date' => '2023-02-24 14:30:00',
            ],
            [
                'f_name' => 'Alessio',
                'l_name' => 'Allegrini',
                'email'  => 'Alessio@gmail.com',
                'amount' => 8000,
                'address'=> 'Via dalle palle 12',
                'phone_number' => '+393206889012',
                'order_date' => '2023-01-25 11:30:00',
                'payment_date' => '2023-02-24 12:50:00',
                'pickup_date' => '2023-02-24 13:30:00',
            ],
            [
                'f_name' => 'Camillo',
                'l_name' => 'Musmeci',
                'email'  => 'camillo@gmail.com',
                'amount' => 6000,
                'address'=> 'Via Verga 12',
                'phone_number' => '+392456788032',
                'order_date' => '2023-01-19 09:30:00',
                'payment_date' => '2023-02-24 10:45:00',
                'pickup_date' => '2023-02-24 11:30:00',
            ]
        ];

        foreach ($orders as $order) {

            Order::create($order);
        }
    }
}
