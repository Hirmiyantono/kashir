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
        Schema::create('stoks', function (Blueprint $table) {
            $table->string('id_stok')->primary();
            $table->string('id_barang_stokfk');
            $table->index('id_barang_stokfk');
            $table->foreign('id_barang_stokfk')->references('id_barang')->on('barangs')->onDelete('cascade');
            $table->integer('awal_stok')->nullable();
            $table->integer('masuk_stok')->nullable();
            $table->integer('keluar_stok')->nullable();
            $table->integer('akhir_stok')->nullable();
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
        Schema::dropIfExists('stoks');
    }
};
