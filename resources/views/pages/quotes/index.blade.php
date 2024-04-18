<x-app-layout title="Kutipan Kompas">
    <div class="flex flex-col gap-y-10">
        <h1 class="title-large">Kutipan Kompas</h1>
        <div class="flex flex-col gap-y-5">
            <div class="flex justify-between gap-5 max-sm:flex-col sm:items-center">
                <p class="title-medium">Daftar Kutipan</p>
                <a href="{{ route('kutipan.create') }}" class="button-primary justify-center px-6 py-3">
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
                            <th>Foto</th>
                            <th>Nama Pengutip</th>
                            <th>Kutipan</th>
                            <th>Posisi</th>
                            <th class="!text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quotesList as $index => $quotes)
                            <tr>
                                <td class="bg-white">{{ $index+1 }}</td>
                                <td>
                                    <img src="{{ isset($quotes->photo) ? 
                                        asset('storage/images/kutipan/'.$quotes->photo) : asset('assets/images/default_photo.png') }}" 
                                        alt="Foto Pengutip" class="w-12 h-12 object-cover rounded-full">
                                </td>
                                <td>{{ $quotes->nama }}</td>
                                <td class="text-overflow">{{ $quotes->kutipan }}</td>
                                <td>{{ $quotes->posisi }}</td>
                                <td>
                                <div class="flex gap-x-3 justify-center">
                                    <a href="{{ route('kutipan.edit', $quotes->id) }}" class="button-secondary px-5 py-2">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('kutipan.destroy', $quotes->id) }}">
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