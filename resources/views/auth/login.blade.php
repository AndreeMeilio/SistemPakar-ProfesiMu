<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cari tahu karier digital mu lewat ProfesiMu">
        <meta name="author" content="Rachma Adzima">

        <title>Login Admin — Dashboard ProfesiMu</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Script -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <main class="flex justify-center items-center h-screen max-md:p-5 p-10">
            <div class="flex-col m-2">
                <div class="flex flex-col w-full gap-y-2 items-center justify-center text-white text-center max-lg:rounded-t-3xl py-8 px-10 lg:w-[500px] lg:rounded-l-3xl">
                    <p class="font-semibold text-navy-primary text-2xl">
                        Login
                    </p>
                    <p class="font-semibold text-blue-primary text-xl">
                        Dashboard ProfesiMu
                    </p>
                </div>
                <div class="flex flex-col w-full bg-white max-lg:rounded-3xl lg:w-[500px] lg:rounded-3xl p-8">
                    <form autocomplete="off" action="{{ route('login-admin') }}" method="post" >
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block mb-2">Email <span class="text-red">*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-sm rounded-md w-full px-3 py-2.5" placeholder="Masukkan Email Anda" required>
                        </div>
                        <div class="mb-7">
                            <label for="password" class="block mb-2">Kata Sandi <span class="text-red">*</span></label>
                            <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-sm rounded-md w-full px-3 py-2.5" placeholder="Masukkan Kata Sandi" required>
                            @error('email')
                                <div class="mt-2 error-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="button-primary justify-center py-3 w-full">
                            Masuk
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
