<x-home-layout class="bg-backgroundLight text-white h-screen">
    <section class="h-[376px] mb-10 pt-12 px-24 bg-blue-dark">
        <a href="/" class="flex gap-3">
            <img src="{{ asset('assets/icons/logo_white.svg') }}" alt="Logo ProfesiMu" />
            <p class="text-bold text-xl text-white font-bold">ProfesiMu</p>
        </a>

        <h1 class="text-3xl text-white font-bold mt-12">Tes Kepribadian Profesi Digital Mu</h1>

        <div class="relative top-12 pb-14">
            <div class="card-primary">
                <div class="flex flex-col items-center">
                    <h2 class="text-2xl font-bold mb-4">Isi Data Diri Kamu</h2>
                    <div class="h-1.5 w-24 bg-orange-secondary rounded-full"></div>
                </div>
    
                <form class="mt-8 grid gap-6" autocomplete="off" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="fullname" class="block mb-2">Nama Lengkap <span class="text-red">*</span></label>
                        <input name="fullname" type="text" id="fullname" class="input-field" placeholder="Masukkan nama lengkap kamu" value="{{ old('fullname') }}">
                        @error('fullname')
                            <div class="error-message mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="flex gap-10">
                        <div class="w-full">
                            <label for="age" class="block mb-2">Usia (tahun) <span class="text-red">*</span></label>
                            <input name="age" type="text" id="age" class="input-field" placeholder="Pilih pendidikan terakhir" value="{{ old('age') }}">
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
                                    <input id="gender-men" type="radio" value="Laki-laki" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                    <label for="gender-men" class="ml-2">Laki-laki</label>
                                </div>
                                <div class="flex items-center">
                                    <input checked id="gender-women" type="radio" value="Perempuan" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                    <label for="gender-women" class="ml-2">Perempuan</label>
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
                            <input name="education" type="text" id="education" class="input-field" placeholder="Pilih pendidikan terakhir" value="{{ old('education') }}">
                            @error('education')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="major" class="block mb-2">Jurusan atau Bidang Studi <span class="text-red">*</span></label>
                            <input name="major" type="text" id="major" class="input-field" placeholder="Masukkan jurusan atau bidang studi" value="{{ old('major') }}">
                            @error('major')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <label for="experience" class="block mb-2">Pengalaman Kerja atau Belajar Bidang Digital <span class="text-red">*</span></label>
                            <i icon-name="info" class="w-5 ml-2 text-orange-secondary cursor-pointer"></i>
                        </div>
                        <input name="experience" type="text" id="experience" class="input-field" placeholder="Pilih pengalaman kerja atau belajar mu" value="{{ old('experience') }}">
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
                        <a class="button-orange mt-4 w-fit" href="{{ route('introduction_test') }}">
                            Lanjut
                            <i icon-name="chevron-right" class="w-5 ml-1"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-home-layout>