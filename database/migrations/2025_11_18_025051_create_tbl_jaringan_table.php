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
        Schema::create('tbl_jaringan', function (Blueprint $table) {
           $table->increments('id'); // int(11) auto increment primary key
            
            $table->string('kd_fasilitas', 30)->nullable();
            $table->string('lat', 30)->nullable();
            $table->string('lng', 30)->nullable();
            $table->string('kd_kab', 30)->nullable();
            $table->string('kd_kec', 30)->nullable();
            $table->string('kd_desa', 30)->nullable();

            $table->string('alamat', 255)->nullable();
            
            // enum status ("1", "0") default "1"
            $table->enum('status', ['1', '0'])->default('1');
    
            $table->string('keterangan', 255)->nullable();
    
            $table->integer('created_id')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->integer('updated_id')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_jaringan');
    }
};
