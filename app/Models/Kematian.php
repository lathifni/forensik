<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;

    // Tambahkan baris ini biar Laravel ijinin data masuk ke kolom-kolom ini
    protected $fillable = [
        'header_bulan',
        'header_tahun',
        'nama_rs_puskesmas',
        'kode_rs_puskesmas',
        'no_urut_kematian',
        'no_rm',
        'nama_lengkap',
        'nik',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status_kependudukan',
        'hubungan_kk',
        'waktu_meninggal',
        'tempat_meninggal',
        'alamat_jalan',
        'alamat_no',
        'alamat_rt_rw',
        'alamat_kelurahan',
        'alamat_kecamatan',
        'alamat_kota',
        'alamat_kodepos',
        'status_jenazah',
        'waktu_pemakaman',
        'nama_pemeriksa',
        'waktu_pemeriksaan',
        'dasar_diagnosis',
        'kelompok_penyebab',
    ];
}