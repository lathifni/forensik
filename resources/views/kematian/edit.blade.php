<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Jenazah: {{ $data->nama_lengkap }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <form action="{{ route('kematian.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    {{-- HEADER SECTION --}}
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 mb-10">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Bulan / Tahun</label>
                                <div class="flex items-center space-x-2">
                                    <input type="number" name="header_bulan" value="{{ $data->header_bulan }}" min="1" max="12" class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <span class="text-gray-400">/</span>
                                    <input type="number" name="header_tahun" value="{{ $data->header_tahun }}" min="2020" class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nama RS / Puskesmas</label>
                                <input type="text" name="nama_rs_puskesmas" value="{{ $data->nama_rs_puskesmas }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">No. Urut Kematian</label>
                                <input type="text" name="no_urut_kematian" value="{{ $data->no_urut_kematian }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Kode RS / Puskesmas</label>
                                <input type="text" name="kode_rs_puskesmas" value="{{ $data->kode_rs_puskesmas }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">No. RM (Rekam Medis)</label>
                                <input type="text" name="no_rm" value="{{ $data->no_rm }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 font-mono">
                            </div>
                        </div>
                    </div>

                    {{-- A. IDENTITAS JENAZAH --}}
                    <div class="mb-10">
                        <h3 class="text-lg font-bold text-blue-700 border-b-2 border-blue-100 pb-2 mb-6 uppercase tracking-wider">A. IDENTITAS JENAZAH</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-gray-700 mb-1">1. Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="{{ $data->nama_lengkap }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">2. NIK</label>
                                <input type="text" name="nik" value="{{ $data->nik }}" maxlength="16" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">3. Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">4. Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="{{ $data->tempat_lahir }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">5. Agama</label>
                                <select name="agama" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    @foreach(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Lainnya'] as $agm)
                                        <option value="{{ $agm }}" {{ $data->agama == $agm ? 'selected' : '' }}>{{ $agm }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">7. Status Kependudukan</label>
                                <select name="status_kependudukan" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="Penduduk" {{ $data->status_kependudukan == 'Penduduk' ? 'selected' : '' }}>1. Penduduk</option>
                                    <option value="Bukan Penduduk" {{ $data->status_kependudukan == 'Bukan Penduduk' ? 'selected' : '' }}>2. Bukan Penduduk</option>
                                </select>
                            </div>

                            <div class="md:col-span-2 border-t pt-4 mt-2">
                                <label class="block text-sm font-extrabold text-gray-700 mb-3 uppercase tracking-wider">6. Alamat Tempat Tinggal</label>
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Nama Jalan / Gang</label>
                                        <input type="text" name="alamat_jalan" value="{{ $data->alamat_jalan }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 mb-1">No. Rumah</label>
                                        <input type="text" name="alamat_no" value="{{ $data->alamat_no }}" class="w-full rounded-md border-gray-300 shadow-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 mb-1">RT / RW</label>
                                        <input type="text" name="alamat_rt_rw" value="{{ $data->alamat_rt_rw }}" class="w-full rounded-md border-gray-300 shadow-sm">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Kelurahan / Desa</label>
                                        <input type="text" name="alamat_kelurahan" value="{{ $data->alamat_kelurahan }}" class="w-full rounded-md border-gray-300 shadow-sm">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Kecamatan</label>
                                        <input type="text" name="alamat_kecamatan" value="{{ $data->alamat_kecamatan }}" class="w-full rounded-md border-gray-300 shadow-sm">
                                    </div>
                                    <div class="md:col-span-3">
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Kabupaten / Kota</label>
                                        <input type="text" name="alamat_kota" value="{{ $data->alamat_kota }}" class="w-full rounded-md border-gray-300 shadow-sm">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Kode Pos</label>
                                        <input type="text" name="alamat_kodepos" value="{{ $data->alamat_kodepos }}" maxlength="5" class="w-full rounded-md border-gray-300 shadow-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-gray-700 mb-1">8. Hubungan dengan Kepala Keluarga</label>
                                <select name="hubungan_kk" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    @php
                                        $hubs = [
                                            'Kepala Keluarga', 'Suami/Istri', 'Anak', 'Menantu', 'Cucu', 
                                            'Orang tua/Mertua', 'Famili Lain', 'Pembantu Rumah Tangga', 'Lainnya'
                                        ];
                                    @endphp
                                    @foreach($hubs as $key => $h)
                                        <option value="{{ $h }}" {{ $data->hubungan_kk == $h ? 'selected' : '' }}>{{ $key+1 }}. {{ $h }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">9. Waktu Meninggal (Tanggal & Jam)</label>
                                {{-- Format Y-m-d\TH:i diperlukan untuk input datetime-local --}}
                                <input type="datetime-local" name="waktu_meninggal" value="{{ $data->waktu_meninggal ? date('Y-m-d\TH:i', strtotime($data->waktu_meninggal)) : '' }}" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">10. Tempat Meninggal</label>
                                <select name="tempat_meninggal" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    @php
                                        $temps = ['Rumah Sakit', 'Puskesmas', 'Rumah Bersalin', 'Rumah Tempat Tinggal', 'Lainnya'];
                                    @endphp
                                    @foreach($temps as $key => $t)
                                        <option value="{{ $t }}" {{ $data->tempat_meninggal == $t ? 'selected' : '' }}>{{ $key+1 }}. {{ $t }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- B. KETERANGAN KHUSUS --}}
                    <div class="mb-10" x-data="{ statusJenazah: '{{ $data->status_jenazah }}' }">
                      <h3 class="text-lg font-bold text-green-700 border-b-2 border-green-100 pb-2 mb-6 uppercase tracking-wider">B. KETERANGAN KHUSUS</h3>
                      
                      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                          <div>
                              <label class="block text-sm font-bold text-gray-700 mb-1">1. Status Jenazah</label>
                              <select name="status_jenazah" 
                                      x-model="statusJenazah" 
                                      class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                  <option value="Belum dimakamkan/Belum dikremasi" {{ $data->status_jenazah == 'Belum dimakamkan/Belum dikremasi' ? 'selected' : '' }}>1. Belum dimakamkan/Belum dikremasi</option>
                                  <option value="Sudah dimakamkan/Sudah dikremasi" {{ $data->status_jenazah == 'Sudah dimakamkan/Sudah dikremasi' ? 'selected' : '' }}>2. Sudah dimakamkan/Sudah dikremasi</option>
                              </select>
                          </div>

                          <div x-show="statusJenazah === 'Sudah dimakamkan/Sudah dikremasi'" 
                              x-transition 
                              x-cloak>
                              <label class="block text-sm font-bold text-red-600 mb-1 uppercase">Tanggal & Jam Dimakamkan</label>
                              <input type="datetime-local" 
                                    name="waktu_pemakaman" 
                                    value="{{ $data->waktu_pemakaman ? date('Y-m-d\TH:i', strtotime($data->waktu_pemakaman)) : '' }}" 
                                    class="w-full rounded-md border-red-300 shadow-sm focus:border-red-500 focus:ring-red-500 bg-red-50">
                              <p class="text-xs text-red-500 mt-1 italic">*Wajib diupdate jika status berubah jadi sudah dimakamkan</p>
                          </div>

                          <div>
                              <label class="block text-sm font-bold text-gray-700 mb-1">2. Nama Pemeriksa Jenazah</label>
                              <input type="text" name="nama_pemeriksa" value="{{ $data->nama_pemeriksa }}" class="w-full rounded-md border-gray-300 shadow-sm">
                          </div>

                          <div>
                              <label class="block text-sm font-bold text-gray-700 mb-1">3. Waktu Pemeriksaan Jenazah</label>
                              <input type="datetime-local" name="waktu_pemeriksaan" value="{{ $data->waktu_pemeriksaan ? date('Y-m-d\TH:i', strtotime($data->waktu_pemeriksaan)) : '' }}" class="w-full rounded-md border-gray-300 shadow-sm">
                          </div>
                      </div>
                  </div>

                    {{-- C. PENYEBAB KEMATIAN --}}
                    <div class="mb-8">
                        <h3 class="text-lg font-bold text-red-700 border-b-2 border-red-100 pb-2 mb-6 uppercase tracking-wider">C. PENYEBAB KEMATIAN</h3>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">1. Dasar Diagnosis</label>
                                <select name="dasar_diagnosis" class="w-full rounded-md border-gray-300 shadow-sm">
                                    @foreach(['Rekam Medis', 'Pemeriksaan Luar Jenazah', 'Autopsi Forensik', 'Autopsi Medis', 'Autopsi Verbal', 'Surat Keterangan Lainnya'] as $key => $diag)
                                        <option value="{{ $diag }}" {{ $data->dasar_diagnosis == $diag ? 'selected' : '' }}>{{ $key+1 }}. {{ $diag }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">2. Kelompok Penyebab Kematian</label>
                                <select name="kelompok_penyebab" class="w-full rounded-md border-gray-300 shadow-sm">
                                    @php
                                        $causals = [
                                            'a' => 'Penyakit Khusus', 'b' => 'Penyakit Menular', 'c' => 'Penyakit Tidak Menular',
                                            'd' => 'Gangguan Maternal', 'e' => 'Gangguan Perinatal', 'f' => 'Gejala Tanda dan Kondisi Lainnya',
                                            'g' => 'Cedera Kecelakaan Lalu Lintas', 'h' => 'Cedera Kecelakaan Kerja', 'i' => 'Cedera Lainnya'
                                        ];
                                    @endphp
                                    @foreach($causals as $key => $val)
                                        <option value="{{ $val }}" {{ $data->kelompok_penyebab == $val ? 'selected' : '' }}>{{ $key }}. {{ $val }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end space-x-2">
                      <a href="{{ route('kematian.show', $data->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Batal</a>
                      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-bold">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>