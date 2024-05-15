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
        Schema::create('mtc', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal_update');
            $table->bigInteger('status_manifes_id');
            $table->bigInteger('pesanan_mencargo_id');
            $table->bigInteger('vendor_id');
            $table->dateTime('tanggal_jalan')->nullable();
            $table->string('estimasi')->nullable();
            $table->string('image')->nullable();
            $table->string('penerima')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mtc');
    }
};
