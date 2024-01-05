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
        Schema::create('catatan_perkaras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('perkara_id')->nullable();
            $table->biginteger('jaksa_id')->nullable();
            $table->date('tgl_catatan')->nullable();
            $table->text('isicatatan')->nullable();


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_perkaras');
    }
};
