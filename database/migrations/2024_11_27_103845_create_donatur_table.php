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
        Schema::create('donatur', function (Blueprint $table) {
            $table->id('id_donatur');
            $table->string('code')->nullable();
            $table->foreignId('id_donasi')->constrained('donasi', 'id_donasi')->cascadeOnUpdate();
            $table->string('nama')->default('Orang Baik')->nullable();
            $table->string('email')->nullable();
            $table->string('no_telp')->nullable();
            $table->text('pesan')->nullable();
            $table->double('nominal_donasi')->default(0);
            $table->boolean('is_paid')->default(false);
            $table->string('status')->default('pending');
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donatur');
    }
};
