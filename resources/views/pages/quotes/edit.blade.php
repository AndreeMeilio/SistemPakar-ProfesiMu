<x-app-layout title="Edit Kutipan">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Edit Kutipan Kompas</h1>
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
                            <span>Edit Kutipan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[600px] max-sm:w-full">
            <div class="flex flex-col gap-y-1">
                <p class="title-medium">Edit Kutipan Kompas</p>
                @if ($quotes->id_admin_updated != null)
                    <p class="text-grey-secondary">Terakhir diperbarui : {{ ($quotes->updated_at)->isoFormat('dddd, D MMMM Y') }}</p>
                    <p class="text-grey-secondary mb-1">Oleh : {{ $quotes->updatedBy->full_name }}</p>
                @endif
            </div>
            <form autocomplete="off" class="flex flex-col gap-y-6" action="{{ route('kutipan.update', $quotes->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Edit Kutipan
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="photo" class="block mb-2">Foto Pengutip</label>
                            <input name="photo" type="file" id="photo" accept="image/png, image/jpg, image/jpeg" class="input-field">
                        </div>
                        <div>
                            <label for="nama" class="block mb-2">Nama Pengutip <span class="text-red">*</span></label>
                            <input name="nama" value="{{ $quotes->nama }}" type="text" id="nama" class="input-field" placeholder="Masukkan nama pengutip">
                            @error('nama')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="kutipan" class="block mb-2">Kutipan <span class="text-red">*</span></label>
                            <textarea name="kutipan" id="kutipan" class="input-field" placeholder="Masukkan kutipan">{{ $quotes->kutipan }}</textarea>
                            @error('kutipan')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="posisi" class="block mb-2">Posisi <span class="text-red">*</span></label>
                            <input name="posisi" value="{{ $quotes->posisi }}" type="text" id="posisi" class="input-field" placeholder="Masukkan posisi">
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
                        Perbarui
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
