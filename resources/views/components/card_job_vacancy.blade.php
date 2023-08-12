<div class="relative flex p-6 items-center justify-between bg-white rounded-xl w-[400px] max-sm:w-full">
    <div>
        <div class="flex items-center gap-x-1.5 mb-1.5">
            <p class="font-semibold text-2xl">{{ $pelamar_count }}</p>
            <span class="text-grey-secondary">Potensial</span>
        </div>
        <div>
            <p class="font-semibold text-xl mb-0.5">{{ $nama }}</p>
            <span class="text-blue-shadow text-sm">Dept. {{ $departemen }}</span>
        </div>
        @if (isset($status_aktif))
            @if ($status_aktif)
                <div class="mt-4 chip-green max-sm:hidden"><p class="text-xs">Dibuka</p></div>
            @else
                <div class="mt-4 chip-orange max-sm:hidden"><p class="text-xs">Draf</p></div>
            @endif
        @endif
    </div>
    <a href="{{ $url }}" class="flex items-center justify-center bg-[#F6F8FF] min-w-[44px] min-h-[44px] rounded-full text-blue-secondary after:absolute after:inset-0">
        <i icon-name="chevron-right"></i>
    </a>
</div>
