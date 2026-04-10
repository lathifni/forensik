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
        Schema::create('kematians', function (Blueprint $table) {
        $table->id();
        $table->integer('header_bulan')->nullable();
        $table->integer('header_tahun')->nullable();
        $table->string('nama_rs_puskesmas')->nullable();
        $table->string('kode_rs_puskesmas')->nullable();
        $table->string('no_urut_kematian')->nullable();
        $table->string('no_rm')->nullable();
        // Bagian A
        $table->string('nama_lengkap');
        $table->string('nik', 16)->nullable();
        $table->string('jenis_kelamin')->nullable();
        $table->string('tempat_lahir')->nullable();
        $table->date('tanggal_lahir')->nullable();
        $table->string('agama')->nullable();
        $table->string('status_kependudukan')->nullable();
        $table->string('hubungan_kk')->nullable();
        $table->dateTime('waktu_meninggal')->nullable();
        $table->string('tempat_meninggal')->nullable();
        
        // Elaborasi Alamat
        $table->string('alamat_jalan')->nullable();
        $table->string('alamat_no')->nullable();
        $table->string('alamat_rt_rw')->nullable();
        $table->string('alamat_kelurahan')->nullable();
        $table->string('alamat_kecamatan')->nullable();
        $table->string('alamat_kota')->nullable();
        $table->string('alamat_kodepos', 5)->nullable();

        // Bagian B
        $table->string('status_jenazah')->nullable();
        $table->dateTime('waktu_pemakaman')->nullable();
        $table->string('nama_pemeriksa')->nullable();
        $table->dateTime('waktu_pemeriksaan')->nullable();

        // Bagian C
        $table->string('dasar_diagnosis')->nullable();
        $table->string('kelompok_penyebab')->nullable();
        
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kematians');
    }
};
