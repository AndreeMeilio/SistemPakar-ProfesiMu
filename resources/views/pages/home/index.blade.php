@php
$statistic = array(
    array("title"=>"Total Lowongan Kerja", "value"=>count($jobs), "icon"=>"briefcase"),
    array("title"=>"Total Pelamar", "value"=>count($applicants), "icon"=>"clipboard-list"),
    array("title"=>"Total Potensial", "value"=>count($potentials), "icon"=>"clipboard-check"),
);

$fullName = Auth::user()->nama_lengkap;
$firstName = explode(' ',trim($fullName))[0];
@endphp

<x-app-layout title="Beranda">
    <div class="flex flex-col gap-y-10">
        <h1 class="title-large">Beranda</h1>

        <section class="p-6 flex gap-x-9 gap-y-6 bg-white rounded-xl h-fit w-fit sm:items-center max-sm:flex-col-reverse">
            <div>
                <p class="font-medium mb-1">Hai, {{ $firstName }}! Apa kabar hari ini?</p>
                <span class="text-grey-secondary">Ada {{ count($todayApplicants) }} Pelamar baru hari ini, jangan lupa ditinjau ya!</span>
            </div>
            <img src="{{ asset('assets/images/illust_hand.png') }}" alt="Icon Waving Hand" class="w-14 h-14">
        </section>

        <section>
            <p class="title-medium">Statistik</p>
            <span class="text-grey-secondary mb-5">Statistik terbaru saat ini</span>
            <div class="flex gap-x-8 gap-y-5 flex-wrap mt-5">
                @foreach($statistic as $data)
                    @include('components.card_statistic', ['data' => $data])
                @endforeach
            </div>
        </section>

        <section class="max-w-[600px] max-sm:w-full">
            <div class="flex justify-between gap-5 max-sm:flex-col sm:items-center">
                <div>
                    <p class="title-medium">Pelamar Terbaru</p>
                    <span class="text-grey-secondary mb-5">Daftar pelamar terbaru saat ini</span>
                </div>
                <a href="#" class="button-secondary px-7 h-12">
                    Lihat Semua
                </a>
            </div>
            <div class="flex gap-8 mt-5">
                @if (count($applicants) > 0)
                    @include('components.card_new_applicants', ['data' => $latestApplicants])
                @else
                    <div class="p-6 flex gap-x-4 bg-white rounded-xl items-center w-full sm:w-96">
                        <i icon-name="folder-x"></i>
                        <p class="font-medium">Tidak ada daftar pelamar</p>
                    </div>
                @endif
            </div>
        </section>
    </div>
</x-app-layout>
