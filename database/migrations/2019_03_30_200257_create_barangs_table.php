<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kodebarang');
            $table->string('namabarang');
            $table->integer('stock');
            $table->integer('hargaawal');
            $table->integer('hargaakhir');
            $table->datetime('expired');
            $table->unsignedInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_unit');
            $table->foreign('id_unit')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_ppn');
            $table->foreign('id_ppn')->references('id')->on('ppns')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('barangs');
    }
}
