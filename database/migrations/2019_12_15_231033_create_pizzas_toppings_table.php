<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasToppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas_toppings', function (Blueprint $table) {
            //$table->bigIncrements('id');
            //$table->timestamps();
            $table->integer('pizzas_id')->unsigned();
            $table->integer('toppings_id')->unsigned();

            $table->foreign('pizzas_id')->references('id')->on('pizzas');
            $table->foreign('toppings_id')->references('id')->on('toppings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas_toppings');
    }
}
