<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('slug', 100)->unique()->nullable(); //da sistemare prossimamente
            $table->string('vat_number', 11)->unique();
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->tinyInteger('is_opened')->unsigned();
            $table->string('uploaded_img', 100)->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('vat_number');
            $table->dropColumn('opening_time');
            $table->dropColumn('closing_time');
            $table->dropColumn('is_opened');
            $table->dropForeign(['category_id']);
        });
    }
}
