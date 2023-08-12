<x-app-layout title="Lowongan Kerja">
    <div class="flex flex-col gap-y-10">
        <h1 class="font-semibold text-[32px] text-navy">Kelola Lowongan Kerja</h1>
        <div class="flex flex-col gap-y-5">
            <div class="flex justify-between gap-5 max-[1200px]:flex-col min-[1201px]:items-center">
                <p class="font-medium text-navy text-xl">Daftar Lowongan Kerja</p>
                <div class="flex gap-x-5">
                    <a href="{{ route('lowongan-kerja.create') }}" class="w-full flex justify-center button-primary px-5 py-3">
                        <div class="flex gap-x-2">
                            <i icon-name="plus"></i>
                            <p>Tambah</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="table-wrapper">
                <div class="overflow-x-auto relative rounded-lg py-1">
                    <table id="table_datatables" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>ID.</th>
                            <th>Nama Posisi</th>
                            <th>Tipe Pekerjaan</th>
                            <th>Departemen</th>
                            <th>Status</th>
                            <th class="!text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobsList as $index => $job)
                            <tr>
                                <td class="bg-white">{{ $index+1 }}</td>
                                <td>{{ $job->nama }}</td>
                                <td>{{ $job->tipe->nama }}</td>
                                <td>{{ $job->departemen->nama }}</td>
                                <td>
                                @if ($job->status_aktif)
                                    <div class="chip-green"><p class="text-sm">Dibuka</p></div>
                                @else
                                    <div class="chip-orange"><p class="text-sm">Draf</p></div>
                                @endif
                                </td>
                                <td>
                                <div class="flex gap-x-3 justify-center">
                                    <a href="{{ route('lowongan-kerja.show', $job->id) }}" class="button-primary px-5 py-2">
                                        Detail
                                    </a>
                                    <a href="{{ route('lowongan-kerja.edit', $job->id) }}" class="button-secondary px-5 py-2">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('lowongan-kerja.destroy', $job->id) }}">
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