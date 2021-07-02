<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendaveiculo', function (Blueprint $table) {
            $table->id('id');
            $table->date('datavenda');
            $table->float('valorvenda');
            $table->float('comissao');
            $table->integer('veiculo_id');

            $table->foreign('veiculo_id')->references('id')
                ->on('veiculos')->onDelete('cascade');
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
        Schema::dropIfExists('venda');
    }
}
