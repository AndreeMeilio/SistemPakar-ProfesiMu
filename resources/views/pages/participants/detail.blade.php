<x-app-layout title="Detail Partisipan">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Detail Partisipan</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('profesi-digital.index') }}" class="breadcrumb-link">
                            Riwayat Partisipan
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Detail Partisipan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[800px] max-sm:w-full">
            <div class="flex flex-col gap-y-5">
                <div class="grid lg:grid-cols-2 gap-5">
                    <div>
                        <p class="mb-1.5 font-medium text-blue-primary">Nama Lengkap</p>
                        <p class="font-medium">{{ $participant->participant_name }}</p>
                    </div>
                    <div>
                        <p class="mb-1.5 font-medium text-blue-primary">Usia</p>
                        <p class="font-medium">{{ $participant->age }} tahun</p>
                    </div>
                    <div>
                        <p class="mb-1.5 font-medium text-blue-primary">Jenis Kelamin</p>
                        <p class="font-medium">{{ $participant->gender }}</p>
                    </div>
                    <div>
                        <p class="mb-1.5 font-medium text-blue-primary">Pendidikan Terakhir</p>
                        <p class="font-medium">{{ $participant->education }}</p>
                    </div>
                    <div>
                        <p class="mb-1.5 font-medium text-blue-primary">Bidang Studi</p>
                        <p class="font-medium">{{ $participant->study_program }}</p>
                    </div>
                    <div>
                        <p class="mb-1.5 font-medium text-blue-primary">Pengalaman Bidang Digital</p>
                        <p class="font-medium">{{ $participant->experience }}</p>
                    </div>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Tujuan Mengikuti Tes</p>
                    <p class="font-medium">{{ $participant->goal }}</p>
                </div>
            </div>

            <p class="mt-5 font-medium text-navy-primary text-xl">Hasil Tes dan Rekomendasi</p>
            <div class="flex flex-col gap-y-5">
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Hasil Kepribadian</p>
                    <p class="font-medium">{{ $participant->personality->personality_name ?? '-' }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Hasil Profesi Digital</p>
                    <p class="font-medium">{{ $participant->profession->profession_name ?? '-' }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
