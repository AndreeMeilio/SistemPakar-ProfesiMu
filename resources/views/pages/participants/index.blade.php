<x-app-layout title="Riwayat Partisipan">
    <div class="flex flex-col gap-y-10">
        <h1 class="font-semibold text-[32px] text-navy-primary">Riwayat Partisipan</h1>
        <div class="flex flex-col gap-y-5">
            <p class="font-medium text-navy-primary text-xl">Daftar Riwayat Partisipan</p>
            <div class="table-wrapper">
                <div class="overflow-x-auto relative rounded-lg py-1">
                    <table id="table_datatables" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Partisipan</th>
                                <th>Usia</th>
                                <th>Hasil Kepribadian</th>
                                <th>Hasil Profesi Digital</th>
                                <th class="!text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($participants as $index => $participant)
                            <tr>
                                <td class="bg-white">{{ $index+1 }}</td>
                                <td>{{ $participant->participant_name }}</td>
                                <td>{{ $participant->age }} tahun</td>
                                <td>{{ $participant->personality->personality_name ?? '-' }}</td>
                                <td>{{ $participant->profession->profession_name ?? '-' }}</td>
                                <td>
                                <div class="flex gap-x-3 justify-center">
                                    <a href="{{ route('riwayat-partisipan.show', $participant->id) }}" class="button-primary px-5 py-2">
                                        Detail
                                    </a>
                                    <form method="POST" action="{{ route('riwayat-partisipan.destroy', $participant->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="button-delete">
                                        <i icon-name="trash-2"></i>
                                        </button>
                                    </form>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>