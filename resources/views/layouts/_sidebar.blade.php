<aside class="sidebar offcanvas max-lg:offcanvas-start max-lg:invisible min-lg:visible fixed h-screen flex flex-col overflow-y-auto justify-between bg-white w-[330px]" tabindex="-1" id="nav-sidebar">
    <div class="flex gap-x-5 justify-center align-items-center py-7 px-10">
        <img src="{{ asset('assets/images/kompas_logo.png') }}" alt="Logo Kompas" width="50"/>
        <div>
            <h6 class="text-lg font-semibold text-navy">HRIS</h6>
            <p class="text-md text-grey-primary">CMS Karier Kompas</p>
        </div>
    </div>
    <div class="flex flex-col gap-y-10 my-5 grow">
        <div class="section-menu">
            <p class="text-sm font-semibold pl-10">MENU</p>
            <a href="{{ route('home') }}" class="item-menu {{ Request::is('/') ? 'active' : '' }}">
                <i icon-name="layout-grid"></i>
                <p class="text-grey-primary">Beranda</p>
            </a>
            <a href="{{ route('lowongan-kerja.index') }}" class="item-menu {{ request()->routeIs('lowongan-kerja*') ? 'active' : '' }}">
                <i icon-name="briefcase"></i>
                <p class="text-grey-primary">Lowongan Kerja</p>
            </a>
            <a href="#" class="item-menu {{ Request::is('a') ? 'active' : '' }}">
                <i icon-name="clipboard-list"></i>
                <p class="text-grey-primary">Pelamar Pekerjaan</p>
            </a>
            <a href="{{ route('potensial.index') }}" class="item-menu {{ request()->routeIs('potensial*') ? 'active' : '' }}">
                <i icon-name="clipboard-check"></i>
                <p class="text-grey-primary">Pelamar Potensial</p>
            </a>
            <a href="{{ route('departemen.index') }}" class="item-menu {{ request()->routeIs('departemen*') ? 'active' : '' }}">
                <i icon-name="book"></i>
                <p class="text-grey-primary">Data Departemen</p>
            </a>
            <a href="{{ route('tipe-pekerjaan.index') }}" class="item-menu {{ request()->routeIs('tipe-pekerjaan*') ? 'active' : '' }}">
                <i icon-name="file-spreadsheet"></i>
                <p class="text-grey-primary">Tipe Pekerjaan</p>
            </a>
            <a href="{{ route('kutipan.index') }}" class="item-menu {{ request()->routeIs('kutipan*') ? 'active' : '' }}">
                <i icon-name="quote"></i>
                <p class="text-grey-primary">Kutipan Kompas</p>
            </a>
            <a href="{{ route('pengguna.index') }}" class="item-menu {{ request()->routeIs('pengguna*') ? 'active' : '' }}">
                <i icon-name="users"></i>
                <p class="text-grey-primary">Kelola Pengguna</p>
            </a>
        </div>
    </div>
    <div class="p-10">
        <p class="text-center text-grey-secondary">©2022 HRIS Kompas</p>
    </div>
</aside>
