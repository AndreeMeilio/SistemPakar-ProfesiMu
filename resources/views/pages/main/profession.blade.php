<x-home-layout class="bg-backgroundLight text-white h-screen">
    <nav class="mb-10 pt-12 px-24">
        <a href="/" class="flex gap-3">
            <img src="{{ asset('assets/icons/logo_orange.svg') }}" alt="Logo ProfesiMu" />
            <p class="text-bold text-xl text-orange font-bold">ProfesiMu</p>
        </a>
    </nav>

    <header class="px-24">
        <h1 class="text-3xl font-bold text-navy-primary">Jelajahi Dunia Profesi di Bidang Digital</h1>
        <p class="text-grey-primary leading-7 mt-3">
            Dari peran yang berkaitan dengan teknologi hingga pemasaran digital dan pengembangan web, 
            kamu akan menemukan wawasan singkat mengenai berbagai karier yang relevan dengan 
            dunia digital saat ini. Temukan peluang dan tantangan yang ada di balik profesi-profesi ini 
            yang terus berkembang seiring dengan kemajuan teknologi.
        </p>
    </header>

    <section class="mt-12 px-24 pb-24 grid gap-12">
        <div>
            <h2 class="text-3xl font-bold text-navy-primary mb-6">Kategori Data</h2>
            <div class="grid grid-cols-3 gap-8">
                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl">
                    <div class="flex justify-between">
                        <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                        <i icon-name="info" class="w-5 ml-1 text-navy-primary"></i>
                    </div>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-black">Problem-Solving, Detail Oriented, Critical Thinking.</p>
                </div>

                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-black">Problem-Solving, Detail Oriented, Critical Thinking.</p>
                </div>

                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-black">Problem-Solving, Detail Oriented, Critical Thinking.</p>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-navy-primary mb-6">Kategori Digital Marketing</h2>
            <div class="grid grid-cols-3 gap-8">
                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-black">Problem-Solving, Detail Oriented, Critical Thinking.</p>
                </div>

                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-black">Problem-Solving, Detail Oriented, Critical Thinking.</p>
                </div>

                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-black">Problem-Solving, Detail Oriented, Critical Thinking.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="flex justify-between items-center bg-navy-primary px-24 py-[60px] h-full">
            <div>
                <h2 class="text-3xl text-white font-bold leading-10">
                    Cari Tahu Profesi Digital <br />
                    Yang Cocok Untuk Kamu!
                </h2>
                <a href="{{ route('personal_data') }}" class="button-orange w-fit mt-10">
                    Ikuti Tes Sekarang
                    <i icon-name="chevron-right" class="w-5 ml-1"></i>
                </a>
            </div>
            <img src="{{ asset('assets/images/illustration.svg') }}" alt="Ilustrasi ProfesiMu" />
        </div>
        <div class="py-4 text-center bg-navy-secondary">
            <p class="text-white text-sm">© 2024 ProfesiMu</p>
        </div>
    </footer>
</x-home-layout>