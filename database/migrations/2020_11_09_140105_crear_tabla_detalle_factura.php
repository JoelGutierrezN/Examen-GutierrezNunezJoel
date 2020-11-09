<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDetalleFactura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->bigIncrements('num_detalle', 11);
            $table->BigInteger('numero_factura')->unsigned();
            $table->foreign('numero_factura')->references('numero')->on('factura');
            $table->BigInteger('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('producto');
            $table->integer('cantidad')->unsigned();
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
        Schema::dropIfExists('detalle_factura');
    }
}
