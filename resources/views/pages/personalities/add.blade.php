<x-app-layout title="Tambah Tipe Pekerjaan">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Tambah Tipe Pekerjaan</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('karakteristik-riasec.index') }}" class="breadcrumb-link">
                            Tipe Pekerjaan
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Tambah Tipe Pekerjaan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[600px] max-sm:w-full">
            <p class="title-medium">Tambah Tipe Pekerjaan</p>
            <form autocomplete="off" class="flex flex-col gap-y-6" action="{{ route('karakteristik-riasec.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Tambah Tipe Pekerjaan
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="tipe_pekerjaan" class="block mb-2">Tipe Pekerjaan <span class="text-red">*</span></label>
                            <input name="nama" type="text" id="tipe_pekerjaan" class="input-field" placeholder="Masukkan tipe pekerjaan" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="bg_color" class="block mb-2">Pilih Warna Latar <span class="text-red">*</span></label>
                            <div class="input-field h-11 !p-0">
                                <input name="bg_color" type="color" id="bg_color" class="input-type-color" value="#ABF2FF">
                            </div>
                            @error('bg_color')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="text_color" class="block mb-2">Pilih Warna Teks <span class="text-red">*</span></label>
                            <div class="input-field h-11 !p-0">
                                <input name="text_color" type="color" id="text_color" class="input-type-color" value="#037F97">
                            </div>
                            @error('text_color')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <p class="block mb-2">Pratinjau</p>
                            <div id="bg_preview" class="w-fit rounded-lg px-3 py-1.5">
                                <p id="text_preview">Tipe Pekerjaan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 mt-2 max-sm:flex-col-reverse gap-y-3">
                    <a href="{{ route('karakteristik-riasec.index') }}" class="button-danger py-3 px-10">
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
