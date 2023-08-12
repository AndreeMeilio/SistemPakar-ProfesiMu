<div class="flex flex-col bg-white rounded-xl px-6 py-2 w-full">
    @foreach($data as $applicants)
    <div class="flex items-center border-b last:border-b-0 border-b-[#f7f7fa] py-4">
        <img src="{{ isset($applicants['foto']) ? 
                    asset('storage/images/pelamar/'.$applicants['foto']) : asset('assets/images/default_photo.png') }}" 
                    alt="Photo Profile" class="w-14 h-14 object-cover rounded-full">
        <div class="ml-4 grow">
            <p class="text-navy font-semibold mb-1">{{ $applicants['nama_lengkap'] }}</p>
            <p class="text-grey-secondary text-sm">Mendaftar sebagai 
                <span class="text-navy font-medium">{{ $applicants->lowongan->nama }}</span>
                <span class="text-navy font-medium"> ({{ $applicants->lowongan->tipe->nama }})</span>
            </p>
        </div>
    </div>
    @endforeach
</div>