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
        Schema::table('tbl_bts', function (Blueprint $table) {
            $table->string('alamat', 255)  ->nullable()->after('pemilik');
            $table->string('provider', 255)->nullable()->after('tahun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_bts', function (Blueprint $table) {
           $table->dropColumn('alamat');
           $table->dropColumn('provider');
        });
    }
};
