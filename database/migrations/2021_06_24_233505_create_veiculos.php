<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id('id');
            $table->date('anofabricacao');
            $table->string('placa');
            $table->string('chassi');
            $table->boolean('status');
            $table->integer('marca_id');
            $table->integer('modelo_id');
            $table->integer('cor_id');
            $table->integer('compra_id');

            $table->foreign('marca_id')->references('id')
                  ->on('marcaveiculo')->onDelete('cascade');
            $table->foreign('modelo_id')->references('id')
                  ->on('modeloveiculo')->onDelete('cascade');
            $table->foreign('cor_id')->references('id')
                ->on('corveiculo')->onDelete('cascade');
            $table->foreign('compra_id')->references('id')
                ->on('compraveiculo')->onDelete('cascade');
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
        Schema::dropIfExists('veiculos');
    }
}
