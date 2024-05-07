<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Personality;
use App\Models\Profession;
use App\Models\Characteristic;
use App\Models\Rule;

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
            'full_name' => 'Rachma Adzima',
            'email' => 'rachma@gmail.com',
            'password' => bcrypt('test123'),
            'password_confirmation' => 'test123'
        ]);

        Personality::create([
            'code' => 'R',
            'personality_name' => 'Realistic',
            'description' => 'Seseorang yang memiliki minat di bidang Realistic senang dengan hal-hal yang bersifat teknis dan praktis. Ia juga senang bekerja dengan berbagai peralatan sederhana maupun rumit.',
        ]);
        Personality::create([
            'code' => 'I',
            'personality_name' => 'Investigative',
            'description' => 'Seseorang yang memiliki minat di bidang Investigative senang mengamati, menganalisis, dan menginvestigasi untuk menyelesaikan masalah.',
        ]);
        Personality::create([
            'code' => 'A',
            'personality_name' => 'Artistic',
            'description' => 'Seseorang yang memiliki minat di bidang Artistic senang bekerja menggunakan imajinasi dan kreativitas. Ia juga senang bekerja dalam situasi yang tidak terstruktur.',
        ]);
        Personality::create([
            'code' => 'S',
            'personality_name' => 'Social',
            'description' => 'Seseorang yang memiliki minat di bidang Sosial senang melakukan aktivitas yang memberi kesempatan untuk berbagi informasi dan inspirasi kepada orang lain.',
        ]);
        Personality::create([
            'code' => 'E',
            'personality_name' => 'Enterprising',
            'description' => 'Seseorang yang memiliki minat di bidang Enterprising senang melakukan aktivitas yang melibatkan orang lain dengan mempengaruhi dan memimpin orang lain untuk mencapai tujuan finansial atau organisasi.',
        ]);
        Personality::create([
            'code' => 'C',
            'personality_name' => 'Conventional',
            'description' => 'Seseorang yang memiliki minat di bidang Clerical senang mengerjakan sesuatu yang membutuhkan perhatian pada detail serta tugas-tugas yang melibatkan proses pencatatan dan penghitungan.',
        ]);

        Profession::create([
            'code' => 'PD001',
            'profession_name' => 'Front-End Developer',
            'category' => 'Engineering',
            'description' => 'Ini deskripsi',
            'responsibility' => 'Ini tanggungjawab',
            'skill' => 'Ini keahlian',
            'learning_resources' => json_encode(['title' => 'Learning Resource', 'link' => 'https://roadmap.sh']),
            'caption' => 'Problem-Solving, Detail Oriented, Critical Thinking'
        ]);

        Characteristic::create([
            'code' => 'KK1',
            'personality_id' => 1,
            'characteristic' => 'Memiliki kemampuan mendesain',
        ]);

        Rule::create([
            'code' => 'R1',
            'personality_id' => 1,
            'characteristic_id' => 1,
            'profession_id' => 1,
            'personality_code' => 1,
            'characteristic_code' => 1,
            'profession_code' => 1,
        ]);
    }
}
