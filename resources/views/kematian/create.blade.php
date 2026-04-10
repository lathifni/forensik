<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Surat Keterangan Kematian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl p-8">
                
                <form action="{{ route('kematian.store') }}" method="POST">
                    @csrf

                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 mb-10">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Bulan / Tahun</label>
                                <div class="flex items-center space-x-2">
                                    <input type="number" name="header_bulan" min="1" max="12" class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="MM">
                                    <span class="text-gray-400">/</span>
                                    <input type="number" name="header_tahun" min="2020" class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="YYYY">
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Nama RS / Puskesmas</label>
                                <input type="text" name="nama_rs_puskesmas" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="RS Dr. M. Djamil Padang">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">No. Urut Kematian</label>
                                <input type="text" name="no_urut_kematian" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Contoh: 001">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Kode RS / Puskesmas</label>
                                <input type="text" name="kode_rs_puskesmas" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Kode Faskes">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase mb-1">No. RM (Rekam Medis)</label>
                                <input type="text" name="no_rm" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 font-mono" placeholder="XX-XX-XX">
                            </div>
                        </div>
                    </div>

                    <div class="mb-10">
                        <h3 class="text-lg font-bold text-blue-700 border-b-2 border-blue-100 pb-2 mb-6 uppercase tracking-wider">A. IDENTITAS JENAZAH</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-gray-700 mb-1">1. Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Masukkan nama lengkap jenazah" required>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">2. NIK</label>
                                <input type="text" name="nik" maxlength="16" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="16 digit NIK">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">3. Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">4. Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Kota/Kabupaten">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">5. Agama</label>
                                <select name="agama" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="" disabled selected>-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">7. Status Kependudukan</label>
                                <select name="status_kependudukan" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="" disabled selected>-- Pilih Status --</option>
                                    <option value="Penduduk">1. Penduduk</option>
                                    <option value="Bukan Penduduk">2. Bukan Penduduk</option>
                                </select>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-gray-700 mb-1">8. Hubungan dengan Kepala Keluarga</label>
                                <select name="hubungan_kk" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="" disabled selected>-- Pilih Hubungan Keluarga --</option>
                                    <option value="Kepala Keluarga">1. Kepala Keluarga</option>
                                    <option value="Suami/Istri">2. Suami/Istri</option>
                                    <option value="Anak">3. Anak</option>
                                    <option value="Menantu">4. Menantu</option>
                                    <option value="Cucu">5. Cucu</option>
                                    <option value="Orang tua/Mertua">6. Orang tua/Mertua</option>
                                    <option value="Famili Lain">7. Famili Lain</option>
                                    <option value="Pembantu Rumah Tangga">8. Pembantu Rumah Tangga</option>
                                    <option value="Lainnya">9. Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">9. Waktu Meninggal (Tanggal & Jam)</label>
                                <input type="datetime-local" name="waktu_meninggal" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">10. Tempat Meninggal</label>
                                <select name="tempat_meninggal" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="" disabled selected>-- Pilih Tempat Meninggal --</option>
                                    <option value="Rumah Sakit">1. Rumah Sakit</option>
                                    <option value="Puskesmas">2. Puskesmas</option>
                                    <option value="Rumah Bersalin">3. Rumah Bersalin</option>
                                    <option value="Rumah Tempat Tinggal">4. Rumah Tempat Tinggal</option>
                                    <option value="Lainnya">5. Lainnya</option>
                                </select>
                            </div>

                            <div class="md:col-span-2 border-t pt-4 mt-2">
                                <label class="block text-sm font-extrabold text-blue-800 mb-3 uppercase tracking-wider">6. Alamat Tempat Tinggal</label>
                                
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Nama Jalan / Gang</label>
                                        <input type="text" name="alamat_jalan" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Contoh: Jl. Perintis Kemerdekaan">
                                    </div>

                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 mb-1">No. Rumah</label>
                                        <input type="text" name="alamat_no" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="No. 123">
                                    </div>

                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 mb-1">RT / RW</label>
                                        <input type="text" name="alamat_rt_rw" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="001 / 002">
                                    </div>

                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Kelurahan / Desa</label>
                                        <input type="text" name="alamat_kelurahan" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Kelurahan ...">
                                    </div>

                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Kecamatan</label>
                                        <input type="text" name="alamat_kecamatan" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Kecamatan ...">
                                    </div>

                                    <div class="md:col-span-3">
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Kabupaten / Kota</label>
                                        <input type="text" name="alamat_kota" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Contoh: Kota Padang">
                                    </div>

                                    <div>
                                        <label class="block text-xs font-bold text-gray-600 mb-1">Kode Pos</label>
                                        <input type="text" name="alamat_kodepos" maxlength="5" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="25217">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-10" x-data="{ statusJenazah: '' }">
                        <h3 class="text-lg font-bold text-green-700 border-b-2 border-green-100 pb-2 mb-6 uppercase tracking-wider">
                            B. KETERANGAN KHUSUS (Kasus RS/Lainnya)
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">1. Status Jenazah</label>
                                <select name="status_jenazah" 
                                        x-model="statusJenazah"
                                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="" disabled selected>-- Pilih Status Jenazah --</option>
                                    <option value="Belum dimakamkan/Belum dikremasi">1. Belum dimakamkan/Belum dikremasi</option>
                                    <option value="Sudah dimakamkan/Sudah dikremasi">2. Sudah dimakamkan/Sudah dikremasi</option>
                                </select>
                            </div>

                            <div x-show="statusJenazah === 'Sudah'" 
                                x-transition 
                                x-cloak>
                                <label class="block text-sm font-bold text-gray-700 mb-1 text-red-600">Tanggal & Waktu Dimakamkan/Dikremasi</label>
                                <input type="datetime-local" 
                                    name="waktu_pemakaman" 
                                    class="w-full rounded-md border-red-300 shadow-sm focus:border-red-500 focus:ring-red-500">
                                <p class="text-xs text-red-500 mt-1 italic">*Wajib diisi karena sudah dimakamkan</p>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">2. Nama Pemeriksa Jenazah</label>
                                <input type="text" name="nama_pemeriksa" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Nama Dokter/Petugas">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">3. Waktu Pemeriksaan Jenazah</label>
                                <input type="datetime-local" name="waktu_pemeriksaan" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-lg font-bold text-red-700 border-b-2 border-red-100 pb-2 mb-6 uppercase tracking-wider">C. PENYEBAB KEMATIAN</h3>
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">1. Dasar Diagnosis</label>
                                <select name="dasar_diagnosis" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="" disabled selected>-- Pilih Dasar Diagnosis --</option>
                                    <option value="Rekam Medis">1. Rekam Medis</option>
                                    <option value="Pemeriksaan Luar Jenazah">2. Pemeriksaan Luar Jenazah</option>
                                    <option value="Autopsi Forensik">3. Autopsi Forensik</option>
                                    <option value="Autopsi Medis">4. Autopsi Medis</option>
                                    <option value="Autopsi Verbal">5. Autopsi Verbal</option>
                                    <option value="Surat Keterangan Lainnya">6. Surat Keterangan Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">2. Kelompok Penyebab Kematian</label>
                                <select name="kelompok_penyebab" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="" disabled selected>-- Pilih Kelompok Penyebab --</option>
                                    <option value="Penyakit Khusus">a. Penyakit Khusus</option>
                                    <option value="Penyakit Menular">b. Penyakit Menular</option>
                                    <option value="Penyakit Tidak Menular">c. Penyakit Tidak Menular</option>
                                    <option value="Gangguan Maternal">d. Gangguan Maternal</option>
                                    <option value="Gangguan Perinatal">e. Gangguan Perinatal</option>
                                    <option value="Gejala Tanda dan Kondisi Lainnya">f. Gejala Tanda dan Kondisi Lainnya</option>
                                    <option value="Cedera Kecelakaan Lalu Lintas">g. Cedera Kecelakaan Lalu Lintas</option>
                                    <option value="Cedera Kecelakaan Kerja">h. Cedera Kecelakaan Kerja</option>
                                    <option value="Cedera Lainnya">i. Cedera Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-12 space-x-4 border-t pt-6">
                        <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900 font-medium">Batal</a>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-10 rounded-xl shadow-lg shadow-blue-200 transition-all active:scale-95">
                            Simpan Laporan Kematian
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>