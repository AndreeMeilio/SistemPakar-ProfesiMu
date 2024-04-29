<x-app-layout title="Karakteristik RIASEC">
    <div class="flex flex-col gap-y-10">
        <h1 class="title-large">Karakteristik RIASEC</h1>
        <div class="flex flex-col gap-y-5">
            <div class="flex flex-col gap-y-5 mb-5">
                <p class="font-medium text-navy text-xl">Daftar Tipe Kepribadian RIASEC</p>
                <div class="overflow-x-auto relative rounded-lg max-w-sm">
                    <table class="w-full">
                        <caption class="p-4 font-medium text-left bg-white">
                            Tabel Tipe Kepribadian RIASEC
                        </caption>
                        <thead class="bg-blue-accent font-semibold text-navy">
                            <tr>
                                <td class="py-3 px-4">
                                    Tipe
                                </td>
                                <td class="py-3 px-4 text-center">
                                    Kode
                                </td>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($personalities as $personality)
                                <tr class="border-b border-grey-stroke">
                                    <td class="p-4 italic">
                                        {{ $personality->personality_name }}
                                    </td>
                                    <td class="p-4 text-center">
                                        {{ $personality->code }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

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
                            <th>Kode</th>
                            <th>Tipe Kepribadian</th>
                            <th>Karakteristik</th>
                            <th class="!text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($characteristics as $character)
                            <tr>
                                <td>{{ $character->code }}</td>
                                <td>{{ $character->personality->personality_name }} ({{ $character->personality->code }})</td>
                                <td>{{ $character->characteristic }}</td>
                                <td>
                                <div class="flex gap-x-3 justify-center">
                                    <a href="{{ route('karakteristik-riasec.edit', $character->id) }}" class="button-secondary px-5 py-2">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('karakteristik-riasec.destroy', $character->id) }}">
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