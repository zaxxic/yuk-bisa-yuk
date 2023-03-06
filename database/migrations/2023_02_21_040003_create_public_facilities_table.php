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
        Schema::create('public_facilities', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('profile_id');
            // $table->foreign('profile_id')
            // ->references('id')
            // ->on('desa_profiles')
            // ->onDelete('restrict')
            // ->onUpdate('restrict');
            // $table->string('nama');
            $table->integer('rw');
            $table->integer('rt');
            $table->integer('paud');
            $table->integer('tk');
            $table->integer('sd');
            $table->integer('smp');
            $table->integer('sma');
            $table->integer('rumah');
            $table->integer('puskesmas');
            $table->integer('kesehatan');
            $table->integer('posyandu');
            $table->integer('kb');
            $table->integer('dokter');
            $table->integer('bidan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_facilities');
    }
};
