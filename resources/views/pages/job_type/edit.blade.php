<x-app-layout title="Edit Tipe Pekerjaan">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Edit Tipe Pekerjaan</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('tipe-pekerjaan.index') }}" class="breadcrumb-link">
                            Tipe Pekerjaan
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Edit Tipe Pekerjaan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[600px] max-sm:w-full">
            <div class="flex flex-col gap-y-1">
                <p class="title-medium">Edit Tipe Pekerjaan</p>
                @if ($jobType->id_admin_updated != null)
                    <p class="text-grey-secondary">Terakhir diperbarui : {{ ($jobType->updated_at)->isoFormat('dddd, D MMMM Y') }}</p>
                    <p class="text-grey-secondary mb-1">Oleh : {{ $jobType->updatedBy->nama_lengkap }}</p>
                @endif
            </div>
            <form autocomplete="off" class="flex flex-col gap-y-6" action="{{ route('tipe-pekerjaan.update', $jobType->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Edit Tipe Pekerjaan
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="tipe_pekerjaan" class="block mb-2">Tipe Pekerjaan <span class="text-red">*</span></label>
                            <input name="nama" value="{{ $jobType->nama }}" type="text" id="tipe_pekerjaan" class="input-field" placeholder="Masukkan tipe pekerjaan">
                            @error('nama')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="bg_color" class="block mb-2">Pilih Warna Latar <span class="text-red">*</span></label>
                            <div class="input-field h-11 !p-0">
                                <input name="bg_color" value="{{ $jobType->bg_color }}" type="color" id="bg_color" class="input-type-color">
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
                                <input name="text_color" value="{{ $jobType->text_color }}" type="color" id="text_color" class="input-type-color">
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
                    <a href="{{ route('tipe-pekerjaan.index') }}" class="button-danger py-3 px-10">
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
