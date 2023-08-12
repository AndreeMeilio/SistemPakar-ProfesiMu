<x-app-layout title="Tambah Kutipan">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Tambah Kutipan Kompas</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('kutipan.index') }}" class="breadcrumb-link">
                            Kutipan Kompas
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Tambah Kutipan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[600px] max-sm:w-full">
            <p class="title-medium">Tambah Kutipan Kompas</p>
            <form autocomplete="off" class="flex flex-col gap-y-6" action="{{ route('kutipan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Tambah Kutipan
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="foto" class="block mb-2">Foto Pengutip <span class="text-red">*</span></label>
                            <input name="foto" type="file" id="foto" accept="image/png, image/jpg, image/jpeg" class="input-field">
                            @error('foto')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="nama" class="block mb-2">Nama Pengutip <span class="text-red">*</span></label>
                            <input name="nama" type="text" id="nama" class="input-field" placeholder="Masukkan nama pengutip" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="kutipan" class="block mb-2">Kutipan <span class="text-red">*</span></label>
                            <textarea name="kutipan" id="kutipan" class="input-field" placeholder="Masukkan kutipan">{{ old('kutipan') }}</textarea>
                            @error('kutipan')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="posisi" class="block mb-2">Posisi <span class="text-red">*</span></label>
                            <input name="posisi" type="text" id="posisi" class="input-field" placeholder="Masukkan posisi" value="{{ old('posisi') }}">
                            @error('posisi')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 mt-2 max-sm:flex-col-reverse gap-y-3">
                    <a href="{{ route('kutipan.index') }}" class="button-danger py-3 px-10">
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
