<x-app-layout title="Tambah Pengguna">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Tambah Pengguna</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('pengguna.index') }}" class="breadcrumb-link">
                            Kelola Pengguna
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Tambah Pengguna</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[600px] max-sm:w-full">
            <p class="title-medium">Tambah Pengguna</p>
            <form autocomplete="off" class="flex flex-col gap-y-6" action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Tambah Pengguna
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="photo" class="block mb-2">Foto Pengguna <span class="text-red">*</span></label>
                            <input name="photo" type="file" id="photo" accept="image/png, image/jpg, image/jpeg" class="input-field">
                            @error('photo')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="full_name" class="block mb-2">Nama Lengkap <span class="text-red">*</span></label>
                            <input name="full_name" type="text" id="full_name" class="input-field" placeholder="Masukkan nama pengguna" value="{{ old('full_name') }}">
                            @error('full_name')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2">Email <span class="text-red">*</span></label>
                            <input name="email" type="email" id="email" class="input-field" placeholder="Masukkan email" value="{{ old('email') }}">
                            @error('email')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2">Kata Sandi <span class="text-red">*</span></label>
                            <input name="password" type="password" id="password" class="bg-white border border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5" placeholder="Masukkan Kata Sandi">
                            @error('password')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation" class="block mb-2">Ulang Kata Sandi <span class="text-red">*</span></label>
                            <input name="password_confirmation" type="password" id="password_confirmation" class="bg-white border border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5" placeholder="Masukkan Kata Sandi">
                            @error('password_confirmation')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 mt-2 max-sm:flex-col-reverse gap-y-3">
                    <a href="{{ route('pengguna.index') }}" class="button-danger py-3 px-10">
                        Batal
                    </a>
                    <button type="submit" class="button-primary py-3 px-10">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
