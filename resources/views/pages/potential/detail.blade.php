<x-app-layout title="Daftar Potensial">
    <div class="flex flex-col gap-y-10">
        <div>
            <a href="{{ url()->previous() }}" class="button-previous">
                <i icon-name="arrow-left" class="mr-2 w-5 h-5"></i>
                <p>Halaman sebelumnya</p>
            </a>
            <div class="flex gap-4 mb-3 max-sm:pt-3 max-sm:flex-col-reverse sm:items-center">
                <h1 class="title-large">{{ $jobVacancy->nama }}</h1>
                <div id="job_type_bg" class="w-fit bg-[{{ $jobType->bg_color }}] rounded-lg px-3 py-1.5">
                    <p id="job_type_text" class="text-[{{ $jobType->text_color }}]">{{ $jobType->nama }}</p>
                </div>
            </div>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-x-2.5">
                    <li>
                        <a href="{{ route('potensial.index') }}" class="breadcrumb-link">
                            Pelamar Potensial
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="breadcrumb-current">
                            <i icon-name="chevron-right" class="mr-2 w-5 h-5"></i>
                            <span>Daftar Potensial</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="flex flex-col gap-y-5">
            <div>
                <p class="title-medium">Daftar Lowongan Kerja</p>
                <span class="text-grey-secondary mb-5">Total: {{ $jobVacancy->pelamar_count }} Pelamar</span>
            </div>

            <div class="table-wrapper">
                <div class="overflow-x-auto relative rounded-lg py-1">
                    <table id="table_datatables" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>No. Telepon</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th class="!text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($potentialApplicants as $applicant)
                            <tr>
                                <td class="bg-white">{{ $loop->iteration }}</td>
                                <td>{{ $applicant->nama_lengkap }}</td>
                                <td>{{ $applicant->no_telp }}</td>
                                <td>{{ $applicant->email }}</td>
                                <td>
                                    @if ($applicant->status_potensi == "Cocok")
                                        <div class="flex items-center gap-x-3">
                                            <div class="min-w-[10px] min-h-[10px] rounded-full bg-green-primary"></div>
                                            <p>Cocok</p>
                                        </div>
                                    @else
                                        <div class="flex items-center gap-x-3">
                                            <div class="min-w-[10px] min-h-[10px] rounded-full bg-orange"></div>
                                            <p>Cadangan</p>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="flex gap-x-3 justify-center">
                                        <a href="{{ asset('storage/cv_resume/'.$applicant->cv_resume) }}" target="_blank" class="min-w-[120px] button-primary text-center px-5 py-3">
                                            Lihat CV
                                        </a>
                                        {{-- Modal toggle --}}
                                        <button id="modal-{{ $loop->iteration }}-open" class="modal-open min-w-[140px] button-secondary px-5 py-3">
                                            Ubah Status
                                        </button>
                                    </div>
                                    <!--Modal-->
                                    <div id="modal-{{ $loop->iteration }}" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                                        <div id="modal-{{ $loop->iteration }}-overlay" class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                                        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
                                            <div class="modal-header flex justify-between px-5 py-3.5">
                                                <p class="font-medium">Ubah Status Pelamar Potensial</p>
                                                <span id="modal-{{ $loop->iteration }}-close-x" class="modal-close inline-block cursor-pointer"><i icon-name="x"></i></span>
                                            </div>
                                            <form class="modal-content flex flex-col p-5" action="{{ route('potensial.update', ['tipe_pekerjaan' => $jobType->slug, 'lowongan' => $jobVacancy->slug]) }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $applicant->id }}" name="id">
                                                <div>
                                                    <label for="status_potensi" class="block mb-2">Status Potensi <span class="text-red">*</span></label>
                                                    <select name="status_potensi" id="status_potensi" class="input-field">
                                                        <option value="">Pilih status potensi</option>
                                                        <option value="Cocok" {{ $applicant->status_potensi == 'Cocok' ? 'selected' : '' }}>Cocok</option>
                                                        <option value="Cadangan" {{ $applicant->status_potensi == 'Cadangan' ? 'selected' : '' }}>Cadangan</option>
                                                        <option value="Tidak cocok" {{ $applicant->status_potensi == 'Tidak cocok' ? 'selected' : '' }}>Tidak cocok</option>
                                                    </select>
                                                    @error('status_potensi')
                                                        <div class="error-message mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="flex justify-end gap-3 mt-6 max-sm:flex-col-reverse">
                                                    <button id="modal-{{ $loop->iteration }}-close" class="modal-close text-white bg-red py-3 px-8 rounded-full">
                                                        Batal
                                                    </button>
                                                    <button type="submit" class="button-primary py-3 px-8">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
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