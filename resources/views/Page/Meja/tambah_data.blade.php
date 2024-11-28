@extends('Template.index')

@section('nama_page')
    Tambah Data Meja
@endsection

@section('konten')
    <div class="h-full w-full">
        <div class="flex items-center justify-start w-full p-4">
            <h1 class="text-4xl text-gray-950 dark:text-gray-800 font-bold">Tambah Data Meja</h1>
            <a href="{{ route('meja') }}"
                class="w-fit mx-4 bg-gray-600 text-white px-4 py-2 rounded flex items-center hover:bg-gray-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Kembali
            </a>
        </div>

        <form method="post">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="no_meja" class="block mb-2 text-sm font-medium text-gray-950 dark:text-gray-800">No
                        Meja</label>
                    <input type="text" id="no_meja" name="no_meja"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required value="{{ $idmnu }}" readonly />
                </div>
                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-950 dark:text-gray-800">Status</label>
                    <select id="status" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Kosong</option>
                        <option>Terisi</option>
                    </select>
                </div>
            </div>
            <div class="flex items-end">
                <button type="submit"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
            </div>
        </form>

    </div>
@endsection
