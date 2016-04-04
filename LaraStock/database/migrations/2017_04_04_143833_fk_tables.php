<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function($table){
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('brand_id')->references('id')->on('brands');



            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
