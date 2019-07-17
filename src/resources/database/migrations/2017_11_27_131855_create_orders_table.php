<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number', 32);
            $table->string('status', 32);

            if (version_compare(App::version(), '5.8.0', '>=')) {
                $table->bigInteger('user_id')->unsigned()->nullable();
            } else {
                $table->integer('user_id')->unsigned()->nullable();
            }
            
            $table->integer('billpayer_id')->unsigned()->nullable();
            $table->integer('shipping_address_id')->unsigned()->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('billpayer_id')
                  ->references('id')
                  ->on('billpayers');

            $table->foreign('shipping_address_id')
                  ->references('id')
                  ->on('addresses');
        });
    }

    public function down()
    {
        Schema::drop('orders');
    }
}
