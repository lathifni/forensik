<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Detail Jenazah: {{ $data->nama_lengkap }}
            </h2>
            <a href="{{ route('dashboard') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm font-bold">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                <div class="p-8 border-b border-gray-100">
                  <h3 class="text-lg font-bold text-blue-700 uppercase mb-8 flex items-center">
                      <span class="w-8 h-8 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center mr-3 text-sm font-black">A</span>
                      Identitas Jenazah
                  </h3>

                  <div class="space-y-6">
                      <div class="flex flex-col md:flex-row md:items-center border-b border-gray-50 pb-4">
                          <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 mb-1 md:mb-0 uppercase tracking-wide">1. Nama Lengkap</span>
                          <span class="text-lg font-extrabold text-gray-900 w-full md:w-2/3">{{ $data->nama_lengkap }}</span>
                      </div>

                      <div class="flex flex-col md:flex-row md:items-center border-b border-gray-50 pb-4">
                          <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 mb-1 md:mb-0 uppercase tracking-wide">2. NIK</span>
                          <span class="text-base font-bold text-gray-800 w-full md:w-2/3 tracking-widest">{{ $data->nik ?? '-' }}</span>
                      </div>

                      <div class="flex flex-col md:flex-row md:items-center border-b border-gray-50 pb-4">
                          <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 mb-1 md:mb-0 uppercase tracking-wide">3. Jenis Kelamin</span>
                          <span class="text-base font-bold text-gray-800 w-full md:w-2/3">{{ $data->jenis_kelamin }}</span>
                      </div>

                      <div class="flex flex-col md:flex-row md:items-center border-b border-gray-50 pb-4">
                          <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 mb-1 md:mb-0 uppercase tracking-wide">4. Tempat, Tgl Lahir</span>
                          <span class="text-base font-bold text-gray-800 w-full md:w-2/3">{{ $data->tempat_lahir }}, {{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d F Y') }}</span>
                      </div>

                      <div class="flex flex-col md:flex-row md:items-center border-b border-gray-50 pb-4">
                          <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 mb-1 md:mb-0 uppercase tracking-wide">5. Agama</span>
                          <span class="text-base font-bold text-gray-800 w-full md:w-2/3">{{ $data->agama }}</span>
                      </div>

                      <div class="flex flex-col md:flex-row md:items-center border-b border-gray-50 pb-4 bg-red-50/50 p-3 rounded-lg">
                          <span class="text-sm font-bold text-red-600 w-full md:w-1/3 mb-1 md:mb-0 uppercase tracking-wide">9. Waktu Meninggal</span>
                          <span class="text-lg font-black text-red-700 w-full md:w-2/3">
                              {{ \Carbon\Carbon::parse($data->waktu_meninggal)->format('d M Y - H:i') }} WIB
                          </span>
                      </div>

                      <div class="flex flex-col md:flex-row border-b border-gray-50 pb-4">
                          <span class="text-sm font-semibold text-gray-500 w-full md:w-1/3 mb-1 md:mb-0 uppercase tracking-wide">6. Alamat Lengkap</span>
                          <div class="w-full md:w-2/3">
                              <p class="text-base font-bold text-gray-800 leading-relaxed">
                                  {{ $data->alamat_jalan }} No. {{ $data->alamat_no }}, RT/RW {{ $data->alamat_rt_rw }}
                              </p>
                              <p class="text-sm text-gray-600 font-medium">
                                  Kel. {{ $data->alamat_kelurahan }}, Kec. {{ $data->alamat_kecamatan }}
                              </p>
                              <p class="text-sm text-gray-600 font-medium">
                                  {{ $data->alamat_kota }} ({{ $data->alamat_kodepos }})
                              </p>
                          </div>
                      </div>
                  </div>
              </div>

                <div class="grid grid-cols-1 md:grid-cols-2 divide-x divide-gray-100">
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-green-700 uppercase mb-6 flex items-center">
                            <span class="w-8 h-8 bg-green-100 text-green-700 rounded-full flex items-center justify-center mr-3 text-sm">B</span>
                            Keterangan Khusus
                        </h3>
                        <div class="space-y-4 text-sm">
                            <p class="flex justify-between">
                                <span class="text-gray-500">Status Jenazah:</span>
                                <span class="font-bold">{{ $data->status_jenazah }}</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="text-gray-500">Pemeriksa:</span>
                                <span class="font-bold">{{ $data->nama_pemeriksa }}</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="text-gray-500">Waktu Periksa:</span>
                                <span class="font-bold">{{ \Carbon\Carbon::parse($data->waktu_pemeriksaan)->format('d/m/Y H:i') }}</span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-red-700 uppercase mb-6 flex items-center">
                            <span class="w-8 h-8 bg-red-100 text-red-700 rounded-full flex items-center justify-center mr-3 text-sm">C</span>
                            Penyebab Kematian
                        </h3>
                        <div class="space-y-4 text-sm">
                            <p class="block">
                                <span class="text-gray-500 block mb-1">Dasar Diagnosis:</span>
                                <span class="font-bold p-2 bg-red-50 text-red-800 rounded block border border-red-100">{{ $data->dasar_diagnosis }}</span>
                            </p>
                            <p class="block">
                                <span class="text-gray-500 block mb-1">Kelompok Penyebab:</span>
                                <span class="font-bold p-2 bg-gray-100 text-gray-800 rounded block">{{ $data->kelompok_penyebab }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 text-center text-xs text-gray-400">
                    Data diinput pada: {{ $data->created_at->format('d M Y, H:i:s') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>