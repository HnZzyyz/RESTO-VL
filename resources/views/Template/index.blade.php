<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }

        .sidebar-closed {
            transform: translateX(-100%);
        }
    </style>
</head>

<body class="bg-gray-600 flex flex-col md:flex-row p-4 gap-4">
    <div style="height: 97vh;"
        class="md:h-full bg-slate-100 shadow-[0_0_10px_0_rgba(100,116,139,0.7)] rounded p-4 w-1/6 flex flex-col justify-between">
        <!-- Bagian atas: Judul dan menu -->
        <div>
            <div class="text-center h-14">
                <h1 class="text-xl md:text-3xl font-poppins font-bold text-gray-800">RESTO-VL</h1>
            </div>

            <!-- Judul Main Menu -->
            <div class="mt-4 mb-2">
                <h2 class="text-lg font-semibold text-gray-700">Main Menu :</h2>
            </div>

            <div class="space-y-4">
                <a href="#"
                    class="w-full bg-gray-600 text-white px-4 py-2 rounded flex items-center outline hover:bg-gray-700 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 14 14">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M1 0a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm7 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2.01a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1zm0 6a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1zm-8 3.99a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1V13a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Dashboard
                </a>
                <a href="#"
                    class="w-full bg-gray-600 text-white px-4 py-2 rounded flex items-center outline hover:bg-gray-700 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M2 2h20v8H2zm6 2.998H5.996v2.004h2v-.004H8zm10 0h-8v2h8zM2 12h20v10H2z" />
                    </svg>
                    Menu-Makanan
                </a>
                <a href="#"
                    class="w-full bg-gray-600 text-white px-4 py-2 rounded flex items-center outline hover:bg-gray-700 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M253.8 30.44c-9.5 1.2-18.1 12.3-18.1 26.8c0 8 2.7 15 6.7 19.9l4.9 5.8l-7.5 1.4c-5.2 1-9 3.8-12.3 8.3c-3.4 4.6-5.9 10.76-7.6 18.06c-3.2 13.1-3.9 29.1-4 43.3h17.5l1.6 21.9c6.8-.3 13.8-.5 20.9-.5q11.25 0 21.9.6l1.5-22h16.6c0-14.3-.2-30.6-3.1-43.9c-1.6-7.2-4-13.46-7.3-17.96s-7.4-7.2-13.3-8.1l-7.6-1.2l4.8-6c3.9-4.8 6.5-11.8 6.5-19.6c0-15.4-9.6-26.8-20.1-26.8zM61.9 174.4c-9.5 1.2-18.1 12.3-18.1 26.8c0 8 2.7 15 6.7 19.9l4.9 5.8l-7.5 1.4c-5.2 1-9 3.8-12.3 8.3c-3.4 4.6-5.9 10.8-7.6 18.1c-3.2 13.1-3.9 29.1-4 43.3h17.5l4.7 64.3c12.2 2.8 25.2 2.6 36.94 0l4.3-64.3H104c0-14.3-.2-30.6-3.1-43.9c-1.57-7.2-3.97-13.5-7.27-18c-3.29-4.5-7.39-7.2-13.29-8.1l-7.64-1.2l4.8-6c3.94-4.8 6.54-11.8 6.54-19.6c0-15.4-9.64-26.8-20.14-26.8zm384 0c-9.5 1.2-18.1 12.3-18.1 26.8c0 8 2.7 15 6.7 19.9l4.9 5.8l-7.5 1.4c-5.2 1-9 3.8-12.3 8.3c-3.4 4.6-5.9 10.8-7.6 18.1c-3.2 13.1-3.9 29.1-4 43.3h17.5l4.7 64.3c12.2 2.8 25.2 2.6 36.9 0l4.3-64.3H488c0-14.3-.2-30.6-3.1-43.9c-1.6-7.2-4-13.5-7.3-18s-7.4-7.2-13.3-8.1l-7.6-1.2l4.8-6c3.9-4.8 6.5-11.8 6.5-19.6c0-15.4-9.6-26.8-20.1-26.8zm-190 19c-36.7 0-69.9 5.3-93.2 13.5c-11.6 4.1-20.7 9-26.3 13.7c-5.7 4.7-7.5 8.6-7.5 11.8s1.8 7.1 7.5 11.8c5.6 4.7 14.7 9.5 26.3 13.7c23.3 8.2 56.5 13.5 93.2 13.5s69.9-5.3 93.2-13.5c11.6-4.2 20.7-9 26.3-13.7c5.7-4.7 7.5-8.6 7.5-11.8s-1.8-7.1-7.5-11.8c-5.6-4.7-14.7-9.6-26.3-13.7c-23.3-8.2-56.5-13.5-93.2-13.5m-105 79.2v45.8h18v-39.8c-4.2-1.2-8.3-2.4-12.2-3.8c-2-.7-3.9-1.4-5.8-2.2m210 0c-1.9.8-3.8 1.5-5.8 2.2c-3.9 1.4-8 2.6-12.2 3.8v39.8h18zm-107.1 19c-9.5 1.2-18.1 12.3-18.1 26.8c0 8 2.7 15 6.7 19.9l4.9 5.8l-7.5 1.4c-5.2 1-9 3.8-12.3 8.3c-3.4 4.6-5.9 10.8-7.6 18.1c-3.2 13.1-3.9 29.1-4 43.3h17.5l4.7 64.3c12.2 2.8 25.2 2.6 36.9 0l4.3-64.3h16.6c0-14.3-.2-30.6-3.1-43.9c-1.6-7.2-4-13.5-7.3-18s-7.4-7.2-13.3-8.1l-7.6-1.2l4.8-6c3.9-4.8 6.5-11.8 6.5-19.6c0-15.4-9.6-26.8-20.1-26.8z" />
                    </svg>
                    Meja
                </a>
            </div>
        </div>

        <!-- Bagian bawah: Logout -->
        <div>
            <a href="{{ route('logout') }}"
                class="w-full bg-red-600 text-white px-4 py-2 rounded flex items-center outline hover:bg-red-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Logout
            </a>
        </div>
    </div>



    <div class="flex-1 bg-gray-400"
        style="width: 100%; height: 97vh; box-shadow: 0 0 10px 0 rgba(156,163,175,0.7); border-radius: 0.25rem; padding: 1rem; box-sizing: border-box;">
        @yield('konten')
    </div>
</body>

</html>
