<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->integer('no_meja');
            $table->date('tgl_penjualan');
            $table->integer('jumlah_menu');
            $table->integer('total');
            $table->bigInteger('id_pembeli')->unsigned();
            $table->bigInteger('id_karyawan')->unsigned();
            $table->bigInteger('id_menu')->unsigned();
            $table->foreign('id_pembeli')->references('id')->on('pembelis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_karyawan')->references('id')->on('karyawans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_menu')->references('id')->on('menus')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('penjualans');
    }
}
