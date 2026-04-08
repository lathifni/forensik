<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KematianExport; // Nanti kita buat file ini
use Illuminate\Http\Request;
use App\Models\Kematian;

class KematianController extends Controller
{

    public function index()
    {
        // Ambil 10 data terbaru berdasarkan waktu dibuat
        $listKematian = Kematian::latest()->take(10)->get();

        return view('dashboard', compact('listKematian'));
    }
    public function create() { return view('kematian.create'); }

    public function store(Request $request) {
        $data = $request->validate([
            'nama_lengkap' => 'required|string',
            'nik' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'agama' => 'nullable',
            'status_kependudukan' => 'nullable',
            'hubungan_kk' => 'nullable',
            'waktu_meninggal' => 'nullable',
            'tempat_meninggal' => 'nullable',
            'alamat_jalan' => 'nullable',
            'alamat_no' => 'nullable',
            'alamat_rt_rw' => 'nullable',
            'alamat_kelurahan' => 'nullable',
            'alamat_kecamatan' => 'nullable',
            'alamat_kota' => 'nullable',
            'alamat_kodepos' => 'nullable',
            'status_jenazah' => 'nullable',
            'waktu_pemakaman' => 'nullable',
            'nama_pemeriksa' => 'nullable',
            'waktu_pemeriksaan' => 'nullable',
            'dasar_diagnosis' => 'nullable',
            'kelompok_penyebab' => 'nullable',
        ]);
        Kematian::create($data);
        return redirect()->route('dashboard');
    }

    public function export() 
    {
        return Excel::download(new KematianExport, 'data-kematian-rs-djamil.xlsx');
    }

    public function show($id)
    {
        // Cari data berdasarkan ID, kalau gak ada kasih error 404
        $data = Kematian::findOrFail($id);

        return view('kematian.show', compact('data'));
    }
}
