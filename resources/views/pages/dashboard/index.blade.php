@php
$statistic = array(
    array("title"=>"Total Profesi", "value"=>count($professions), "icon"=>"briefcase"),
    array("title"=>"Total Karakteristik", "value"=>count($characteristics), "icon"=>"clipboard-list"),
    array("title"=>"Total Aturan", "value"=>count($rules), "icon"=>"clipboard-check"),
    array("title"=>"Total Partisipan", "value"=>count($participants), "icon"=>"users"),
    array("title"=>"Total Admin", "value"=>count($users), "icon"=>"user"),
);

$fullName = Auth::user()->full_name;
$firstName = explode(' ',trim($fullName))[0];
@endphp

<x-app-layout title="Beranda">
    <div class="flex flex-col gap-y-10">
        <h1 class="title-large">Beranda</h1>

        <section class="p-6 flex gap-x-9 gap-y-6 bg-white rounded-xl h-fit w-fit sm:items-center max-sm:flex-col-reverse">
            <div>
                <p class="font-medium mb-1">Hai, {{ $firstName }}!</p>
                <span class="text-grey-secondary">Ada {{ count($todayParticipants) }} Partisipan baru hari ini.</span>
            </div>
            <img src="{{ asset('assets/images/illust_hand.png') }}" alt="Icon Waving Hand" class="w-14 h-14">
        </section>

        <section>
            <p class="title-medium">Statistik</p>
            <span class="text-grey-secondary mb-5">Total data hingga saat ini</span>
            <div class="flex gap-x-8 gap-y-5 flex-wrap mt-5">
                @foreach($statistic as $data)
                    @include('components.card_statistic', ['data' => $data])
                @endforeach
            </div>
        </section>

        <section>
            <div class="flex flex-col gap-y-5">
                <div>
                    <p class="title-medium">Petunjuk Penggunaan</p>
                    <span class="text-grey-secondary mb-5">Perhatikan petunjuk penggunaan Dashboard ProfesiMu</span>
                </div>
                <div class="text-[15px] flex flex-col gap-y-5 bg-white p-6 rounded-lg">
                    <div>
                        <p class="font-semibold text-lg uppercase mb-2">> Menu Profesi Digital</p>
                        <p class="leading-[34px]">Menu ini berfungsi untuk mengelola data profesi digital.</p>
                    </div>
                    <div>
                        <p class="font-semibold text-lg uppercase mb-2">> Menu Karakteristik RIASEC</p>
                        <p class="leading-[34px]">Menu ini berfungsi untuk mengelola data karakteristik kepribadian RIASEC.</p>
                    </div>
                    <div>
                        <p class="font-semibold text-lg uppercase mb-2">> Menu Aturan Relasi</p>
                        <p class="leading-[34px]">Menu ini befungsi untuk mengelola data aturan dan relasi antara profesi dengan karakteristik kepribadian.</p>
                    </div>
                    <div>
                        <p class="font-semibold text-lg uppercase mb-2">> Menu Riwayat Partisipan</p>
                        <p class="leading-[34px]">Menu ini berfungsi untuk melihat data riwayat partisipan yang sudah melakukan tes kepribadian dan profesi.</p>
                    </div>
                    <div>
                        <p class="font-semibold text-lg uppercase mb-2">> Menu Akun Admin</p>
                        <p class="leading-[34px]">Menu ini berfungsi untuk mengelola data akun admin yang dapat mengakses website Dashboard ProfesiMu.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
