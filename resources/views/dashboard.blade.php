<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard Forensik - RS M. Djamil') }}
            </h2>
            
            <a href="{{ route('kematian.export') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow-sm flex items-center transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Export ke Excel
            </a>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="mb-4">
                <a href="{{ route('kematian.create') }}" class="inline-flex items-center p-4 bg-blue-600 border border-transparent rounded-xl font-bold text-base text-white uppercase tracking-widest hover:bg-blue-700 shadow-lg shadow-blue-200 active:bg-blue-900 transition ease-in-out duration-150">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambahkan Surat Keterangan Kematian
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-4 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Data Terbaru</h3>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">No. Kasus</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Nama Jenazah</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Tgl Kematian</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Nama Pemeriksa</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 text-sm">
                                @forelse($listKematian as $data)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-700">
                                            {{ $data->nik ?? '-' }} </td>
                                        <td class="px-6 py-4 whitespace-nowrap font-bold text-gray-900">
                                            {{ $data->nama_lengkap }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                            {{ $data->created_at->format('d M Y H:i') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                            {{ $data->nama_pemeriksa }} </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('kematian.show', $data->id) }}" class="text-blue-600 hover:text-blue-900 font-bold bg-blue-50 px-3 py-1 rounded-full transition">
                                                Lihat Detail
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-10 text-center text-gray-500 italic">
                                            Belum ada data kematian yang diinput.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{-- BAGIAN NAVIGASI HALAMAN (NEXT/PREVIOUS) --}}
                    <div class="mt-6">
                        {{ $listKematian->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>