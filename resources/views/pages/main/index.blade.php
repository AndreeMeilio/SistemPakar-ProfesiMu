<x-home-layout>
    <section class="bg-blue-dark text-white py-12 px-24 h-screen">
        <nav class="flex justify-between items-center">
            <a href="/" class="flex gap-3">
                <img src="{{ asset('assets/icons/logo.svg') }}" alt="Logo ProfesiMu" />
                <p class="text-bold text-xl font-bold">ProfesiMu</p>
            </a>
            <ul class="flex gap-12">
                <li><a href="{{ route('profession') }}">Profesi Digital</a></li>
                <li><a href="{{ route('personality') }}">Apa itu RIASEC?</a></li>
                <li><a href="#">Tentang ProfesiMu</a></li>
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
    </section>
</x-home-layout>