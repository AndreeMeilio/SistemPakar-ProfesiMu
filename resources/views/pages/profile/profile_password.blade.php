<x-app-layout title="Ubah Kata Sandi">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large mb-4">Ubah Kata Sandi</h1>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li class="inline-flex items-center">
                        <a href="{{ url('detail-profil') }}" class="breadcrumb-link">
                            Detail Profil
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Ubah Kata Sandi</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="flex flex-col gap-y-5 max-w-[800px] max-sm:w-full">
            <p class="title-medium">Ubah Kata Sandi</p>
            <form class="flex flex-col gap-y-7" action="{{ route('password.update', $user->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-col bg-white rounded-xl">
                    <p class="font-medium py-3.5 px-5">
                        Form Ubah Kata Sandi
                    </p>
                    <hr/>
                    <div class="flex flex-col p-5 gap-5">
                        <input type="hidden" value="{{ $user->id }}" name="id">
                        <div>
                            <label for="current_password" class="block mb-2">Kata Sandi Lama <span class="text-red">*</span></label>
                            <input name="current_password" type="password" id="current_password" class="input-field" placeholder="Masukkan Kata Sandi Lama">
                            @error('current_password')
                                <div class="mt-1 error-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2">Kata Sandi Baru <span class="text-red">*</span></label>
                            <input name="password" type="password" id="password" class="input-field" placeholder="Masukkan Kata Sandi Baru">
                            @error('password')
                                <div class="mt-1 error-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation" class="block mb-2">Ulang Kata Sandi Baru <span class="text-red">*</span></label>
                            <input name="password_confirmation" type="password" id="password_confirmation" class="input-field" placeholder="Masukkan Ulang Kata Sandi Baru">
                            @error('password_confirmation')
                                <div class="mt-1 error-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-x-4 max-sm:flex-col-reverse gap-y-3">
                    <a href="{{ url('detail-profil') }}" class="button-danger py-3 px-10">
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
