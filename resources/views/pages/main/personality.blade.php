<x-home-layout class="bg-backgroundLight text-white h-screen">
    <nav class="mb-10 pt-12 px-24">
        <a href="/" class="flex gap-3">
            <img src="{{ asset('assets/icons/logo_orange.svg') }}" alt="Logo ProfesiMu" />
            <p class="text-bold text-xl text-orange-secondary font-bold">ProfesiMu</p>
        </a>
    </nav>

    <header class="px-24">
        <h1 class="text-3xl font-bold text-blue-dark">Mengenal Holland Test: Model Kepribadian RIASEC</h1>
        <p class="text-[#66696F] leading-7 mt-3">
            Holland Test ini didasarkan pada teori kepribadian John L. Holland, 
            seorang psikolog dan profesor dari Amerika. Model ini, yang dikenal dengan singkatan RIASEC, 
            membantu mengidentifikasi karakteristik dan minat seseorang dalam konteks pilihan karir. 
            Di bawah ini akan dijelaskan enam tipe kepribadian dari Model Kepribadian RIASEC.
        </p>
    </header>

    <section class="mt-12 px-24 pb-24">
        <div class="grid grid-cols-2 gap-8">
            <div class="p-6 bg-white border-2 border-b-8 border-navy rounded-3xl w-fit">
                <h3 class="text-blue-dark text-xl font-semibold mb-2.5">Realistic</h3>
                <div class="h-1.5 w-[90px] bg-orange-secondary rounded-full mb-4"></div>
                <p class="text-black">
                    Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). 
                    Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik 
                    dalam mengerjakan sesuatu yang disukai.
                </p>
            </div>
            <div class="p-6 bg-white border-2 border-b-8 border-navy rounded-3xl w-fit">
                <h3 class="text-blue-dark text-xl font-semibold mb-2.5">Investigative</h3>
                <div class="h-1.5 w-[90px] bg-orange-secondary rounded-full mb-4"></div>
                <p class="text-black">
                    Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). 
                    Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik 
                    dalam mengerjakan sesuatu yang disukai.
                </p>
            </div>
            <div class="p-6 bg-white border-2 border-b-8 border-navy rounded-3xl w-fit">
                <h3 class="text-blue-dark text-xl font-semibold mb-2.5">Artistic</h3>
                <div class="h-1.5 w-[90px] bg-orange-secondary rounded-full mb-4"></div>
                <p class="text-black">
                    Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). 
                    Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik 
                    dalam mengerjakan sesuatu yang disukai.
                </p>
            </div>
            <div class="p-6 bg-white border-2 border-b-8 border-navy rounded-3xl w-fit">
                <h3 class="text-blue-dark text-xl font-semibold mb-2.5">Social</h3>
                <div class="h-1.5 w-[90px] bg-orange-secondary rounded-full mb-4"></div>
                <p class="text-black">
                    Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). 
                    Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik 
                    dalam mengerjakan sesuatu yang disukai.
                </p>
            </div>
            <div class="p-6 bg-white border-2 border-b-8 border-navy rounded-3xl w-fit">
                <h3 class="text-blue-dark text-xl font-semibold mb-2.5">Enterprising</h3>
                <div class="h-1.5 w-[90px] bg-orange-secondary rounded-full mb-4"></div>
                <p class="text-black">
                    Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). 
                    Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik 
                    dalam mengerjakan sesuatu yang disukai.
                </p>
            </div>
            <div class="p-6 bg-white border-2 border-b-8 border-navy rounded-3xl w-fit">
                <h3 class="text-blue-dark text-xl font-semibold mb-2.5">Conventional</h3>
                <div class="h-1.5 w-[90px] bg-orange-secondary rounded-full mb-4"></div>
                <p class="text-black">
                    Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). 
                    Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik 
                    dalam mengerjakan sesuatu yang disukai.
                </p>
            </div>
        </div>
    </section>

    <footer>
        <div class="flex justify-between items-center bg-blue-dark px-24 py-[60px] h-full">
            <div>
                <h2 class="text-3xl text-white font-bold leading-10">
                    Cari Tahu Kepribadian <br />
                    RIASEC MU Sekarang Juga!
                </h2>
                <a href="{{ route('personal_data') }}" class="button-orange w-fit mt-10">
                    Ikuti Tes Sekarang
                    <i icon-name="chevron-right" class="w-5 ml-1"></i>
                </a>
            </div>
            <img src="{{ asset('assets/images/illustration.svg') }}" alt="Ilustrasi ProfesiMu" />
        </div>
        <div class="py-4 text-center bg-[#0A2753]">
            <p class="text-white text-sm">© 2024 ProfesiMu</p>
        </div>
    </footer>
</x-home-layout>