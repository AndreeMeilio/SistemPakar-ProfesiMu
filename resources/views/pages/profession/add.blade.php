<x-app-layout title="Tambah Profesi Digital">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Tambah Profesi Digital</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('profesi-digital.index') }}" class="breadcrumb-link">
                            Profesi Digital
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Tambah Profesi</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[800px] max-sm:w-full">
            <form autocomplete="off" class="flex flex-col gap-y-7" action="{{ route('profesi-digital.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Tambah Profesi Digital
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div class="mb-1">
                            <label for="code" class="block mb-2">Kode Profesi <span class="text-red">*</span></label>
                            <input name="code" type="text" id="code" class="input-field" placeholder="Masukkan kode profesi" value="{{ old('code') }}">
                            @error('code')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="profession_name" class="block mb-2">Nama Profesi <span class="text-red">*</span></label>
                            <input name="profession_name" type="text" id="profession_name" class="input-field" placeholder="Masukkan nama profesi" value="{{ old('profession_name') }}">
                            @error('profession_name')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="category" class="block mb-2">Kategori <span class="text-red">*</span></label>
                            <select name="category" id="category" class="input-field">
                                <option value="">Pilih kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="learning_title" class="block mb-2">Judul Rekomendasi Pembelajaran <span class="text-red">*</span></label>
                            <input name="learning_title" type="text" id="learning_title" class="input-field" placeholder="Masukkan nama profesi" value="{{ old('learning_title') }}">
                            @error('learning_title')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="learning_url" class="block mb-2">URL Rekomendasi Pembelajaran <span class="text-red">*</span></label>
                            <input name="learning_url" type="text" id="learning_url" class="input-field" placeholder="Masukkan nama profesi" value="{{ old('learning_url') }}">
                            @error('learning_url')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="caption" class="block mb-2">Caption <span class="text-red">*</span></label>
                            <input name="caption" type="text" id="caption" class="input-field" placeholder="Masukkan 3 keahlian utama terkait profesi ini" value="{{ old('caption') }}">
                            @error('caption')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-2">Deskripsi <span class="text-red">*</span></label>
                            <textarea name="description" id="description" class="input-field" placeholder="Masukkan deskripsi profesi"></textarea>
                            @error('description')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-2">Tanggung Jawab <span class="text-red">*</span></label>
                            <textarea name="responsibility" id="responsibility" class="input-field" placeholder="Masukkan tanggung jawab profesi"></textarea>
                            @error('responsibility')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-2">Keahlian <span class="text-red">*</span></label>
                            <textarea name="skill" id="skill" class="input-field" placeholder="Masukkan keahlian profesi"></textarea>
                            @error('skill')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 max-sm:flex-col-reverse gap-y-3">
                    <a href="{{ route('profesi-digital.index') }}" class="button-danger py-3 px-10">
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
