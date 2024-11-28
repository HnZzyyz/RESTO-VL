
@extends('Template.index')

@section('nama_page')
    Data Pelanggan
@endsection

@section('konten')
    <div class="h-full w-full">
        <div class="flex items-center justify-start w-full p-4">
            <h1 class="text-4xl text-gray-950 dark:text-gray-800 font-bold">Data Pelanggan</h1>
        </div>
        <div class="flex mt-8">
            <div class="overflow-x-auto w-full">
                <table class="w-full rounded- border-collapse border border-gray-300 bg-gray-200">
                    <thead>
                        <tr class="bg-gray-600 text-white">
                            <th class="border border-gray-300 px-4 py-2 text-left">ID Pelanggan</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama Pelanggan</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Jenis Kelamin</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">No Handphone</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Alamat</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $a)
                            <tr class="hover:bg-blue-50">
                                <td class="border border-gray-300 px-4 py-2">{{ $a->id_pelanggan }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $a->nama_pelanggan }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $a->jenis_kelamin }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $a->no_hp }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $a->alamat }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"
                                        href="/pelanggan/ubah/{{ $a->id_pelanggan }}">Ubah</a>
                                    <a class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                                        href="/pelanggan/hapus/{{ $a->id_pelanggan }}">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $data->onEachSide(1)->links('vendor.pagination') }}
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <a href="{{ route('pelanggan-tambah-data') }}"
                class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">
                Tambah Data
            </a>
        </div>
    </div>
@endsection