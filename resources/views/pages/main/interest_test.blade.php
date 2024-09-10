<x-home-layout class="bg-backgroundLight text-white h-screen">
    <section class="h-[376px] mb-10 pt-12 px-24 bg-navy-primary">
        <a href="/" class="flex gap-3">
            <img src="{{ asset('assets/icons/logo_white.svg') }}" alt="Logo ProfesiMu" />
            <p class="text-bold text-xl text-white font-bold">ProfesiMu</p>
        </a>

        <h1 class="text-3xl text-white font-bold mt-12">Tes Kepribadian Profesi Digital Mu</h1>

        <div class="relative top-12 pb-14 flex gap-7">
            <div class="grid gap-6">
                <div class="card-primary h-fit !p-8 w-[362px]">
                    <p class="text-sm font-medium mb-2">Bagian 1</p>
                    <h2 class="text-2xl font-bold text-navy-primary mb-4">Minat</h2>
                    <div class="h-1.5 w-20 bg-orange rounded-full"></div>
                    <p class="mt-4">Silakan pilih satu opsi yang mewakili diri kamu dari setiap pernyataan.</p>
                </div>
                <div class="card-primary h-fit !p-8 w-[362px]">
                    @php
                        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
                    @endphp
                    <div class="grid grid-cols-5 gap-3">
                        @foreach ($collection as $item)
                        <div class="bg-navy-primary rounded-md w-full text-center py-2">
                            <p class="text-xl text-white font-bold">{{ $item }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card-primary w-full h-fit !p-8">
                <form method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <h3 class="font-medium mb-4">Apakah Anda tertarik atau ingin melakukan pekerjaan atau kegiatan di bawah ini?</h3>
                    <div class="h-1.5 w-20 bg-orange rounded-full"></div>
        
                    <ol class="mt-6 ml-4 grid gap-y-6">
                        <li class="text-black list-decimal">
                            Menggambar ilustrasi sesuatu
                            <div class="flex gap-4 mt-4 radio-group">
                                <div class="w-44">
                                    <input id="option-yes" type="radio" value="Ya" name="option-radio" class="option-radio !hidden" autocomplete="off">
                                    <label for="option-yes" class="card-option cursor-pointer">Ya, tertarik</label>
                                </div>
                                <div class="w-44">
                                    <input id="option-no" type="radio" value="Tidak" name="option-radio" class="option-radio !hidden" autocomplete="off">
                                    <label for="option-no" class="card-option cursor-pointer">Tidak</label>
                                </div>
                            </div>
                        </li>
                    </ol>

                    <div class="flex justify-end mt-8">
                        <a type="button" class="button-orange w-fit" href="{{ route('personality_test', $participantId) }}">
                            Lanjut
                            <i icon-name="chevron-right" class="w-5 ml-1"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-home-layout>