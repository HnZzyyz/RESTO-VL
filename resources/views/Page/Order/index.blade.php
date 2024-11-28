@extends('Template.index')

@section('nama_page')
    Order
@endsection

@section('konten')
    <div class="h-full w-full">
        <div class="flex items-center justify-start w-full p-4">
            <h1 class="text-4xl text-gray-950 dark:text-gray-800 font-bold">Order</h1>
        </div>
        <div class="flex mt-8">
            <div class="overflow-x-auto w-full">
                <table class="w-full rounded- border-collapse border border-gray-300 bg-gray-200">
                    <thead>
                        <tr class="bg-gray-600 text-white">
                            <th class="border border-gray-300 px-4 py-2 text-left">ID Pesanan</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama Menu</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama Pelanggan</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Jumlah</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama Petugas</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">No Meja</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr class="hover:bg-blue-50">
                                <td class="border border-gray-300 px-4 py-2">1</td>
                                <td class="border border-gray-300 px-4 py-2">Kelinci Bakar</td>
                                <td class="border border-gray-300 px-4 py-2">Braga</td>
                                <td class="border border-gray-300 px-4 py-2">2</td>
                                <td class="border border-gray-300 px-4 py-2">Deru</td>
                                <td class="border border-gray-300 px-4 py-2">1</td>
                                <td class="border border-gray-300 px-4 py-2">Belum Bayar</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"
                                        href="/meja/ubah/">Ubah</a>
                                    <a class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                                        href="/meja/hapus/">Hapus</a>
                                </td>
                            </tr>
                            <tr class="hover:bg-blue-50">
                                <td class="border border-gray-300 px-4 py-2">1</td>
                                <td class="border border-gray-300 px-4 py-2">Gulai Ayam</td>
                                <td class="border border-gray-300 px-4 py-2">Braga</td>
                                <td class="border border-gray-300 px-4 py-2">1</td>
                                <td class="border border-gray-300 px-4 py-2">Deru</td>
                                <td class="border border-gray-300 px-4 py-2">1</td>
                                <td class="border border-gray-300 px-4 py-2">Belum Bayar</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"
                                        href="/meja/ubah/">Ubah</a>
                                    <a class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                                        href="/meja/hapus/">Hapus</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
                {{-- <div class="mt-4">
                    {{ $data->onEachSide(1)->links('vendor.pagination') }}
                </div> --}}
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <a href="{{ route('meja-tambah-data') }}"
                class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">
                Buat Order
            </a>
        </div>
    </div>
@endsection
