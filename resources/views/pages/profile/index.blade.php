<x-app-layout title="Detail Profil">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <h1 class="title-large">Detail Profil</h1>
        </div>
        <div class="flex flex-col gap-y-5">
            <div class="row-span-2">
                <p class="mb-2 font-medium text-blue-primary">Foto Profil</p>
                <img src="{{ isset($profile->foto) ? asset('storage/images/pengguna/'.$profile->foto) : asset('assets/images/default_photo.png') }}" alt="Photo Profile" class="w-24 h-24 object-cover rounded-full">
            </div>
            <div class="flex flex-col gap-6">
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Nama Lengkap</p>
                    <p class="font-medium">{{ $profile->nama_lengkap }}</p>
                </div>
                <div>
                    <p class="mb-1.5 font-medium text-blue-primary">Email</p>
                    <p class="font-medium">{{ $profile->email }}</p>
                </div>
            </div>
            <hr>
            <div class="row-span-2 mb-5">
                <p class="mb-3 font-medium text-blue-primary">Ubah Kata Sandi</p>
                <a href="{{ route('profile_password.edit', $profile->id) }}" class="max-w-[210px] button-primary-hover">
                    Ubah Kata Sandi
                    <i icon-name="arrow-right" class="ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
