<x-app-layout title="Karakteristik RIASEC">
    <div class="flex flex-col gap-y-10">
        <h1 class="title-large">Karakteristik RIASEC</h1>
        <div class="flex flex-col gap-y-5">
            <div class="flex justify-between gap-5 max-sm:flex-col sm:items-center">
                <p class="title-medium">Daftar Karakteristik RIASEC</p>
                <a href="{{ route('karakteristik-riasec.create') }}" class="button-primary justify-center px-6 py-3">
                    <div class="flex gap-x-2">
                        <i icon-name="plus"></i>
                        <p>Tambah</p>
                    </div>
                </a>
            </div>

            <div class="table-wrapper">
                <div class="overflow-x-auto relative rounded-lg py-1">
                    <table id="table_datatables" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>No.</th>
                            <th>Karakteristik RIASEC</th>
                            <th>Warna Latar</th>
                            <th>Warna Teks</th>
                            <th>Slug</th>
                            <th class="!text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobTypesList as $index => $jobType)
                            <tr>
                                <td class="bg-white">{{ $index+1 }}</td>
                                <td>{{ $jobType->nama }}</td>
                                <td>
                                    <div class="flex items-center gap-x-3">
                                        <div class="min-w-[10px] min-h-[10px] rounded-full color-dot"></div>
                                        <p class="color-hex">{{ $jobType->bg_color }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-x-3">
                                        <div class="min-w-[10px] min-h-[10px] rounded-full color-dot"></div>
                                        <p class="color-hex">{{ $jobType->text_color }}</p>
                                    </div>
                                </td>
                                <td>{{ $jobType->slug }}</td>
                                <td>
                                <div class="flex gap-x-3 justify-center">
                                    <a href="{{ route('karakteristik-riasec.edit', $jobType->id) }}" class="button-secondary px-5 py-2">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('karakteristik-riasec.destroy', $jobType->id) }}">
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