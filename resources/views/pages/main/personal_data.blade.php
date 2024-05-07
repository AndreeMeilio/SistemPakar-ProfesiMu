<x-home-layout class="bg-backgroundLight text-white h-screen">
    <section class="h-[376px] mb-10 pt-12 px-24 bg-navy-primary">
        <a href="/" class="flex gap-3">
            <img src="{{ asset('assets/icons/logo_white.svg') }}" alt="Logo ProfesiMu" />
            <p class="text-bold text-xl text-white font-bold">ProfesiMu</p>
        </a>

        <h1 class="text-3xl text-white font-bold mt-12">Tes Kepribadian Profesi Digital Mu</h1>

        <div class="relative top-12 pb-14">
            <div class="card-primary">
                <div class="flex flex-col items-center">
                    <h2 class="text-2xl font-bold mb-4">Isi Data Diri Kamu</h2>
                    <div class="h-1.5 w-24 bg-orange rounded-full"></div>
                </div>
                <form class="mt-8 grid gap-6" action="{{ route('submit_data') }}" autocomplete="off" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="participant_name" class="block mb-2">Nama Lengkap <span class="text-red">*</span></label>
                        <input name="participant_name" type="text" id="participant_name" class="input-field" placeholder="Masukkan nama lengkap kamu" value="{{ old('participant_name') }}">
                        @error('participant_name')
                            <div class="error-message mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="flex gap-10">
                        <div class="w-full">
                            <label for="age" class="block mb-2">Usia (tahun) <span class="text-red">*</span></label>
                            <input name="age" type="number" id="age" class="input-field" placeholder="Masukkan usia saat ini" value="{{ old('age') }}">
                            @error('age')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="gender" class="block mb-2">Jenis Kelamin <span class="text-red">*</span></label>
                            <div class="flex items-center gap-7 pt-2">
                                <div class="flex items-center">
                                    <input checked id="gender-male" type="radio" value="Laki-laki" name="gender" class="w-4 h-4 text-orange focus:ring-orange bg-gray-100 border-gray-300">
                                    <label for="gender-male" class="ml-2">Laki-laki</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="gender-female" type="radio" value="Perempuan" name="gender" class="w-4 h-4 text-orange focus:ring-orange bg-gray-100 border-gray-300">
                                    <label for="gender-female" class="ml-2">Perempuan</label>
                                </div>
                            </div>
                            @error('gender')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gap-10">
                        <div class="w-full">
                            <label for="education" class="block mb-2">Pendidikan Terakhir <span class="text-red">*</span></label>
                            <select id="education" name="education" class="input-field">
                                <option value="">Pilih pendidikan terakhir</option>
                                <option value="SMP">SMP/Sederajat</option>
                                <option value="SMA">SMA/SMK/Sederajat</option>
                                <option value="D1">Diploma I (D1)</option>
                                <option value="D2">Diploma II (D2)</option>
                                <option value="D3">Diploma III (D3)</option>
                                <option value="D4">Diploma IV (D4)</option>
                                <option value="S1">Strata I (S1)</option>
                                <option value="S2">Strata II (S2)</option>
                                <option value="S3">Strata III (S3)</option>
                            </select>
                            @error('education')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="study_program" class="block mb-2">Jurusan atau Bidang Studi <span class="text-red">*</span></label>
                            <input name="study_program" type="text" id="study_program" class="input-field" placeholder="Masukkan jurusan atau bidang studi" value="{{ old('study_program') }}">
                            @error('study_program')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="flex mb-2">
                            <label for="experience" class="block mr-2">Pengalaman Kerja atau Belajar Bidang Digital <span class="text-red">*</span></label>
                            <a href="/" onclick="return false" data-modal-target="default-modal" data-modal-toggle="default-modal">
                                <i icon-name="info" class="w-5 text-orange cursor-pointer"></i>
                            </a>
                        </div>
                        <select id="experience" name="experience" class="input-field">
                            <option value="">Pilih pengalaman kerja atau belajar mu</option>
                            @foreach ($experiences as $experience)
                                <option value="{{ $experience }}">{{ $experience }}</option>
                            @endforeach
                        </select>
                        @error('experience')
                            <div class="error-message mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="goal" class="block mb-2">Tujuan Mengikuti Tes (Opsional)</label>
                        <textarea name="goal" type="text" id="goal" class="input-field" placeholder="Misal: untuk mencari arah karir digital yang sesuai kepribadian diri sendiri" value="{{ old('goal') }}"></textarea>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="button-orange mt-4 w-fit">
                            Lanjut
                            <i icon-name="chevron-right" class="w-5 ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!--Modal-->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <div class="relative bg-white rounded-xl shadow">
                    <div class="flex items-center justify-between p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-black">
                            Penjelasan Pertanyaan Pengalaman Bidang Digital
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
                            <b>Bidang digital</b> merujuk pada semua aspek kehidupan yang terhubung dengan teknologi digital dan internet. 
                            Hal ini meliputi berbagai bidang seperti pemasaran digital, pengembangan web, analisis data, teknologi informasi, 
                            desain grafis, ilmu komputer, dan sebagainya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-home-layout>