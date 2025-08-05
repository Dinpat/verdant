<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // file: database/migrations/xxxx_xx_xx_xxxxxx_create_testimonis_table.php
public function up(): void
{
    Schema::create('testimonis', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('pekerjaan');
        $table->tinyInteger('rating'); // Angka 1-5
        $table->text('testimoni');
        $table->string('status')->default('pending'); // 'pending', 'approved', 'rejected'
        $table->timestamps();
    });
}
};
