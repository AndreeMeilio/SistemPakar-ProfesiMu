<x-app-layout title="Tambah Lowongan Kerja">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Tambah Lowongan Kerja</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('profesi-digital.index') }}" class="breadcrumb-link">
                            Lowongan Kerja
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Tambah Lowongan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[600px] max-sm:w-full">
            <p class="title-medium">Tambah Lowongan Kerja</p>
            <form autocomplete="off" class="flex flex-col gap-y-6" action="{{ route('profesi-digital.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Tambah Lowongan Kerja
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="nama" class="block mb-2">Nama Posisi <span class="text-red">*</span></label>
                            <input name="nama" type="text" id="nama" class="input-field" placeholder="Masukkan nama posisi" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="tipe_pekerjaan" class="block mb-2">Tipe Pekerjaan <span class="text-red">*</span></label>
                            <select name="tipe_pekerjaan" id="tipe_pekerjaan" class="input-field">
                                <option value="">Pilih tipe pekerjaan</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->nama }}</option>
                                @endforeach
                            </select>
                            @error('tipe_pekerjaan')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-2">Deskripsi <span class="text-red">*</span></label>
                            <textarea name="deskripsi" id="deskripsi" class="h-[100px]"></textarea>
                            @error('deskripsi')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-2">Persyaratan <span class="text-red">*</span></label>
                            <textarea name="persyaratan" id="persyaratan"></textarea>
                            @error('persyaratan')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="departemen" class="block mb-2">Departemen <span class="text-red">*</span></label>
                            <select name="departemen" id="departemen" class="input-field">
                                <option value="">Pilih departemen</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->nama }}</option>
                                @endforeach
                            </select>
                            @error('departemen')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="lokasi" class="block mb-2">Lokasi <span class="text-red">*</span></label>
                            <select name="lokasi" id="lokasi" class="input-field">
                                <option value="">Pilih lokasi</option>
                                <option value="Jakarta Pusat">Jakarta Pusat</option>
                                <option value="Seluruh Indonesia">Seluruh Indonesia</option>
                            </select>
                            @error('lokasi')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 gap-x-6">
                            <div>
                                <label for="tanggal_dibuka" class="block mb-2">Tanggal Dibuka <span class="text-red">*</span></label>
                                <input name="tanggal_dibuka" type="date" id="tanggal_dibuka" class="input-field" value="{{ old('tanggal_dibuka') }}">
                                @error('tanggal_dibuka')
                                    <div class="error-message mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="tanggal_ditutup" class="block mb-2">Tanggal Ditutup <span class="text-red">*</span></label>
                                <input name="tanggal_ditutup" type="date" id="tanggal_ditutup" class="input-field" value="{{ old('tanggal_ditutup') }}">
                                @error('tanggal_ditutup')
                                    <div class="error-message mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="status_aktif" class="block mb-2">Status Lowongan <span class="text-red">*</span></label>
                            <select name="status_aktif" id="status_aktif" class="input-field">
                                <option value="">Pilih status</option>
                                <option value="0">Draf</option>
                                <option value="1">Dibuka</option>
                            </select>
                            @error('status_aktif')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 mt-2 max-sm:flex-col-reverse gap-y-3">
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
