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
        Schema::create('relawan', function (Blueprint $table) {
            $table->id('id_relawan');
            $table->foreignId('id_jadwal')->constrained('jadwal', 'id_jadwal')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_relawan');
            $table->string('email');
            $table->string('no_telp');
            $table->text('alamat');
            $table->boolean('is_block')->default(false);
            $table->boolean('is_koor')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relawan');
    }
};
