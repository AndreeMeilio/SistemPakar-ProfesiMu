<x-app-layout title="Edit Pengguna">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Edit Pengguna</h1>
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
                            <span>Edit Pengguna</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[600px] max-sm:w-full">
            <div class="flex flex-col gap-y-1">
                <p class="title-medium">Edit Pengguna</p>
                @if ($user->id_admin_updated != null)
                    <p class="text-grey-secondary">Terakhir diperbarui : {{ ($user->updated_at)->isoFormat('dddd, D MMMM Y') }}</p>
                    <p class="text-grey-secondary mb-1">Oleh : {{ $user->updatedBy->nama_lengkap }}</p>
                @endif
            </div>
            <form autocomplete="off" class="flex flex-col gap-y-6" action="{{ route('pengguna.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Edit Pengguna
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="foto" class="block mb-2">Foto Pengguna</label>
                            <input name="foto" type="file" id="foto" accept="image/png, image/jpg, image/jpeg" class="input-field">
                        </div>
                        <div>
                            <label for="nama_lengkap" class="block mb-2">Nama Lengkap <span class="text-red">*</span></label>
                            <input name="nama_lengkap" value="{{ $user->nama_lengkap }}" type="text" id="nama_lengkap" class="input-field" placeholder="Masukkan nama pengguna" value="{{ old('nama_lengkap') }}">
                            @error('nama_lengkap')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2">Email <span class="text-red">*</span></label>
                            <input name="email" value="{{ $user->email }}" type="email" id="email" class="input-field" placeholder="Masukkan email" value="{{ old('email') }}">
                            @error('email')
                                <div class="error-message mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label for="" class="block">Kata Sandi</label>
                                <a href="{{ route('user_password.edit', $user->id) }}" class="text-xs text-blue-primary p-1 px-2 font-medium border border-2 rounded-full hover:border-blue-primary">
                                    Ubah Kata Sandi
                                </a>
                            </div>
                            <input name="" type="text" value="{{ $user->password_confirmation }}" id="" class="bg-white border border-2 border-gray-300 text-sm rounded-lg block w-full p-2.5 opacity-50" placeholder="Masukkan Kata Sandi" @disabled(true)>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 mt-2 max-sm:flex-col-reverse gap-y-3">
                    <a href="{{ route('pengguna.index') }}" class="button-danger py-3 px-10">
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
