<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Detail Jenazah: {{ $data->nama_lengkap }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('kematian.edit', $data->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    Edit Data
                </a>
                <button onclick="window.print()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                    Cetak Surat
                </button>
                <a href="{{ route('dashboard') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm font-bold">Kembali</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto">
            <div id="printableArea" class="bg-white overflow-hidden">
                
                <div class="hidden print:block mb-2">
                  <div class="flex items-center">
                      
                      <!-- Logo -->
                      <img src="{{ asset('images/logo.png') }}" class="h-20 mr-4">

                      <!-- Text Kop -->
                      <div class="text-center flex-1 leading-tight">
                          <h1 class="text-lg font-bold text-teal-600 uppercase tracking-wide">
                              Kementerian Kesehatan
                          </h1>

                          <h2 class="text-base font-semibold uppercase">
                              Direktorat Jenderal Pelayanan Kesehatan
                          </h2>

                          <h3 class="text-xl font-extrabold uppercase tracking-wider">
                              RSUP Dr. M. Djamil Padang
                          </h3>

                          <p class="text-xs mt-1">
                              Jl. Perintis Kemerdekaan Padang, Sumatera Barat 25217
                          </p>

                          <p class="text-xs">
                              Telp: (0751) 8956666 | Website: www.rsdjamil.co.id
                          </p>
                      </div>
                  </div>

                  <!-- Garis bawah -->
                  <div class="border-b-[3px] border-black"></div>
              </div>

                <div class="print:text-black">
                    <h2 class="hidden print:block text-center text-xl font-black uppercase">Surat Keterangan Kematian</h2>
                    </div>
            </div>
        </div>
    </div>

    <style>
        @media print {
            /* 1. Paksa seluruh background halaman jadi putih */
            html, body {
                background-color: white !important;
                margin: 0 !important;
                padding: 0 !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }

            /* 2. Sembunyikan semua elemen UI Laravel & Tombol */
            nav, header, footer, button, a, .flex.space-x-2 {
                display: none !important;
            }

            /* 3. Hilangkan padding abu-abu dari pembungkus utama app-layout */
            .py-12, .py-4, .bg-gray-100, .min-h-screen {
                padding: 0 !important;
                margin: 0 !important;
                background-color: white !important;
                background: none !important;
            }

            /* 4. Pastikan kartu putih tidak memiliki bayangan atau border luar */
            .max-w-5xl {
                max-width: 100% !important;
                width: 100% !important;
                margin: 0 !important;
            }

            .bg-white.overflow-hidden.shadow-xl {
                box-shadow: none !important;
                border: none !important;
            }

            /* 5. Set font size agar pas di kertas A4 */
            body {
                font-size: 11pt;
                line-height: 1.2;
                color: black;
            }
        }
    </style>

    <div class="">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white overflow-hidden">
              <div class="p-2 border-b grid grid-cols-1 md:grid-cols-2 gap-2">
                <!-- Baris 1 -->
                <div class="grid grid-cols-2 gap-4 border-b py-1">
                    <div class="flex justify-between">
                        <span class="text-gray-700">Bulan / Tahun</span>
                        <span class="font-semibold">{{ $data->header_bulan }} / {{ $data->header_tahun }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">Nama RS/Puskesmas</span>
                        <span class="font-semibold">{{ $data->nama_rs_puskesmas }}</span>
                    </div>
                </div>

                <!-- Baris 2 -->
                <div class="grid grid-cols-2 gap-4 border-b py-1">
                    <div class="flex justify-between">
                        <span class="text-gray-700">Kode RS/Puskesmas</span>
                        <span class="font-semibold tracking-widest">{{ $data->kode_rs_puskesmas }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-700">No. Urut Kematian</span>
                        <span class="font-semibold text-blue-700 underline">{{ $data->no_urut_kematian }}</span>
                    </div>
                </div>

                <!-- Baris 3 (Full) -->
                <div class="flex justify-between py-1">
                    <span class="text-gray-700">No. Rekam Medis (RM)</span>
                    <span class="font-mono font-semibold border px-2">
                        {{ $data->no_rm }}
                    </span>
                </div>
            </div>

                <!-- <div class="px-2 border-b border-gray-100">
                    <h3 class="text-lg font-bold text-blue-700 uppercase flex items-center mb-2">
                        <span class="w-8 h-8 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center mr-3 text-sm font-black">A</span>
                        Identitas Jenazah
                    </h3>

                    <div class="grid grid-cols-2 gap-x-4 gap-y-2 text-sm">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 uppercase tracking-wide">1. Nama Lengkap</span>
                            <span class="text-lg font-extrabold text-gray-900 w-full md:w-2/3">{{ $data->nama_lengkap }}</span>
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center">
                            <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 uppercase tracking-wide">2. NIK</span>
                            <span class="text-base font-bold text-gray-800 w-full md:w-2/3 tracking-widest">{{ $data->nik ?? '-' }}</span>
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center">
                            <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 uppercase tracking-wide">3. Jenis Kelamin</span>
                            <span class="text-base font-bold text-gray-800 w-full md:w-2/3">{{ $data->jenis_kelamin }}</span>
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center">
                            <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 uppercase tracking-wide">4. Tempat, Tgl Lahir</span>
                            <span class="text-base font-bold text-gray-800 w-full md:w-2/3">{{ $data->tempat_lahir }}, {{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d F Y') }}</span>
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center">
                            <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 uppercase tracking-wide">5. Agama</span>
                            <span class="text-base font-bold text-gray-800 w-full md:w-2/3">{{ $data->agama }}</span>
                        </div>

                        <div class="col-span-2 flex flex-col md:flex-row border-y border-gray-50">
                            <span class="text-sm font-semibold text-gray-500 w-full md:w-[16.6%] md:mb-0 uppercase tracking-wide">6. Alamat Lengkap</span>
                            <div class="w-full md:w-5/6">
                                <p class="text-base font-bold text-gray-800 leading-relaxed">
                                    {{ $data->alamat_jalan }} No. {{ $data->alamat_no }}, RT/RW {{ $data->alamat_rt_rw }}
                                </p>
                                <p class="text-sm text-gray-600 font-medium">
                                    Kel. {{ $data->alamat_kelurahan }}, Kec. {{ $data->alamat_kecamatan }}, {{ $data->alamat_kota }} ({{ $data->alamat_kodepos }})
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center">
                            <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 uppercase tracking-wide">7. Status Kependudukan</span>
                            <span class="text-base font-bold text-gray-800 w-full md:w-2/3">{{ $data->status_kependudukan }}</span>
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center">
                            <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 uppercase tracking-wide">8. Hubungan KK</span>
                            <span class="text-base font-bold text-gray-800 w-full md:w-2/3">{{ $data->hubungan_kk }}</span>
                        </div>

                        <div class="col-span-2 flex flex-col md:flex-row md:items-center">
                            <span class="text-sm font-bold text-gray-500 w-full md:w-1/3 uppercase tracking-wide">9. Waktu Meninggal</span>
                            <span class="text-lg font-black text-red-700 w-full md:w-2/3">
                                {{ \Carbon\Carbon::parse($data->waktu_meninggal)->format('d F Y - H:i') }} WIB
                            </span>
                        </div>
                    </div>
                </div> -->
                <div class="px-2 border-b border-gray-100 pb-2">
                    <h3 class="text-sm font-bold text-blue-700 uppercase flex items-center mb-2">
                        <span class="w-6 h-6 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center mr-3 text-sm font-black">A</span>
                        Identitas Jenazah
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2 text-sm">
                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">1. Nama Lengkap</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-900 font-extrabold uppercase">{{ $data->nama_lengkap }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">2. NIK</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold tracking-widest">{{ $data->nik ?? '-' }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">3. Jenis Kelamin</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->jenis_kelamin }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">4. Tempat, Tgl Lahir</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->tempat_lahir }}, {{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d F Y') }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">5. Agama</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->agama }}</span>
                        </div>

                        <div class="col-span-full flex items-start border-y border-gray-50 my-1">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">6. Alamat Lengkap</span>
                            <span class="mr-2">:</span>
                            <div class="text-gray-800 font-bold">
                                <p>{{ $data->alamat_jalan }} No. {{ $data->alamat_no }}, RT/RW {{ $data->alamat_rt_rw }}</p>
                                <p class="text-xs text-gray-600 font-medium uppercase">
                                    Kel. {{ $data->alamat_kelurahan }}, Kec. {{ $data->alamat_kecamatan }}, {{ $data->alamat_kota }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">7. Status Penduduk</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->status_kependudukan }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">8. Hubungan KK</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->hubungan_kk }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-32 md:w-56 shrink-0">9. Waktu Meninggal</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">
                                {{ \Carbon\Carbon::parse($data->waktu_meninggal)->format('d F Y - H:i') }} WIB
                            </span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-2">
                        <h3 class="text-sm font-bold text-green-700 uppercase flex items-center">
                            <span class="w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center mr-3 text-sm">B</span>
                            Keterangan Khusus Kasus Kematian di rumah sakit atau lainnya (termasuk Do'a)
                        </h3>
                        <div class="space-y-2 text-sm mt-3">
                            <div class="flex items-start">
                                <span class="text-gray-500 font-semibold w-32 md:w-36 shrink-0">1. Status Jenazah</span>
                                <span class="mr-2">:</span>
                                <span class="text-gray-900 font-bold uppercase">{{ $data->status_jenazah }}</span>
                            </div>

                            <div class="flex items-start">
                                <span class="text-gray-500 font-semibold w-32 md:w-36 shrink-0">2. Nama Pemeriksa Jenazah</span>
                                <span class="mr-2">:</span>
                                <span class="text-gray-900 font-bold">{{ $data->nama_pemeriksa }}</span>
                            </div>

                            <div class="flex items-start">
                                <span class="text-gray-500 font-semibold w-32 md:w-36 shrink-0">3. Waktu Pemeriksaan Jenazah</span>
                                <span class="mr-2">:</span>
                                <span class="text-gray-900 font-bold">
                                    {{ \Carbon\Carbon::parse($data->waktu_pemeriksaan)->format('d/m/Y - H:i') }} WIB
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2">
                        <h3 class="text-sm font-bold text-red-700 uppercase flex items-center">
                            <span class="w-6 h-6 bg-red-100 text-red-700 rounded-full flex items-center justify-center mr-3 text-sm">C</span>
                            Penyebab Kematian
                        </h3>
                        <div class="space-y-3 text-sm mt-3">
                            <div class="flex items-start">
                                <span class="text-gray-500 font-semibold w-32 md:w-36 shrink-0">1. Dasar Diagnosis</span>
                                <span class="mr-2">:</span>
                                <span class="text-gray-900 font-bold uppercase">{{ $data->dasar_diagnosis }}</span>
                            </div>

                            <div class="flex items-start">
                                <span class="text-gray-500 font-semibold w-32 md:w-36 shrink-0">2. Kelompok Penyebab</span>
                                <span class="mr-2">:</span>
                                <span class="text-gray-900 font-bold">{{ $data->kelompok_penyebab }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- BAGIAN TANDA TANGAN & PILIHAN PENYEBAB --}}
                    <div class="mt-1 px-2">
                        <div class="flex justify-between items-start text-sm">
                            <div class="text-center w-64">
                                <p class="mb-24">Pihak Yang Menerima,</p>
                                <p class="font-bold  min-w-[150px]">( ............................................ )</p>
                            </div>

                            <div class="text-center w-64">
                                <p>Padang, ....... / ....................................... /20......</p>
                                <p class="mb-20">Dokter Yang Menerangkan,</p>
                                <p class="font-bold  min-w-[150px]">( ............................................ )</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>