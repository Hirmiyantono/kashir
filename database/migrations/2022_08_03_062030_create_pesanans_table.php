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
 

        Schema::create('pesanans', function (Blueprint $table) {
            $table->string('id_pesanan')->primary();
            $table->string('id_stok_pesananfk');
            $table->index('id_stok_pesananfk');
            $table->foreign('id_stok_pesananfk')->references('id_stok')->on('stoks')->onDelete('cascade');
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
        Schema::dropIfExists('pesanans');
    }
};
