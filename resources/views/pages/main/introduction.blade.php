<x-home-layout class="bg-backgroundLight text-white h-screen">
    <section class="h-[376px] mb-10 pt-12 px-24 bg-navy-primary">
        <a href="/" class="flex gap-3">
            <img src="{{ asset('assets/icons/logo_white.svg') }}" alt="Logo ProfesiMu" />
            <p class="text-bold text-xl text-white font-bold">ProfesiMu</p>
        </a>

        <h1 class="text-3xl text-white font-bold mt-12">Tes Kepribadian Profesi Digital Mu</h1>

        <div class="relative top-12 pb-14">
            <div class="card-primary">
                <div>
                    <div class="flex flex-col items-center">
                        <h2 class="text-2xl font-bold mb-4">Pengenalan Tes</h2>
                        <div class="h-1.5 w-24 bg-orange rounded-full"></div>
                    </div>
        
                    <ol class="mt-6 ml-4 grid gap-3">
                        <li class="text-black list-decimal">
                            Tes ini didasarkan pada teori kepribadian John L. Holland, seorang psikolog dan profesor dari Amerika. Model ini, yang dikenal dengan singkatan RIASEC, membantu mengidentifikasi karakteristik dan minat seseorang dalam konteks pilihan karir.
                        </li>
                        <li class="text-black list-decimal">
                            Tes ini terdiri dari enam tipe kepribadian, yaitu Realistic, Investigative, Artistic, Social, Enterprising, dan Conventional.
                        </li>
                        <li class="text-black list-decimal">
                            Tes ini akan membantu kamu mengetahui tipe kepribadianmu dan memberikan rekomendasi karir yang sesuai dengan kepribadianmu.
                        </li>
                        <li class="text-black list-decimal">
                            Tes ini tidak menjamin hasil yang akurat, namun dapat membantu kamu dalam memilih karir yang sesuai dengan kepribadianmu.
                        </li>
                        <li class="text-black list-decimal">
                            Tes ini tidak memungut biaya apapun dan hasil tes bersifat rahasia.
                        </li>
                    </ol>
                </div>

                <div class="mt-12">
                    <div class="flex flex-col items-center">
                        <h2 class="text-2xl font-bold mb-4">Pelaksanaan Tes</h2>
                        <div class="h-1.5 w-24 bg-orange rounded-full"></div>
                    </div>
        
                    <ol class="mt-6 ml-4 grid gap-3">
                        <li class="text-black list-decimal">
                            Terdapat 2 bagian, yaitu Tes Mengenali Minat dan Tes Mengenali Kepribadian.
                        </li>
                        <li class="text-black list-decimal">
                            Tidak ada jawaban benar/salah, silakan pilih jawaban yang paling sesuai dengan diri kamu.
                        </li>
                        <li class="text-black list-decimal">
                            Tidak ada batas waktu pengerjaan. Namun biasanya, tes ini memakan waktu sekitar 20 menit.
                        </li>
                        <li class="text-black list-decimal">
                            Seluruh soal harus dijawab dan jangan ada yang terlewat.
                        </li>
                        <li class="text-black list-decimal">
                            Kamu tidak bisa mundur setelah memulai tes.
                        </li>
                        <li class="text-black list-decimal">
                            Sistem akan menyimpan jawabanmu setelah kamu klik tombol “Lanjut” dan “Selesai”.
                        </li>
                        <li class="text-black list-decimal">
                            Saat kamu siap melakukan tes, klik tombol “Mulai Tes”.
                        </li>                        
                    </ol>
                </div>

                <p class="my-10">Selamat mengerjakan <b>Tes Kepribadian Profesi Digital Mu!</b></p>

                <div class="flex justify-center">
                    <a class="button-orange w-fit" href="{{ route('interest_test', $participantId) }}">
                        Mulai Tes
                        <i icon-name="chevron-right" class="w-5 ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-home-layout>