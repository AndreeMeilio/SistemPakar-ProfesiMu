<x-app-layout title="Kelola Pengguna">
    <div class="flex flex-col gap-y-10">
        <h1 class="title-large">Kelola Pengguna</h1>
        <div class="flex flex-col gap-y-5">
            <div class="flex justify-between gap-5 max-sm:flex-col sm:items-center">
                <p class="title-medium">Daftar Pengguna</p>
                <a href="{{ route('pengguna.create') }}" class="button-primary justify-center px-6 py-3">
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
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th class="!text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                            <tr>
                                <td class="bg-white">{{ $index+1 }}</td>
                                <td>
                                    <img src="{{ isset($user->photo) ?
                                        asset('storage/images/pengguna/'.$user->photo) : asset('assets/images/default_photo.png') }}"
                                        alt="Foto Pengutip" class="w-12 h-12 object-cover rounded-full">
                                </td>
                                <td>{{ $user->full_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                <div class="flex gap-x-3 justify-center">
                                    <a href="{{ route('pengguna.edit', $user->id) }}" class="button-secondary px-5 py-2">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ route('pengguna.destroy', $user->id) }}">
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
