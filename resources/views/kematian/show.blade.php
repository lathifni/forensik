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

    <div class="py-2">
        <div class="max-w-5xl mx-auto">
            <div id="printableArea" class="bg-white overflow-hidden">
                
                <div class="hidden print:block mb-2 px-4">
                    <img src="{{ asset('images/kop_surat.png') }}" class="w-full h-auto">

                    <!-- Garis -->
                    <div class="border-b-2 border-black"></div>
                </div>

                <div class="print:text-black">
                    <h2 class="hidden print:block text-center text-xl font-black uppercase">Surat Keterangan Kematian</h2>
                    </div>
            </div>
        </div>
    </div>

    <style>
        @media print {

            @page {
                size: A4;
                /* Kita kasih margin tipis aja biar maksimal tapi gak kepotong printer */
                margin: 0.5cm 1.5cm 1cm 1.5cm !important; 
            }
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
                font-size: 10pt !important;
                line-height: 1.1 !important;
                color: black;
            }

            .p-2, .px-2, .py-2 {
                padding: 2px !important;
            }

            .gap-2, .gap-4, .gap-x-8 {
                gap: 4px !important;
            }

            .mb-2, .mb-3, .mb-4 {
                margin-bottom: 4px !important;
            }
        }
    </style>

    <div class="">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white overflow-hidden">
                <div class="grid grid-cols-2 gap-x-6 gap-y-1 text-sm">

                <!-- Baris 1 -->
                <div class="grid grid-cols-[160px_10px_1fr]">
                    <span class="text-gray-700">Bulan / Tahun</span>
                    <span>:</span>
                    <span class="font-semibold">{{ $data->header_bulan }} / {{ $data->header_tahun }}</span>
                </div>

                <div class="grid grid-cols-[160px_10px_1fr]">
                    <span class="text-gray-700">Nama RS/Puskesmas</span>
                    <span>:</span>
                    <span class="font-semibold">{{ $data->nama_rs_puskesmas }}</span>
                </div>

                <!-- Baris 2 -->
                <div class="grid grid-cols-[160px_10px_1fr]">
                    <span class="text-gray-700">Kode RS/Puskesmas</span>
                    <span>:</span>
                    <span class="font-semibold tracking-widest">{{ $data->kode_rs_puskesmas }}</span>
                </div>

                <div class="grid grid-cols-[160px_10px_1fr]">
                    <span class="text-gray-700">No. Urut Kematian</span>
                    <span>:</span>
                    <span class="font-semibold text-blue-700 underline">{{ $data->no_urut_kematian }}</span>
                </div>

                <!-- Baris 3 -->
                <div class="grid grid-cols-[160px_10px_1fr]">
                    <span class="text-gray-700">No. Rekam Medis (RM)</span>
                    <span>:</span>
                    <span class="font-semibold tracking-widest">{{ $data->no_rm }}</span>
                </div>

                <div></div> <!-- kosong biar balance -->

            </div>

                <div class="px-2 mt-4">
                    <h3 class="text-sm font-bold text-blue-700 uppercase flex items-center mb-2">
                        <span class="w-6 h-6 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center mr-3 text-sm font-black">A</span>
                        Identitas Jenazah
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2 text-xs">
                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">1. Nama Lengkap</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-900 font-extrabold uppercase">{{ $data->nama_lengkap }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">2. NIK</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold tracking-widest">{{ $data->nik ?? '-' }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">3. Jenis Kelamin</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->jenis_kelamin }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">4. Tempat, Tgl Lahir</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->tempat_lahir }}, {{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d F Y') }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">5. Agama</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->agama }}</span>
                        </div>

                        <div class="col-span-full flex items-start my-1">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">6. Alamat Lengkap</span>
                            <span class="mr-2">:</span>
                            <div class="text-gray-800 font-bold">
                                <p>{{ $data->alamat_jalan }} No. {{ $data->alamat_no }}, RT/RW {{ $data->alamat_rt_rw }}</p>
                                <p class="text-xs text-gray-600 font-medium uppercase">
                                    Kel. {{ $data->alamat_kelurahan }}, Kec. {{ $data->alamat_kecamatan }}, {{ $data->alamat_kota }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">7. Status Penduduk</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->status_kependudukan }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">8. Hubungan KK</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">{{ $data->hubungan_kk }}</span>
                        </div>

                        <div class="flex items-start">
                            <span class="text-gray-500 font-semibold w-44 md:w-56 shrink-0">9. Waktu Meninggal</span>
                            <span class="mr-2">:</span>
                            <span class="text-gray-800 font-bold">
                                {{ \Carbon\Carbon::parse($data->waktu_meninggal)->format('d F Y - H:i') }} WIB
                            </span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-2 mt-4">
                        <h3 class="text-sm font-bold text-green-700 uppercase flex items-center">
                            <span class="w-6 h-6 bg-green-100 text-green-700 rounded-full flex items-center justify-center mr-3 text-sm mb-2">B</span>
                            Keterangan Khusus Kasus Kematian di rumah sakit atau lainnya (termasuk Do'a)
                        </h3>
                        <div class="space-y-2 text-xs">
                            <div class="flex items-start">
                                <span class="text-gray-500 font-semibold w-44 md:w-36 shrink-0">1. Status Jenazah</span>
                                <span class="mr-2">:</span>
                                <span class="text-gray-900 font-bold">{{ $data->status_jenazah }}</span>
                            </div>

                            <div class="flex items-start">
                                <span class="text-gray-500 font-semibold w-44 md:w-36 shrink-0">2. Nama Pemeriksa Jenazah</span>
                                <span class="mr-2">:</span>
                                <span class="text-gray-900 font-bold">{{ $data->nama_pemeriksa }}</span>
                            </div>

                            <div class="flex items-start">
                                <span class="text-gray-500 font-semibold w-44 md:w-36 shrink-0">3. Waktu Pemeriksaan Jenazah</span>
                                <span class="mr-2">:</span>
                                <span class="text-gray-900 font-bold">
                                    {{ \Carbon\Carbon::parse($data->waktu_pemeriksaan)->format('d/m/Y - H:i') }} WIB
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2 mt-4">
                        <h3 class="text-sm font-bold text-red-700 uppercase flex items-center mb-3">
                            <span class="w-6 h-6 bg-red-100 text-red-700 rounded-full flex items-center justify-center mr-3 text-sm">C</span>
                            Penyebab Kematian
                        </h3>

                        <div class="space-y-4 text-xs leading-tight text-gray-800">
                            <div class="flex items-start">
                                <span class="w-40 shrink-0 font-semibold ">1. Dasar Diagnosis</span>
                                <span class="mr-4">:</span>
                                <div class="grid grid-cols-2 gap-x-8 gap-y-1 flex-1">
                                    @php
                                        $dasarOptions = [
                                            'REKAM MEDIS', 'PEMERIKSAAN LUAR JENAZAH', 
                                            'AUTOPSI FORENSIK', 'AUTOPSI MEDIS', 'AUTOPSI VERBAL'
                                        ];
                                    @endphp
                                    @foreach($dasarOptions as $idx => $opt)
                                        <div class="flex items-center">
                                            <span class="inline-block w-4 h-4 border border-black mr-2 text-center leading-3 font-bold">
                                                {{ strtoupper($data->dasar_diagnosis) == $opt ? '✓' : '' }}
                                            </span>
                                            <span>{{ $idx + 1 }}. {{ $opt }}</span>
                                        </div>
                                    @endforeach
                                    <div class="flex items-center">
                                        <span class="inline-block w-4 h-4 border border-black mr-2 text-center leading-3">
                                            {{ !in_array(strtoupper($data->dasar_diagnosis), $dasarOptions) ? '✓' : '' }}
                                        </span>
                                        <span>6. SURAT KETERANGAN LAINNYA....</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col mt-2">
                                <span class="font-semibold mb-2">2. Kelompok Penyebab Kematian (Tanda ✓ pada salah satu)</span>
                                <div class="grid grid-cols-3 gap-y-2 pl-4">
                                    @php
                                        $penyebabOptions = [
                                            'a' => 'Penyakit Khusus',
                                            'b' => 'Penyakit Menular',
                                            'c' => 'Penyakit Tidak Menular',
                                            'd' => 'Gangguan Maternal',
                                            'e' => 'Gangguan Perinatal',
                                            'f' => 'Gejala, Tanda dan kondisi lainnya',
                                            'g' => 'Cedera Kecelakaan Lalu Lintas',
                                            'h' => 'Cedera Kecelakaan Kerja',
                                            'i' => 'Cedera Lainnya'
                                        ];
                                    @endphp
                                    @foreach($penyebabOptions as $key => $val)
                                        <div class="flex items-center">
                                            <span class="inline-block w-4 h-4 border border-black mr-2 text-center leading-3 font-bold">
                                                {{-- Kita cek apakah data di DB sama dengan value opsi ini --}}
                                                {{ strtolower($data->kelompok_penyebab) == strtolower($val) ? '✓' : '' }}
                                            </span>
                                            <span>{{ $key }}. {{ $val }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                    {{-- BAGIAN TANDA TANGAN & PILIHAN PENYEBAB --}}
                    <div class="py-2" x-data="{ 
                        namaPenerima: '', 
                        namaDokter: '', 
                        nipDokter: '',
                        tglSurat: '{{ date('d F Y') }}' 
                    }">
                            
                            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-xl shadow-md mb-8 print:hidden">
                                <h4 class="text-sm font-bold text-yellow-800 mb-4 uppercase tracking-wider flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                                    Data Tanda Tangan & NIP
                                </h4>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 uppercase">Tanggal Surat</label>
                                        <input type="text" x-model="tglSurat" class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 uppercase">Nama Pihak yg Penerima</label>
                                        <input type="text" x-model="namaPenerima" class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 text-sm" placeholder="Ketik nama...">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 uppercase">Nama Dokter yg Menerangkan</label>
                                        <input type="text" x-model="namaDokter" class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 text-sm" placeholder="Ketik nama dokter...">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 uppercase">NIP Dokter yg Menerangkan</label>
                                        <input type="text" x-model="nipDokter" class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-yellow-500 focus:border-yellow-500 text-sm" placeholder="Ketik NIP...">
                                    </div>
                                </div>
                            </div>

                            <div id="printableArea" class="bg-white overflow-hidden shadow-xl rounded-2xl print:shadow-none print:rounded-none">
                                
                               <div class="px-2 mt-4">
                                    <div class="flex justify-between items-end text-sm"> 
                                        <div class="text-center w-64 flex flex-col justify-between min-h-[220px]">
                                            <p class="mb-auto italic text-gray-700 font-medium">Pihak Yang Menerima,</p>
                                            
                                            <div class="flex flex-col items-center w-full px-2">
                                                <span class="font-bold leading-tight mb-1" x-text="namaPenerima"></span>
                                                <template x-if="!namaPenerima">
                                                    <span class="text-gray-400 italic mb-1">................................................</span>
                                                </template>
                                                
                                                <div class="border-b-2 border-black w-full shadow-sm"></div>

                                                <div class="mt-1 flex justify-center w-full font-medium">
                                                    <span class="invisible">NIP. 000000000</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center w-80 flex flex-col justify-between min-h-[220px]">
                                            <p class="mb-2 text-gray-800">Padang, <span class="font-bold" x-text="tglSurat"></span></p>
                                            <p class="mb-auto italic text-gray-700 font-medium">Dokter Yang Menerangkan,</p>
                                            
                                            <div class="flex flex-col items-center w-full px-2">
                                                <span class="font-bold leading-tight mb-1" x-text="namaDokter"></span>
                                                <template x-if="!namaDokter">
                                                    <span class="text-gray-400 italic mb-1">................................................</span>
                                                </template>

                                                <div class="border-b-2 border-black w-full shadow-sm"></div>
                                                
                                                <div class="mt-1 flex justify-center w-full font-medium">
                                                    <span class="mr-1">NIP.</span>
                                                    <span x-text="nipDokter"></span>
                                                    <template x-if="!nipDokter">
                                                        <span>................................................</span>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>

                    <style>
                        @media print {
                            /* Pastikan kontainer utama tidak ikut hilang */
                            .print\:hidden { display: none !important; }
                            
                            /* Paksa teks hitam pekat pas print */
                            span, p, div { color: black !important; }
                        }
                    </style>

                <div class="flex justify-between items-center m-4 print:hidden">
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
            </div>
        </div>
    </div>
</x-app-layout>