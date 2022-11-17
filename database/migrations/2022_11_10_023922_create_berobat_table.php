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
        Schema::create('berobat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nama_pasien_id');
            $table->date('tanggal_berobat');
            $table->string('keluhan');
            $table->unsignedBigInteger('nama_dokter_id');
            $table->string('hasil_periksa');
            $table->unsignedBigInteger('nama_obat_id')->nullable();
            $table->unsignedBigInteger('nama_rs_id')->nullable();
            $table->integer('biaya');
            $table->timestamps();

            $table->foreign('nama_pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->foreign('nama_dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            $table->foreign('nama_obat_id')->references('id')->on('obat')->onDelete('cascade');
            $table->foreign('nama_rs_id')->references('id')->on('rs_rujuk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berobat');
    }
};
