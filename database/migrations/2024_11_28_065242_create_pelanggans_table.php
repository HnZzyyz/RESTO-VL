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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->integerIncrements('id_pelanggan');
            $table->string('nama_pelanggan',100)->nullable();
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan'])->default('Laki-laki');
            $table->string('no_hp',13)->nullable();
            $table->string('alamat',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
