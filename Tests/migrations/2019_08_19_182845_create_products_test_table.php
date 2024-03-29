<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTestTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('sku')->nullable();
                $table->string('name');
                $table->decimal('price', 15, 2);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
