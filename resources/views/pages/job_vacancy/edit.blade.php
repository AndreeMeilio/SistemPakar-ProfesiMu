<x-app-layout title="Edit Lowongan Kerja">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Edit Lowongan Kerja</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('lowongan-kerja.index') }}" class="breadcrumb-link">
                            Lowongan Kerja
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Edit Lowongan</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[600px] max-sm:w-full">
            <div class="flex flex-col gap-y-1">
                <p class="title-medium">Edit Lowongan Kerja</p>
                @if ($job->id_admin_updated != null)
                    <p class="text-grey-secondary">Terakhir diperbarui : {{ ($job->updated_at)->isoFormat('dddd, D MMMM Y') }}</p>
                    <p class="text-grey-secondary mb-1">Oleh : {{ $job->updatedBy->nama_lengkap }}</p>
                @endif
            </div>
            <form autocomplete="off" class="flex flex-col gap-y-6" action="{{ route('lowongan-kerja.update', $job->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Edit Lowongan Kerja
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="nama" class="block mb-2">Nama Posisi <span class="text-red">*</span></label>
                            <input name="nama" type="text" id="nama" class="input-field" placeholder="Masukkan nama posisi" value="{{ $job->nama }}">
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
                                    <option value="{{ $type->id }}" {{ $job->id_tipe_pekerjaan == $type->id ? 'selected' : '' }}>{{ $type->nama }}</option>
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
                            <textarea name="deskripsi" id="deskripsi">{!!$job->deskripsi!!}</textarea>
                            @error('deskripsi')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="block mb-2">Persyaratan <span class="text-red">*</span></label>
                            <textarea name="persyaratan" id="persyaratan">{!!$job->persyaratan!!}</textarea>
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
                                @foreach ($departments as $departemen)
                                    <option value="{{ $departemen->id }}" {{ $job->id_departemen == $departemen->id ? 'selected' : '' }}>{{ $departemen->nama }}</option>
                                @endforeach
                            </select>
                            @error('departemen')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            @php
                                $lokasi = array('Jakarta Pusat', 'Seluruh Indonesia');
                            @endphp
                            <label for="lokasi" class="block mb-2">Lokasi <span class="text-red">*</span></label>
                            <select name="lokasi" id="lokasi" class="input-field">
                                <option value="">Pilih lokasi</option>
                                @foreach ($lokasi as $value)
                                    <option value="{{ $value }}" {{ $job->lokasi == $value ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
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
                                <input name="tanggal_dibuka" type="date" id="tanggal_dibuka" class="input-field" value="{{ $job->tanggal_dibuka }}">
                                @error('tanggal_dibuka')
                                    <div class="error-message mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="tanggal_ditutup" class="block mb-2">Tanggal Ditutup <span class="text-red">*</span></label>
                                <input name="tanggal_ditutup" type="date" id="tanggal_ditutup" class="input-field" value="{{ $job->tanggal_ditutup }}">
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
                                <option value="0" {{ $job->status_aktif == '0' ? 'selected' : '' }}>Draf</option>
                                <option value="1" {{ $job->status_aktif == '1' ? 'selected' : '' }}>Dibuka</option>
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
                    <a href="{{ route('lowongan-kerja.index') }}" class="button-danger py-3 px-10">
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
