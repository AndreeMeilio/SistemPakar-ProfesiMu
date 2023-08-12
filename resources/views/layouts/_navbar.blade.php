@php
$fullName = Auth::user()->nama_lengkap;
$firstName = explode(' ',trim($fullName))[0];
@endphp

<nav class="flex items-center justify-between bg-white py-3.5 pl-8 pr-12">
    <button id="sidebarCollapseDefault" class="hidden lg:block">
        <i icon-name="menu"></i>
    </button>
    <button class="block lg:hidden" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-sidebar" aria-controls="nav-sidebar">
        <i icon-name="menu"></i>
    </button>
    <div class="dropdown inline-block">
        <button class="py-2 flex items-center gap-x-3 ">
            @php $photo = Auth::user()->foto @endphp
            <img src="{{ isset($photo) ? asset('storage/images/pengguna/'.$photo) : asset('assets/images/default_photo.png') }}" alt="Photo Profile" class="w-10 h-10 object-cover rounded-full">
            <div class="flex flex-col text-left">
                <p class="font-medium">{{ $firstName }}</p>
                <p class="text-grey-primary text-sm">Admin HR</p>
            </div>
            <i icon-name="chevron-down"></i>
        </button>
        <div class="dropdown-menu absolute min-w-[170px] hidden bg-white rounded-xl pt-3">
            <a href="{{ route('detail_profile') }}" class="dropdown-item rounded-t-xl">
                <i icon-name="user" class="text-grey-primary"></i>
                <p>Lihat Profil</p>
            </a>
            <hr/>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full dropdown-item rounded-b-xl">
                    <i icon-name="log-out" class="text-grey-primary"></i>
                    <p>Keluar</p>
                </button>
            </form>
        </div>
    </div>
</nav>
