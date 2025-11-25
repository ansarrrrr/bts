<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('tbl_blankspot');
    }

    public function down(): void
    {
        Schema::create('tbl_blankspot', function (Blueprint $table) {
            $table->id();
            $table->string('p_jawab')->nullable();
            // tambahkan struktur kolom lain kalau ingin bisa rollback
        });
    }
};