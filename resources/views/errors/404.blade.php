<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tes Kepribadian dan Profesi Digital">
        <meta name="author" content="Rachmadzii">

        <title>404 — ProfesiMu</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        <main class="flex flex-col justify-center items-center text-center h-screen text-gray-800">
            <lottie-player class="h-20 md:h-52" src="https://lottie.host/2b7883d4-f74a-4f1d-8641-1669e32f1c45/7usPOJ1OKm.json" background="transparent" speed="1"  loop autoplay></lottie-player>
            <h1 class="mt-10 mb-3 capitalize text-lg md:text-2xl font-semibold">Halaman Tidak Ditemukan</h1>
            <div class="text-xs md:text-lg">
                <p>Maaf halaman yang Anda cari tidak dapat ditemukan.</p>
                <p>Silakan ketik ulang URL atau kembali ke Beranda.</p>
            </div>
            <a href="{{ url('/') }}" class="mt-10 flex px-7 py-3 gap-x-3 text-white bg-[#3A57E8] rounded-full">
                <i icon-name="home"></i>
                Beranda
            </a>
        </main>

        <script src="https://unpkg.com/lucide@latest"></script>
        <script>
            lucide.createIcons();
        </script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </body>
</html>
