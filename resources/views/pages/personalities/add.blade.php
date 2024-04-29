<x-app-layout title="Tambah Karakteristik RIASEC">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Tambah Karakteristik RIASEC</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('karakteristik-riasec.index') }}" class="breadcrumb-link">
                            Karakteristik RIASEC
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Tambah Karakteristik</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[800px] max-sm:w-full">
            <form autocomplete="off" class="flex flex-col gap-y-7" action="{{ route('karakteristik-riasec.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Tambah Karakteristik RIASEC
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div class="mb-1">
                            <label for="code" class="block mb-2">Kode Karakteristik <span class="text-red">*</span></label>
                            <input name="code" type="text" id="code" class="input-field" placeholder="Masukkan kode karakteristik" value="{{ old('code') }}">
                            @error('code')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="personality_id" class="block mb-2">Tipe Kepribadian <span class="text-red">*</span></label>
                            <select name="personality_id" id="personality_id" class="input-field">
                                <option value="">Pilih tipe kepribadian</option>
                                @foreach ($personalities as $personality)
                                    <option value="{{ $personality->id }}">{{ $personality->personality_name }}</option>
                                @endforeach
                            </select>
                            @error('personality_id')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="characteristic" class="block mb-2">Karakteristik <span class="text-red">*</span></label>
                            <textarea name="characteristic" id="characteristic" class="input-field" placeholder="Masukkan karakteristik kepribadian"></textarea>
                            @error('characteristic')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 max-sm:flex-col-reverse gap-y-3">
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
