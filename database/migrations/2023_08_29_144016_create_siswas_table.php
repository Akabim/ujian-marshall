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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string("name");
            $table->integer("nisn")->unique();
            $table->string("email");
            $table->string("password");
            $table->string("type");
            $table->string("nilai_akhir1")->nullable();
            $table->string("nilai_akhir2")->nullable();
            $table->string("nilai_akhir3")->nullable();
            $table->string("nilai_akhir4")->nullable();
            $table->string("nilai_akhir5")->nullable();
            $table->string("total_nilai")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
