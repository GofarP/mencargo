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
        Schema::create('pesanan_men_cargos', function (Blueprint $table) {
            $table->id();
            $table->integer('stt');
            $table->string('resi')->nullable();
            $table->bigInteger('customer_id');
            $table->bigInteger('metode_pembayaran_id')->nullable();
            $table->bigInteger('status_pembayaran_id')->nullable();
            $table->bigInteger('harga_kg_barang')->nullable();
            $table->bigInteger('harga_unit')->nullable();
            $table->bigInteger('harga_diskon')->nullable();
            $table->bigInteger('biaya_tambahan')->nullable();
            $table->bigInteger('total_biaya');
            $table->bigInteger('uang_muka')->nullable();
            $table->bigInteger('uang_sisa')->nullable();
            $table->datetime('waktu_pesan');
            $table->datetime('tanggal_masuk');
            $table->longText('jumlah_koli_awal');
            $table->longText('jumlah_koli_packing')->nullable();
            $table->longText('volume')->nullable();
            $table->string('berat')->nullable();
            $table->string('dimensi')->nullable();
            $table->string('unit')->nullable();
            $table->string('kubikasi')->nullable();
            $table->string('instruksi')->nullable();
            $table->enum('jalur', ['darat', 'laut', 'udara']);
            $table->bigInteger('daerah_asal');
            $table->bigInteger('daerah_tujuan');
            $table->string('alamat_detail_tujuan');
            $table->string('nama_penerima');
            $table->string('notelp_penerima');
            $table->string('diterima_oleh')->nullable();
            $table->longText('catatan_barang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_men_cargos');
    }
};
