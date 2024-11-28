@extends('Template.index')

@section('nama_page')
    Buat Order
@endsection

@section('konten')
    <div class="h-full w-full">
        <div class="flex items-center justify-start w-full p-4">
            <h1 class="text-4xl text-gray-950 dark:text-gray-800 font-bold">Buat Order</h1>
            <a href="{{ route('order') }}"
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
            <div class="grid gap-2 mb-6 md:grid-cols-2">
                <div>
                    <label for="nama_user" class="block mb-2 text-sm font-medium text-gray-950 dark:text-gray-800">Nama
                        Petugas</label>
                    <input type="text" id="nama_user" name="nama_user"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required readonly />
                </div>
                <div>
                    <label for="nama_pelanggan" class="block mb-2 text-sm font-medium text-gray-950 dark:text-gray-800">Nama
                        Pelanggan</label>
                    <input type="text" id="nama_pelanggan" name="nama_pelanggan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <div>
                    <label for="nama_menu" class="block mb-2 text-sm font-medium text-gray-950 dark:text-gray-800">Nama
                        Menu</label>
                    <input type="text" id="nama_menu" name="nama_menu"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <div>
                    <label for="jumlah"
                        class="block mb-2 text-sm font-medium text-gray-950 dark:text-gray-800">Jumlah</label>
                    <input type="number" id="jumlah" name="jumlah"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <div>
                    <label for="no_meja"
                        class="block mb-2 text-sm font-medium text-gray-950 dark:text-gray-800">No Meja</label>
                    <select id="no_meja" size="2" name="no_meja"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
            </div>
            <div class="flex items-end">
                <button type="submit"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
            </div>
        </form>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
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
                            <td class="border border-gray-300 px-4 py-2">Rp 25.000</td>
                            <td class="border border-gray-300 px-4 py-2">
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
    </div>
@endsection
