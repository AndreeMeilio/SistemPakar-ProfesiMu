<div class="flex p-6 items-center justify-between bg-white rounded-xl w-80 h-32 max-sm:w-full">
    <div>
        <span class="text-grey-secondary">{{ $data['title'] }}</span>
        <p class="font-bold text-3xl mt-2.5">{{ $data['value'] }}</p>
    </div>
    <div class="flex items-center justify-center bg-blue-accent w-11 h-11 rounded-full text-blue-primary">
        <i icon-name="{{ $data['icon'] }}"></i>
    </div>
</div>