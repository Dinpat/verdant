<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
    {
        Schema::create('penghargaan', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->string('nama_penghargaan');
            $table->string('penyelenggara');
            $table->text('deskripsi')->nullable(); // Dibuat nullable jika deskripsi boleh kosong
            $table->string('foto'); // Akan menyimpan path ke file gambar
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penghargaan');
    }
};
