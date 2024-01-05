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
        Schema::create('pengacaras', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengacara')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->text('alamat_pengacara')->nullable();
            $table->string('email_pengacara')->nullable();


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengacaras');
    }
};
