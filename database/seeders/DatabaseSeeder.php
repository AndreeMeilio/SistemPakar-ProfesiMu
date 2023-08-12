<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departemen;
use App\Models\Kutipan;
use App\Models\Lowongan;
use App\Models\Pelamar;
use App\Models\TipePekerjaan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeder Pengguna
        User::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Darren Admin',
            'foto' => 'default_photo.png',
            'email' => 'darren@gmail.com',
            'password' => bcrypt('test123'),
            'password_confirmation' => 'test123'
        ]);
        User::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Deo Admin',
            'foto' => 'default_photo.png',
            'email' => 'deo@gmail.com',
            'password' => bcrypt('test123'),
            'password_confirmation' => 'test123'
        ]);
        User::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Rachma Admin',
            'foto' => 'default_photo.png',
            'email' => 'rachma@gmail.com',
            'password' => bcrypt('test123'),
            'password_confirmation' => 'test123'
        ]);

        // Seeder Departemen
        Departemen::create([
            'uuid' => Str::uuid(),
            'nama' => 'Advertising',
            'logo' => 'Logo_Advertising.jpg',
            'slug' => 'advertising',
        ]);
        Departemen::create([
            'uuid' => Str::uuid(),
            'nama' => 'Event',
            'logo' => 'Logo_Event.jpg',
            'slug' => 'event',
        ]);
        Departemen::create([
            'uuid' => Str::uuid(),
            'nama' => 'Human Resources',
            'logo' => 'Logo_Human_Resources.jpg',
            'slug' => 'human-resources',
        ]);
        Departemen::create([
            'uuid' => Str::uuid(),
            'nama' => 'Journalist',
            'logo' => 'Logo_Journalist.jpg',
            'slug' => 'journalist',
        ]);
        Departemen::create([
            'uuid' => Str::uuid(),
            'nama' => 'Marketing',
            'logo' => 'Logo_Marketing.jpg',
            'slug' => 'marketing',
        ]);
        Departemen::create([
            'uuid' => Str::uuid(),
            'nama' => 'News Production',
            'logo' => 'Logo_News_Production.jpg',
            'slug' => 'news-production',
        ]);
        Departemen::create([
            'uuid' => Str::uuid(),
            'nama' => 'Research & Development (Litbang)',
            'logo' => 'Logo_Research_and_Development_Litbang.jpg',
            'slug' => 'research-and-development-library',
        ]);
        Departemen::create([
            'uuid' => Str::uuid(),
            'nama' => 'Technology & Product Development',
            'logo' => 'Logo_Technology_and_Product_Development.jpg',
            'slug' => 'technology-and-product-development',
        ]);

        // Seeder Tipe Pekerjaan
        TipePekerjaan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Kontrak',
            'bg_color' => '#D8C5EF',
            'text_color' => '#733EB7',
            'slug' => 'kontrak',
        ]);
        TipePekerjaan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Magang',
            'bg_color' => '#FCE3BE',
            'text_color' => '#E28F17',
            'slug' => 'magang',
        ]);
        TipePekerjaan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Pekerja Lepas',
            'bg_color' => '#DBF4C8',
            'text_color' => '#4C9E10',
            'slug' => 'pekerja-lepas',
        ]);
        TipePekerjaan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Penuh Waktu',
            'bg_color' => '#ABF2FF',
            'text_color' => '#037F97',
            'slug' => 'penuh-waktu',
        ]);

        // Seeder Kutipan
        Kutipan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Anggrelika Putri',
            'foto' => 'Anggrelika_Putri.jpg',
            'kutipan' => 'Kompas tak hanya tempat bekerja, tapi juga ladang tumbuh dan mengembangkan diri. Senang bisa menjadi bagian dari proses terciptanya jurnalisme berkualitas untuk kemajuan bangsa.',
            'posisi' => 'HR Training Expertise',
        ]);
        Kutipan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Jordy Prayoga',
            'foto' => 'Jordy_Prayoga.jpg',
            'kutipan' => 'Saya menemukan keragaman budaya yang luar biasa di sini. Berkolaborasi dengan latar belakang yang berbeda membantu saya untuk berkembang dan memiliki wawasan lebih luas. Saya bangga bisa bergabung dengan Harian Kompas.',
            'posisi' => 'Motion Graphic Design Social Media',
        ]);
        Kutipan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Kirana',
            'foto' => 'Kirana.jpg',
            'kutipan' => 'Banyak yang harus saya pelajari saat pertama kerja di Kompas. Tapi para senior di Kompas sangat membantu saya, tidak ada senioritas sama sekali, dan semuanya punya ilmu yang mumpuni, tidak pelit bagi ilmu.',
            'posisi' => 'Account Executive',
        ]);

        // Seeder Lowongan
        Lowongan::create([
            'uuid' => Str::uuid(),
            'nama' => 'HRIS 1',
            'id_tipe_pekerjaan' => 2,
            'deskripsi' => 'Membangun CMS Karier Kompas',
            'persyaratan' => 'Dapat menggunakan Framework Laravel',
            'id_departemen' => 8,
            'lokasi' => 'Seluruh Indonesia',
            'tanggal_dibuka' => date('Y-m-d', strtotime('1 January 2023')),
            'tanggal_ditutup' => date('Y-m-d', strtotime('31 January 2023')),
            'slug' => 'hris-1',
            'status_aktif' => true,
        ]);
        Lowongan::create([
            'uuid' => Str::uuid(),
            'nama' => 'HR Generalist',
            'id_tipe_pekerjaan' => 3,
            'deskripsi' => 'Melakukan Screening CV',
            'persyaratan' => 'Familiar dengan LinkedIn',
            'id_departemen' => 3,
            'lokasi' => 'Jakarta Pusat',
            'tanggal_dibuka' => date('Y-m-d', strtotime('1 January 2023')),
            'tanggal_ditutup' => date('Y-m-d', strtotime('31 January 2023')),
            'slug' => 'human-resources-generalist',
            'status_aktif' => false,
        ]);
        Lowongan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Frontend Developer',
            'id_tipe_pekerjaan' => 4,
            'deskripsi' => 'Melakukan Screening CV',
            'persyaratan' => 'Familiar dengan LinkedIn',
            'id_departemen' => 8,
            'lokasi' => 'Jakarta Pusat',
            'tanggal_dibuka' => date('Y-m-d', strtotime('1 January 2023')),
            'tanggal_ditutup' => date('Y-m-d', strtotime('31 January 2023')),
            'slug' => 'frontend-developer',
            'status_aktif' => false,
        ]);
        Lowongan::create([
            'uuid' => Str::uuid(),
            'nama' => 'HRIS 2',
            'id_tipe_pekerjaan' => 3,
            'deskripsi' => 'Membangun PK Online Kompas',
            'persyaratan' => 'Dapat menggunakan Framework Laravel',
            'id_departemen' => 8,
            'lokasi' => 'Seluruh Indonesia',
            'tanggal_dibuka' => date('Y-m-d', strtotime('1 January 2023')),
            'tanggal_ditutup' => date('Y-m-d', strtotime('31 January 2023')),
            'slug' => 'hris-2',
            'status_aktif' => false,
        ]);
        Lowongan::create([
            'uuid' => Str::uuid(),
            'nama' => 'UI/UX Designer',
            'id_tipe_pekerjaan' => 3,
            'deskripsi' => 'Merancang tampilan CMS Karier Kompas',
            'persyaratan' => 'Familiar dengan Figma',
            'id_departemen' => 8,
            'lokasi' => 'Jakarta Pusat',
            'tanggal_dibuka' => date('Y-m-d', strtotime('1 January 2023')),
            'tanggal_ditutup' => date('Y-m-d', strtotime('31 January 2023')),
            'slug' => 'ui-ux-designer',
            'status_aktif' => true,
        ]);
        Lowongan::create([
            'uuid' => Str::uuid(),
            'nama' => 'Software Developer',
            'id_tipe_pekerjaan' => 2,
            'deskripsi' => 'Melakukan pembuatan LMS',
            'persyaratan' => 'Familiar dengan Node.js',
            'id_departemen' => 8,
            'lokasi' => 'Jakarta Pusat',
            'tanggal_dibuka' => date('Y-m-d', strtotime('1 January 2023')),
            'tanggal_ditutup' => date('Y-m-d', strtotime('31 January 2023')),
            'slug' => 'software-developer',
            'status_aktif' => true,
        ]);

        // Seeder Pelamar
        Pelamar::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Darren Denisson',
            'foto' => 'default_photo.png',
            'email' => 'darren.applicant@gmail.com',
            'no_telp' => '081234567890',
            'tanggal_lahir' => date('Y-m-d', strtotime('28 February 2002')),
            'domisili' => 'Tangerang Selatan',
            'institusi' => 'Universitas',
            'program_studi' => 'Informatika',
            'pendidikan_terakhir' => 'SMA',
            'semester_saat_ini' => '7',
            'pengalaman_kerja' => '-',
            'ekspektasi_pendapatan' => 1000000,
            'cv_resume' => 'darren.pdf',
            'dokumen_lainnya' => 'darren_more.pdf',
            'informasi_tambahan' => '-',
            'id_lowongan' => 1,
            'status_potensi' => 'Cadangan',
        ]);
        Pelamar::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Deo Lorensa',
            'foto' => 'default_photo.png',
            'email' => 'deo.applicant@gmail.com',
            'no_telp' => '081234567891',
            'tanggal_lahir' => date('Y-m-d', strtotime('28 February 2000')),
            'domisili' => 'Blitar',
            'institusi' => 'Universitas',
            'program_studi' => 'Sistem Informasi',
            'pendidikan_terakhir' => 'SMA',
            'semester_saat_ini' => '7',
            'pengalaman_kerja' => '-',
            'ekspektasi_pendapatan' => 2000000,
            'cv_resume' => 'deo.pdf',
            'dokumen_lainnya' => 'deo_more.pdf',
            'informasi_tambahan' => '-',
            'id_lowongan' => 1,
            'status_potensi' => "Cocok",
        ]);
        Pelamar::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Rachma Adzima',
            'foto' => 'default_photo.png',
            'email' => 'rachma.applicant@gmail.com',
            'no_telp' => '081234567892',
            'tanggal_lahir' => date('Y-m-d', strtotime('28 February 2001')),
            'domisili' => 'Bekasi',
            'institusi' => 'Universitas',
            'program_studi' => 'Informatika',
            'pendidikan_terakhir' => 'SMA',
            'semester_saat_ini' => '7',
            'pengalaman_kerja' => '-',
            'ekspektasi_pendapatan' => 3000000,
            'cv_resume' => 'rachma.pdf',
            'dokumen_lainnya' => 'rachma_more.pdf',
            'informasi_tambahan' => '-',
            'id_lowongan' => 3,
            'status_potensi' => 'Tidak cocok',
        ]);
        Pelamar::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Adinda Yusdita',
            'foto' => 'default_photo.png',
            'email' => 'adinda.applicant@gmail.com',
            'no_telp' => '081234567892',
            'tanggal_lahir' => date('Y-m-d', strtotime('28 February 2001')),
            'domisili' => 'Jakarta Timur',
            'institusi' => 'Universitas',
            'program_studi' => 'Informatika',
            'pendidikan_terakhir' => 'SMA',
            'semester_saat_ini' => '7',
            'pengalaman_kerja' => '-',
            'ekspektasi_pendapatan' => 3000000,
            'cv_resume' => 'adinda.pdf',
            'dokumen_lainnya' => 'adinda_more.pdf',
            'informasi_tambahan' => '-',
            'id_lowongan' => 2,
            'status_potensi' => null,
        ]);
        Pelamar::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Akmal Beliuk',
            'foto' => 'default_photo.png',
            'email' => 'akmal.applicant@gmail.com',
            'no_telp' => '081234567892',
            'tanggal_lahir' => date('Y-m-d', strtotime('28 February 2001')),
            'domisili' => 'Tangerang',
            'institusi' => 'Universitas',
            'program_studi' => 'Informatika',
            'pendidikan_terakhir' => 'SMA',
            'semester_saat_ini' => '7',
            'pengalaman_kerja' => '-',
            'ekspektasi_pendapatan' => 3000000,
            'cv_resume' => 'akmal.pdf',
            'dokumen_lainnya' => 'akmal_more.pdf',
            'informasi_tambahan' => '-',
            'id_lowongan' => 3,
            'status_potensi' => null,
        ]);
        Pelamar::create([
            'uuid' => Str::uuid(),
            'nama_lengkap' => 'Chotiwut',
            'foto' => 'default_photo.png',
            'email' => 'chotiwut.applicant@gmail.com',
            'no_telp' => '081234567892',
            'tanggal_lahir' => date('Y-m-d', strtotime('28 February 2001')),
            'domisili' => 'Tangerang',
            'institusi' => 'Universitas',
            'program_studi' => 'Informatika',
            'pendidikan_terakhir' => 'SMA',
            'semester_saat_ini' => '7',
            'pengalaman_kerja' => '-',
            'ekspektasi_pendapatan' => 3000000,
            'cv_resume' => 'chotiwut.pdf',
            'dokumen_lainnya' => 'chotiwut_more.pdf',
            'informasi_tambahan' => '-',
            'id_lowongan' => 3,
            'status_potensi' => null,
        ]);
    }
}
