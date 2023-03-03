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
        Schema::create('desa_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->nullable();
            $table->foreign('profile_id')
            ->references('id')
            ->on('desa_profiles')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('judul');
            $table->string('subjudul');
            $table->date('tanggal');
            $table->string('gambar');
            $table->string('isi');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desa_news');
    }
};
