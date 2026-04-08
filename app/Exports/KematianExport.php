<?php

namespace App\Exports;

use App\Models\Kematian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class KematianExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kematian::all();
    }

    /**
    * Header Tabel Excel
    */
    public function headings(): array
    {
        return [
            'ID',
            'Nama Lengkap',
            'NIK',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tgl Lahir',
            'Agama',
            'Status Penduduk',
            'Hubungan KK',
            'Waktu Meninggal',
            'Tempat Meninggal',
            'Jalan',
            'No',
            'RT/RW',
            'Kelurahan',
            'Kecamatan',
            'Kab/Kota',
            'Kode Pos',
            'Status Jenazah',
            'Waktu Pemakaman',
            'Pemeriksa',
            'Waktu Periksa',
            'Dasar Diagnosis',
            'Penyebab Kematian',
            'Tanggal Input'
        ];
    }

    /**
    * Map data agar urutannya pas dengan Heading
    */
    public function map($kematian): array
    {
        return [
            $kematian->id,
            $kematian->nama_lengkap,
            "'" . $kematian->nik, // Kasih petik satu biar NIK gak jadi angka scientific di Excel
            $kematian->jenis_kelamin,
            $kematian->tempat_lahir,
            $kematian->tanggal_lahir,
            $kematian->agama,
            $kematian->status_kependudukan,
            $kematian->hubungan_kk,
            $kematian->waktu_meninggal,
            $kematian->tempat_meninggal,
            $kematian->alamat_jalan,
            $kematian->alamat_no,
            $kematian->alamat_rt_rw,
            $kematian->alamat_kelurahan,
            $kematian->alamat_kecamatan,
            $kematian->alamat_kota,
            $kematian->alamat_kodepos,
            $kematian->status_jenazah,
            $kematian->waktu_pemakaman,
            $kematian->nama_pemeriksa,
            $kematian->waktu_pemeriksaan,
            $kematian->dasar_diagnosis,
            $kematian->kelompok_penyebab,
            $kematian->created_at->format('Y-m-d H:i:s'),
        ];
    }
}