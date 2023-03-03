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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
           
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role')->default('admindesa');
            $table->string('status')->default('pending');
            $table->string('password');
            $table->string("gambar");
            $table->string("logo");
            $table->string("provinsi")->nullable();
            $table->string("kabupaten")->nullable();
            $table->string("kecamatan")->nullable();
            $table->string("kode_pos");
            $table->string("koordinat");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
