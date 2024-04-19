<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tes Kepribadian dan Profesi Digital">
        <meta name="author" content="Rachmadzii">

        <title>Temukan Profesi Digital Mu! — ProfesiMu</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Script -->
        @vite('resources/js/app.js')
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <main id="main-content">
            {{ $slot }}
        </main>
        
        <!-- Script -->
        <script src="https://unpkg.com/lucide@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>    
        
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

        <script>
            lucide.createIcons();
        </script>
    </body>
</html>
