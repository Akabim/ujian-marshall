<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ujians', function (Blueprint $table) {
             $table->id();
            $table->string('id_guru');
            $table->string('id_level');
            $table->string('id_siswa');
            $table->string('id_pesawat');
            $table->string('id_bandara');
            $table->string('id_cuaca');
            $table->unsignedInteger('id_pertanyaan');
            $table->unsignedInteger('tipe_pertanyaan')->nullable();
            $table->double('jawaban');
            $table->timestamps();

            // $table->foreign('id_guru')->references('name')->on('gurus');
            // $table->foreign('id_level')->references('level_penguji')->on('level_pengujis');
            // $table->foreign('id_siswa')->references('name')->on('siswas');
            // $table->foreign('id_pesawat')->references('nama_pesawat')->on('pesawats');
            // $table->foreign('id_bandara')->references('nama_bandara')->on('bandaras');
            // $table->foreign('id_cuaca')->references('kondisi_cuaca')->on('cuacas');
            // $table->foreign('id_pertanyaan')->references('id')->on('pertanyaans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ujians');
    }
};
