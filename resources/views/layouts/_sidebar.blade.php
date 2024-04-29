<aside class="sidebar offcanvas max-lg:offcanvas-start max-lg:invisible min-lg:visible fixed h-screen flex flex-col overflow-y-auto justify-between bg-white w-[280px]" tabindex="-1" id="nav-sidebar">
    <div class="py-7 px-10">
        <h6 class="text-xl font-semibold text-navy-primary">ProfesiMu</h6>
        <p class="text-md text-grey-primary">Dashboard Admin</p>
    </div>
    <div class="flex flex-col gap-y-10 my-3 grow">
        <div class="section-menu">
            <a href="{{ route('dashboard') }}" class="item-menu {{ Request::is('dashboard') ? 'active' : '' }}">
                <i icon-name="layout-grid"></i>
                <p class="text-grey-primary">Beranda</p>
            </a>
            <a href="{{ route('profesi-digital.index') }}" class="item-menu {{ request()->routeIs('profesi-digital*') ? 'active' : '' }}">
                <i icon-name="briefcase"></i>
                <p class="text-grey-primary">Profesi Digital</p>
            </a>
            <a href="{{ route('karakteristik-riasec.index') }}" class="item-menu {{ request()->routeIs('karakteristik-riasec*') ? 'active' : '' }}">
                <i icon-name="clipboard-list"></i>
                <p class="text-grey-primary">Karakteristik RIASEC</p>
            </a>
            <a href="#" class="item-menu {{ Request::is('a') ? 'active' : '' }}">
                <i icon-name="clipboard-check"></i>
                <p class="text-grey-primary">Aturan Relasi</p>
            </a>
            <a href="{{ route('riwayat-partisipan.index') }}" class="item-menu {{ request()->routeIs('riwayat-partisipan*') ? 'active' : '' }}">
                <i icon-name="users"></i>
                <p class="text-grey-primary">Riwayat Partisipan</p>
            </a>
            <a href="{{ route('akun-admin.index') }}" class="item-menu {{ request()->routeIs('akun-admin*') ? 'active' : '' }}">
                <i icon-name="user"></i>
                <p class="text-grey-primary">Akun Admin</p>
            </a>
        </div>
    </div>
    <div class="pb-10">
        <p class="text-center text-grey-secondary">© 2024 ProfesiMu</p>
    </div>
</aside>
