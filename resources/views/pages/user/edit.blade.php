<x-app-layout title="Edit Akun Admin">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Edit Akun Admin</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('akun-admin.index') }}" class="breadcrumb-link">
                            Kelola Akun Admin
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Edit Admin</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[800px] max-sm:w-full">
            <form autocomplete="off" class="flex flex-col gap-y-7" action="{{ route('akun-admin.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">Form Edit Akun Admin</p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <div>
                            <label for="full_name" class="block mb-2">Nama Lengkap <span class="text-red">*</span></label>
                            <input name="full_name" value="{{ $user->full_name }}" type="text" id="full_name" class="input-field" placeholder="Masukkan nama admin" value="{{ old('full_name') }}">
                            @error('full_name')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2">Email <span class="text-red">*</span></label>
                            <input name="email" value="{{ $user->email }}" type="email" id="email" class="input-field" placeholder="Masukkan email" value="{{ old('email') }}">
                            @error('email')
                                <div class="error-message mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="pb-1">
                            <label for="password" class="block mb-2">Kata Sandi</label>
                            <input name="password" type="text" value="{{ $user->password_confirmation }}" id="password" class="input-field disabled:bg-[#E9ECF2]" placeholder="Masukkan Kata Sandi" disabled>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 max-sm:flex-col-reverse gap-y-3">
                    <a href="{{ route('akun-admin.index') }}" class="button-danger py-3 px-10">
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
