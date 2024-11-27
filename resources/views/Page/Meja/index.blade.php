@extends('Template.index')

@section('nama_page')
    Data Meja
@endsection

@section('konten')
    <div class="h-full w-full">
        <div class="flex items-center justify-start w-full p-4">
            <h1 class="text-4xl text-gray-950 dark:text-gray-800 font-bold">Data Meja</h1>
        </div>
        <div class="flex mt-8">
            <div class="overflow-x-auto w-full">
                <table class="w-full rounded- border-collapse border border-gray-300 bg-gray-200">
                    <thead>
                        <tr class="bg-gray-600 text-white">
                            <th class="border border-gray-300 px-4 py-2 text-left">No Meja</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $a)
                            <tr class="hover:bg-blue-50">
                                <td class="border border-gray-300 px-4 py-2">{{ $a->no_meja }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $a->status }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"
                                        href="/meja/ubah/{{ $a->no_meja }}">Ubah</a>
                                    <a class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                                        href="/meja/hapus/{{ $a->no_meja }}">Hapus</a>
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
            <a href="{{ route('meja-tambah-data') }}"
                class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">
                Tambah Data
            </a>
        </div>
    </div>
@endsection
