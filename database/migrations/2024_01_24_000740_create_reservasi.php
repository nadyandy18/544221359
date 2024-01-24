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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("Transaksi");
            $table->string("IdPengunjung");
            $table->integer("Jmlah_Kamar");
            $table->date("Tggl_Masuk");
            $table->date("Tggl_Keluar");
            $table->integer("Lama_Nginap");
            $table->integer("Totl_Harga");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
