@extends('Template.index')

@section('nama_page')
    Dashboard
@endsection

@section('konten')
<div class="h-full w-full">
    <div class="flex items-center justify-start w-full p-4">
        <h1 class="text-4xl text-gray-950 dark:text-gray-800" style="font-weight: bolder;">Dashboard</h1>
    </div>
    <div class="flex items-center justify-center mt-44">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Menu Makanan -->
                <div
                    class="flex flex-col items-center justify-center max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-3 text-gray-700 dark:text-gray-400" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M2 2h20v8H2zm6 2.998H5.996v2.004h2v-.004H8zm10 0h-8v2h8zM2 12h20v10H2z" />
                    </svg>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Menu Makanan :</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">10</p>
                </div>
                <!-- Total Meja -->
                <div
                    class="flex flex-col items-center justify-center max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-3 text-gray-700 dark:text-gray-400" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M253.8 30.44c-9.5 1.2-18.1 12.3-18.1 26.8c0 8 2.7 15 6.7 19.9l4.9 5.8l-7.5 1.4c-5.2 1-9 3.8-12.3 8.3c-3.4 4.6-5.9 10.76-7.6 18.06c-3.2 13.1-3.9 29.1-4 43.3h17.5l1.6 21.9c6.8-.3 13.8-.5 20.9-.5q11.25 0 21.9.6l1.5-22h16.6c0-14.3-.2-30.6-3.1-43.9c-1.6-7.2-4-13.46-7.3-17.96s-7.4-7.2-13.3-8.1l-7.6-1.2l4.8-6c3.9-4.8 6.5-11.8 6.5-19.6c0-15.4-9.6-26.8-20.1-26.8zM61.9 174.4c-9.5 1.2-18.1 12.3-18.1 26.8c0 8 2.7 15 6.7 19.9l4.9 5.8l-7.5 1.4c-5.2 1-9 3.8-12.3 8.3c-3.4 4.6-5.9 10.8-7.6 18.1c-3.2 13.1-3.9 29.1-4 43.3h17.5l4.7 64.3c12.2 2.8 25.2 2.6 36.94 0l4.3-64.3H104c0-14.3-.2-30.6-3.1-43.9c-1.57-7.2-3.97-13.5-7.27-18c-3.29-4.5-7.39-7.2-13.29-8.1l-7.64-1.2l4.8-6c3.94-4.8 6.54-11.8 6.54-19.6c0-15.4-9.64-26.8-20.14-26.8zm384 0c-9.5 1.2-18.1 12.3-18.1 26.8c0 8 2.7 15 6.7 19.9l4.9 5.8l-7.5 1.4c-5.2 1-9 3.8-12.3 8.3c-3.4 4.6-5.9 10.8-7.6 18.1c-3.2 13.1-3.9 29.1-4 43.3h17.5l4.7 64.3c12.2 2.8 25.2 2.6 36.9 0l4.3-64.3H488c0-14.3-.2-30.6-3.1-43.9c-1.6-7.2-4-13.5-7.3-18s-7.4-7.2-13.3-8.1l-7.6-1.2l4.8-6c3.9-4.8 6.5-11.8 6.5-19.6c0-15.4-9.6-26.8-20.1-26.8zm-190 19c-36.7 0-69.9 5.3-93.2 13.5c-11.6 4.1-20.7 9-26.3 13.7c-5.7 4.7-7.5 8.6-7.5 11.8s1.8 7.1 7.5 11.8c5.6 4.7 14.7 9.5 26.3 13.7c23.3 8.2 56.5 13.5 93.2 13.5s69.9-5.3 93.2-13.5c11.6-4.2 20.7-9 26.3-13.7c5.7-4.7 7.5-8.6 7.5-11.8s-1.8-7.1-7.5-11.8c-5.6-4.7-14.7-9.6-26.3-13.7c-23.3-8.2-56.5-13.5-93.2-13.5m-105 79.2v45.8h18v-39.8c-4.2-1.2-8.3-2.4-12.2-3.8c-2-.7-3.9-1.4-5.8-2.2m210 0c-1.9.8-3.8 1.5-5.8 2.2c-3.9 1.4-8 2.6-12.2 3.8v39.8h18zm-107.1 19c-9.5 1.2-18.1 12.3-18.1 26.8c0 8 2.7 15 6.7 19.9l4.9 5.8l-7.5 1.4c-5.2 1-9 3.8-12.3 8.3c-3.4 4.6-5.9 10.8-7.6 18.1c-3.2 13.1-3.9 29.1-4 43.3h17.5l4.7 64.3c12.2 2.8 25.2 2.6 36.9 0l4.3-64.3h16.6c0-14.3-.2-30.6-3.1-43.9c-1.6-7.2-4-13.5-7.3-18s-7.4-7.2-13.3-8.1l-7.6-1.2l4.8-6c3.9-4.8 6.5-11.8 6.5-19.6c0-15.4-9.6-26.8-20.1-26.8z" />
                    </svg>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Meja :</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">10</p>
                </div>
                <!-- Pelanggan -->
                <div
                    class="flex flex-col items-center justify-center max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg class="w-12 h-12 mb-3 text-gray-700 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A12.053 12.053 0 0112 15c2.293 0 4.443.672 6.121 1.804M8.5 9a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z" />
                    </svg>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pelanggan :</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">10</p>
                </div>
                <!-- Order -->
                <div
                    class="flex flex-col items-center justify-center max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg class="w-12 h-12 mb-3 text-gray-700 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 6h6M9 18h6" />
                    </svg>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Order :</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">10</p>
                </div>
                <!-- Transaksi -->
                <div
                    class="flex flex-col items-center justify-center max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <svg class="w-12 h-12 mb-3 text-gray-700 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8M4 18h16" />
                    </svg>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Transaksi :</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">10</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
