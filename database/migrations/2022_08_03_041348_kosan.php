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
        Schema::create('kosans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemilik_id');
            $table->string('nama_kosan');
            $table->string('alamat');
            $table->integer('harga');
            $table->string('kapasitas');
            $table->string('jenis');
            $table->string('foto');
            $table->string('deskripsi');
            $table->string('fasilitas_kamar');
            $table->string('fasilitas_kamar_mandi');
            $table->string('fasilitas_umum');
            $table->string('fasilitas_parkir');
            $table->string('peraturan');
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
        Schema::dropIfExists('kosan');
    }
};
