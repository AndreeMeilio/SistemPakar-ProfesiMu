<x-app-layout title="Detail Profesi Digital">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Detail Profesi Digital</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('profesi-digital.index') }}" class="breadcrumb-link">
                            Profesi Digital
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Detail Profesi</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[800px] max-sm:w-full">
            <div class="flex flex-col gap-y-5">
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Kode Profesi</p>
                    <p class="font-medium">{{ $profession->code }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Nama Profesi</p>
                    <p class="font-medium">{{ $profession->profession_name }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Kategori Profesi</p>
                    <p class="font-medium">{{ $profession->category }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Deskripsi</p>
                    <p class="font-medium">{{ $profession->description }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Tanggung Jawab</p>
                    <p class="font-medium">{{ $profession->responsibility }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Keahlian</p>
                    <p class="font-medium">{{ $profession->skill }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Rekomendasi Pembelajaran</p>
                    <a href="{{ $learningResources['link'] }}" target="_blank" class="underline font-medium">{{ $learningResources['title'] }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
