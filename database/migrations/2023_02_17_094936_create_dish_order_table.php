<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishOrderTable extends Migration
{

    public function up()
    {
        Schema::create('dish_order', function (Blueprint $table) {
            $table->foreignId('dish_id')->constrained();
            $table->foreignId('order_id')->constrained();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dish_order');
    }
}
