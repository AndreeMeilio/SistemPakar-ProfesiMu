<x-app-layout title="Pelamar Potensial">
    <div class="flex flex-col gap-y-10">
        <h1 class="title-large">Pelamar Potensial</h1>
        <div class="flex flex-col gap-y-10">
            @foreach ($openJobTypes as $openJobType)
                <div>
                    <div class="flex items-center gap-x-4 mb-3">
                        <p class="font-medium text-navy text-xl">Daftar Lowongan Kerja</p>
                        <div id="job_type_bg" class="w-fit bg-[{{ $openJobType->bg_color }}] rounded-lg px-3 py-1.5 max-sm:hidden">
                            <p id="job_type_text" class="text-[{{ $openJobType->text_color }}] text-sm">{{ $openJobType->nama }}</p>
                        </div>
                    </div>
                    <span class="text-grey-secondary mb-5">Total Pelamar di Lowongan Kerja {{ $openJobType->nama }} yang sedang dibuka</span>
                    <div id="job_type_bg" class="w-fit bg-[{{ $openJobType->bg_color }}] rounded-lg px-3 py-1.5 mt-3 sm:hidden">
                        <p id="job_type_text" class="text-[{{ $openJobType->text_color }}] text-sm">{{ $openJobType->nama }}</p>
                    </div>
                    <div class="flex gap-x-8 gap-y-5 flex-wrap mt-5">
                        @foreach($openJobType->openVacancies as $vacancy)
                            @include('components.card_job_vacancy', 
                            ['pelamar_count' => $vacancy->pelamar_count,
                            'nama' => $vacancy->nama,
                            'departemen' => $vacancy->departemen->nama,
                            'status_aktif' => null,
                            'url' => route('potensial.detail', ['tipe_pekerjaan' => $openJobType->slug, 'lowongan' => $vacancy->slug])])
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>