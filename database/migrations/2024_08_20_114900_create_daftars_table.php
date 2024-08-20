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
        Schema::create('daftars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_lengkap', 100);
            $table->string('nama_panggilan', 100);
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->string('nama_ayah', 100);
            $table->string('nama_ibu' );
            $table->string('asal_sekolah');
            $table->text('alamat');
            $table->string('agama');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftars');
    }
};
