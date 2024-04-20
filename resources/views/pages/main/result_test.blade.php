<x-home-layout class="bg-backgroundLight text-white h-screen">
    <nav class="mb-10 pt-12 px-24">
        <a href="/" class="flex gap-3">
            <img src="{{ asset('assets/icons/logo_orange.svg') }}" alt="Logo ProfesiMu" />
            <p class="text-bold text-xl text-orange font-bold">ProfesiMu</p>
        </a>
    </nav>

    <header class="px-24">
        <h1 class="text-3xl font-bold text-navy-primary">Hasil Rekomendasi Profesi Digital Mu</h1>
        <p class="text-grey-primary leading-7 mt-3">
            Setelah mengerjakan rangkaian tes minat dan kepribadian, sampailah kamu di tahap 
            untuk melihat hasil rekomendasi profesi digital yang sesuai denganmu! 
            Temukan pilihan profesi digital yang cocok untuk kamu dan dapatkan panduan berharga 
            untuk meraih karir yang memenuhi minat dan potensi kamu. Selamat menjelajahi dan 
            semoga kamu menemukan inspirasi karir yang tepat!
        </p>
    </header>

    <section class="mt-12 px-24 pb-16 grid gap-12">
        <div>
            <h2 class="text-3xl font-bold text-navy-primary mb-6">Kepribadian RIASEC Mu</h2>
            <div class="grid grid-cols-2 gap-8">
                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl w-fit">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Realistic</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-black">
                        Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). 
                        Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik 
                        dalam mengerjakan sesuatu yang disukai.
                    </p>
                </div>
                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl w-fit">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Investigative</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-black">
                        Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). 
                        Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik 
                        dalam mengerjakan sesuatu yang disukai.
                    </p>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-navy-primary mb-6">Kategori Digital Marketing</h2>
            <div class="grid grid-cols-3 gap-8">
                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl cursor-pointer">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-sm text-black">Ketuk kotak ini untuk melihat detailnya!</p>
                </div>

                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl cursor-pointer">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-sm text-black">Ketuk kotak ini untuk melihat detailnya!</p>
                </div>

                <div class="p-6 bg-white border-2 border-b-8 border-navy-primary rounded-3xl cursor-pointer">
                    <h3 class="text-navy-primary text-xl font-semibold mb-2.5">Data Scientist</h3>
                    <div class="h-1.5 w-[90px] bg-orange rounded-full mb-4"></div>
                    <p class="text-sm text-black">Ketuk kotak ini untuk melihat detailnya!</p>
                </div>
            </div>

            <div class="card-primary !p-6 mt-6">
                <div>
                    <h4 class="font-bold text-black mb-2">Deskripsi Profesi</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-black mb-2 mt-6">Tanggung Jawab</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-black mb-2 mt-6">Keahlian Yang Diperlukan</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-black mb-2 mt-6">Rekomendasi Pembelajaran</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-14 px-24">
        <h2 class="text-2xl font-bold text-navy-primary">Ingin berkonsultasi langsung ke ahlinya? Bisa!</h2>
        <p class="text-grey-primary leading-7 mt-3">
            Kamu dapat menghubungi para pakar di bidang IT dan Psikologi 
            jika memerlukan konsultasi lebih lanjut mengenai karir mu.
        </p>

        <div class="mt-7 flex gap-28">
            <div class="flex items-center gap-6">
                <img src="{{ asset('assets/images/pakar-1.svg') }}" alt="Pakar IT" class="border-2 border-navy-primary p-1 rounded-full" />
                <div>
                    <p class="text-xl mb-1 text-black font-bold">Angga Risky</p>
                    <p class="text-lg text-navy-primary mb-1">CEO BuildWith Angga</p>
                    <p class="text-grey-primary">Pakar Bidang IT dan Digital</p>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <img src="{{ asset('assets/images/pakar-2.svg') }}" alt="Pakar IT" class="border-2 border-navy-primary p-1 rounded-full" />
                <div>
                    <p class="text-xl mb-1 text-black font-bold">Rizky Putri</p>
                    <p class="text-lg text-navy-primary mb-1">Psikolog Talenta Indonesia</p>
                    <p class="text-grey-primary">Pakar Bidang Psikologi</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="flex gap-40 justify-between items-center bg-navy-primary px-24 py-[60px] h-full">
            <div>
                <h2 class="text-3xl text-white font-bold leading-10">
                    Seberapa Puas Kamu Dengan <br />
                    Hasil Ini? Berikan Pendapat Mu!
                </h2>
                <p class="text-blue-accent leading-7 mt-5 text-lg">
                    Pendapat yang kamu berikan sangat berguna <br />
                    untuk pengembangan sistem ini kedepannya!
                </p>
            </div>
            <div class="grow">
                <div class="flex items-center">
                    <svg class="w-10 h-10 text-yellow-300 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-10 h-10 text-yellow-300 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-10 h-10 text-yellow-300 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-10 h-10 text-yellow-300 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-10 h-10 ml-2 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                </div>
                <textarea class="w-full h-32 mt-6 p-4 bg-white border-2 border-navy-primary rounded-md" placeholder="Berikan pendapatmu disini..."></textarea>
                <div class="flex justify-start mt-6">
                    <button class="button-orange w-40">
                        Kirim
                    </button>
                </div>
            </div>
        </div>
        <div class="py-4 text-center bg-navy-secondary">
            <p class="text-white text-sm">© 2024 ProfesiMu</p>
        </div>
    </footer>
</x-home-layout>