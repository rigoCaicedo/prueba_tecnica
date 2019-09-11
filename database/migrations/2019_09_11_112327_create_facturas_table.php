<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fechaFact');
            $table->double('totalFact',15,2);
            $table->bigInteger('idServicio')->unsigned();
            $table->foreign('idServicio')->references('id')->on('servicios')->onDelete('cascade');
            $table->bigInteger('idCliente')->unsigned();
            $table->foreign('idCLiente')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::dropIfExists('facturas');
    }
}
