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
        $table->string('tahun', 4)->nullable()->after('status');
    });
    }
    
    public function down(): void
    {
    Schema::table('tbl_bts', function (Blueprint $table) {
        $table->dropColumn('tahun');
    });
    }
};
