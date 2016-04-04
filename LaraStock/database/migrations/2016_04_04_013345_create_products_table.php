<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description', 255);
            $table->decimal('price_cost', 8,2);
            $table->decimal('price_resale',8,2);

            //Foregin_keys
            $table->unsignedInteger('category_id')->unsigned(); //unsignedInteger significa que so recebera numeros maiores do que zero
            $table->unsignedInteger('provider_id');
            $table->unsignedInteger('brand_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
