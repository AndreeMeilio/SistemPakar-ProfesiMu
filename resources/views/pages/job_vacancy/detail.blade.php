<x-app-layout title="Detail Lowongan Kerja">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <div class="flex gap-x-4 items-center mb-4">
                <h1 class="title-large">Detail Lowongan Kerja</h1>
                @if ($job->status_aktif)
                    <div class="chip-green max-sm:hidden"><p>Dibuka</p></div>
                @else
                    <div class="chip-orange max-sm:hidden"><p>Draf</p></div>
                @endif
            </div>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('lowongan-kerja.index') }}" class="breadcrumb-link">
                            Lowongan Kerja
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Detail Lowongan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5">
            <p class="title-medium">Data Lowongan Kerja</p>
            <div class="grid lg:grid-cols-2 gap-6">
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Nama Posisi</p>
                    <p class="font-medium">{{ $job->nama }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Lokasi</p>
                    <p class="font-medium">{{ $job->lokasi }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Tipe Pekerjaan</p>
                    <p class="font-medium">{{ $job->tipe->nama }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Tanggal Dibuka</p>
                    <p class="font-medium">{{ $start }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Departemen</p>
                    <p class="font-medium">{{ $job->departemen->nama }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Tanggal Ditutup</p>
                    <p class="font-medium">{{ $deadline }}</p>
                </div>
            </div>
            <div>
                <p class="mb-1.5 font-medium text-blue-primary">Deskripsi</p>
                <div class="font-medium">
                    {!! $job->deskripsi !!}
                </div>
            </div>
            <div>
                <p class="mb-1.5 font-medium text-blue-primary">Persyaratan</p>
                <div class="font-medium">
                    {!! $job->persyaratan !!}
                </div>
            </div>
            <hr class="sm:hidden">
            <div class="row-span-2 mb-5 sm:hidden">
                <p class="mb-3 font-medium text-blue-primary">Status Lowongan Pekerjaan</p>
                @if ($job->status_aktif)
                    <div class="chip-green"><p class="text-sm">Dibuka</p></div>
                @else
                    <div class="chip-orange"><p class="text-sm">Draf</p></div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
