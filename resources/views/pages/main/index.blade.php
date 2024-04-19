<x-home-layout>
    <section class="bg-blue-dark text-white py-12 px-24 h-screen">
        <nav class="flex justify-between items-center">
            <a href="/" class="flex gap-3">
                <img src="{{ asset('assets/icons/logo.svg') }}" alt="Logo ProfesiMu" />
                <p class="text-bold text-xl font-bold">ProfesiMu</p>
            </a>
            <ul class="flex gap-12 mt-2">
                <li class="menu-item">
                    <a href="{{ route('profession') }}">Profesi Digital</a>
                    <div class="menu-indicator mt-1 h-1 bg-orange-secondary rounded-full"></div>
                </li>
                <li class="menu-item">
                    <a href="{{ route('personality') }}">Apa itu RIASEC?</a>
                    <div class="menu-indicator mt-1 h-1 bg-orange-secondary rounded-full"></div>
                </li>
                <li class="menu-item">
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" type="button">
                        Tentang ProfesiMu
                    </button>
                    <div class="menu-indicator mt-1 h-1 bg-orange-secondary rounded-full"></div>
                </li>
            </ul>
        </nav>

        <div class="flex h-full items-center">
            <div>
                <h1 class=" text-4xl font-bold mb-7">
                    Temukan Profesi Digital Mu!
                </h1>
                <p class="text-xl text-[#E1F0FF] leading-9">
                    Untuk kamu yang ingin menggeluti dunia teknologi digital, <br />
                    cari tahu profesi yang sesuai dengan kepribadian mu <br />
                    berdasarkan RIASEC melalui Holland Test di platform ini!
                </p>
                <a href="{{ route('personal_data') }}" class="button-orange w-fit mt-10">
                    Ikuti Tes Sekarang
                    <i icon-name="chevron-right" class="w-5 ml-1"></i>
                </a>
            </div>
        </div>

        <!--Modal-->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <div class="relative bg-white rounded-xl shadow">
                    <div class="flex items-center justify-between p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-black">
                            Selamat Datang di ProfesiMu!
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Tutup Dialog</span>
                        </button>
                    </div>
                    <div class="p-5 space-y-4">
                        <p class="text-black leading-relaxed text-justify">
                            <b>ProfesiMu</b> adalah platform yang menyediakan tes minat karir dan rekomendasi profesi di bidang digital. 
                            Jika kamu tertarik atau sudah berada dalam dunia teknologi digital, tetapi masih bingung tentang arah karir yang ingin diambil, ProfesiMu hadir untuk membantu mu. 
                        </p>
                        <p class="text-black leading-relaxed text-justify">
                            Dengan bantuan pakar bidang IT dan Psikologi, tes minat karir kami dikembangkan berdasarkan teori kepribadian RIASEC yang terbukti efektif dalam menggali potensi seseorang berdasarkan karakteristik individu. 
                            Temukan pilihan karir dan profesi di bidang digital yang sesuai dengan minat dan kepribadian kamu melalui ProfesiMu!
                        </p>
                        <p class="text-sm text-black pt-3">© 2024 ProfesiMu oleh Rachma Adzima</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-home-layout>