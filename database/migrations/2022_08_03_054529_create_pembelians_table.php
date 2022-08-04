<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
 

        Schema::create('pembelians', function (Blueprint $table) {
            $table->string('id_pembelian')->primary();
            $table->string('id_supplier_pembelianfk');
            $table->index('id_supplier_pembelianfk');
            $table->foreign('id_supplier_pembelianfk')->references('id_supplier')->on('suppliers')->onDelete('cascade');
            $table->string('id_stok_pembelianfk');
            $table->index('id_stok_pembelianfk');
            $table->foreign('id_stok_pembelianfk')->references('id_stok')->on('stoks')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
};
