<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->timestamps(); nao queremos os timestamps
            $table->string('nome', 255); //cria um campo nome tipo string e tamanho 255
            $table->decimal('preco', 13, 2); //cria um campo preco tipo float tamanho 13 casas antes e 2 depois da virgula
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
}
