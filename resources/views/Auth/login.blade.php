<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<!-- Start of Selection -->

<body class="bg-gray-600 flex items-center justify-center h-screen">
    @if (session('notif'))
        <div id="notification"
            class="fixed top-4 right-4 flex items-center p-4 mb-4 text-sm text-red-800 bg-red-100 rounded-lg shadow-lg transition-transform transform opacity-0 scale-90"
            role="alert">
            <svg class="w-2 h-2 mr-0" fill="red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M18 8A8 8 0 11.007 8 8 8 0 0118 8zM9 4h2v5H9V4zm0 7h2v2H9v-2z" />
            </svg>
            <span class="font-medium mx-2">Notifikasi :</span> {{session('notif') }}
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const notification = document.getElementById('notification');

                // Tampilkan notifikasi dengan animasi
                notification.classList.add('opacity-100', 'scale-100');
                notification.classList.remove('opacity-0', 'scale-90');

                // Hilangkan notifikasi setelah 3 detik
                setTimeout(() => {
                    notification.classList.add('opacity-0', 'scale-90'); // Tambahkan efek keluar
                    notification.classList.remove('opacity-100', 'scale-100');

                    // Sembunyikan elemen setelah animasi selesai
                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 300); // Durasi animasi keluar
                }, 3000); // Waktu tampil sebelum hilang
            });
        </script>
    @endif
    @if (session('message'))
        <div id="notification"
            class="fixed top-4 right-4 flex items-center p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg shadow-lg transition-transform transform opacity-0 scale-90"
            role="alert">
            <svg class="w-2 h-2 mr-0" fill="green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M18 8A8 8 0 11.007 8 8 8 0 0118 8zM9 4h2v5H9V4zm0 7h2v2H9v-2z" />
            </svg>
            <span class="font-medium mx-2">Notifikasi :</span> {{session('message') }}
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const notification = document.getElementById('notification');

                // Tampilkan notifikasi dengan animasi
                notification.classList.add('opacity-100', 'scale-100');
                notification.classList.remove('opacity-0', 'scale-90');

                // Hilangkan notifikasi setelah 3 detik
                setTimeout(() => {
                    notification.classList.add('opacity-0', 'scale-90'); // Tambahkan efek keluar
                    notification.classList.remove('opacity-100', 'scale-100');

                    // Sembunyikan elemen setelah animasi selesai
                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 300); // Durasi animasi keluar
                }, 3000); // Waktu tampil sebelum hilang
            });
        </script>
    @endif

    <div class="bg-white bg-opacity-30 p-8 rounded-md shadow- w-full max-w-md"
        style="box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);">
        <h2 class="text-3xl font-bold mb-2 text-center">Sign In</h2>
        <p class="text-center mb-6 text-gray-600">Sign In to your account</p>
        <!-- Mengubah text-gray-800 menjadi text-gray-400 agar lebih kontras dan terlihat seperti disabled -->
        <form method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input type="text" id="username" name="username"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition duration-300 ease-in-out hover:bg-gray-100 hover:border-gray-500"
                    style="box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline transition duration-300 ease-in-out hover:bg-gray-100 hover:border-gray-500"
                    style="box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);" required>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit"
                    class="bg-black text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform hover:scale-105 hover:bg-gray-700"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">Login</button>
            </div>
        </form>
    </div>
</body>
<!-- End of Selection -->

</html>
