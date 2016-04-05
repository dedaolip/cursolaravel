<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 15);
            $table->string('report', 255);
            $table->date('date');
            $table->integer('id_costumer');
            $table->string('equipament', 30);
            $table->integer('serial_number');
            $table->string('description', 255);
            $table->string('observation', 255);
            $table->integer('hours');
            $table->double('time_value', 10, 2);
            $table->double('total_pryce', 10, 2);
            $table->boolean('is_active')->default(0);
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
        Schema::drop('service_orders');
    }
}
