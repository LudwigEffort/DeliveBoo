<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('f_name', 50);
            $table->string('l_name', 50);
            $table->string('email')->unique();
            $table->string('phone_number', 20);
            $table->string('address', 100);
            $table->dateTime('order_date');
            $table->dateTime('pickup_date');
            $table->dateTime('payment_date');
            $table->mediumInteger('amount')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
