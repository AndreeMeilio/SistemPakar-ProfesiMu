<x-app-layout title="Kelola Aturan Relasi">
    <div class="flex flex-col gap-y-10">
        <h1 class="font-semibold text-[32px] text-navy-primary">Kelola Aturan Relasi</h1>
        <div class="flex flex-col gap-y-5">
            <div class="flex justify-between gap-5 max-[1200px]:flex-col min-[1201px]:items-center">
                <p class="font-medium text-navy-primary text-xl">Daftar Aturan Relasi</p>
                <div class="flex gap-x-5">
                    <a href="{{ route('aturan-relasi.create') }}" class="w-full flex justify-center button-primary px-5 py-3">
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
                                <th>Kode</th>
                                <th>Nama Profesi</th>
                                <th>Tipe Kepribadian</th>
                                <th>Karakteristik</th>
                                <th class="!text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rules as $rule)
                            <tr>
                                <td>{{ $rule->code }}</td>
                                <td>{{ $rule->profession->profession_name }}</td>
                                <td>{{ $rule->personality->personality_name }}</td>
                                <td>{{ $rule->characteristic->characteristic }}</td>
                                <td>
                                    <div class="flex gap-x-3 justify-center">
                                        <a href="{{ route('aturan-relasi.show', $rule->id) }}" class="button-primary px-5 py-2">
                                            Detail
                                        </a>
                                        <a href="{{ route('aturan-relasi.edit', $rule->id) }}" class="button-secondary px-5 py-2">
                                            Edit
                                        </a>
                                        <form method="POST" action="{{ route('aturan-relasi.destroy', $rule->id) }}">
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