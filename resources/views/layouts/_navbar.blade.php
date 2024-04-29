@php
$fullName = Auth::user()->full_name;
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
            <div class="flex flex-col text-left">
                <p class="font-medium">{{ $firstName }}</p>
                <p class="text-grey-primary text-sm">Admin</p>
            </div>
            <i icon-name="chevron-down"></i>
        </button>
        <div class="dropdown-menu hidden">
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
