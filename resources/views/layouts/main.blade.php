<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tes Kepribadian dan Profesi Digital">
        <meta name="author" content="Rachmadzii">

        <title>{{ $title }} — Dashboard ProfesiMu</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}" />

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{ $style }}

        <!-- Script -->
        @vite('resources/js/app.js')
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <x-sidebar></x-sidebar>

        <main id="dashboard-content" class="content flex flex-col flex-1 min-h-screen lg:ml-[330px]">
            <x-navbar></x-navbar>

            <section class="px-8 pt-8 pb-24">
                {{ $slot }}
            </section>
        </main>

        {{ $script }}
        
        <!-- Script -->
        <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

        <script src="https://unpkg.com/lucide@latest"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>    
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        
        <script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.1.1/dist/flasher.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@flasher/flasher-toastr@1.1.1/dist/flasher-toastr.min.js"></script>
        
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        
        <script>
            lucide.createIcons();
        </script>

        <script>
            $(document).ready(function () {
                var table = $("#table_datatables").DataTable({
                    oLanguage: {
                        sSearch: "Cari:",
                        sLengthMenu: "Menampilkan _MENU_ data per halaman",
                        sZeroRecords: "Tidak ditemukan data yang cocok",
                        sInfo: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        sInfoEmpty: "Menampilkan 0 dari 0 data",
                        sInfoFiltered: "(difilter dari _MAX_ total data)",
                        sEmptyTable: "Tidak ada data yang tersedia di tabel",
                        oPaginate: {
                            sPrevious: "«",
                            sNext: "»",
                        },
                    },
                });
            });
        </script>
    </body>
</html>
