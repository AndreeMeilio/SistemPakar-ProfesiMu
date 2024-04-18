<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Personality;
use App\Models\Profession;

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
            'photo' => null,
            'email' => 'rachma@gmail.com',
            'password' => bcrypt('test123'),
            'password_confirmation' => 'test123'
        ]);

        Personality::create([
            'code' => 'REA',
            'personality_name' => 'Realistic',
            'description' => 'Karakteristik tipe Realistic adalah seseorang yang dijuluki sebagai Doers (Pelaku). Suka bekerja dengan objek atau benda-benda. Terpaku dan memiliki fokus yang baik dalam mengerjakan sesuatu yang disukai.',
        ]);

        Profession::create([
            'code' => 'PD001',
            'profession_name' => 'Front-End Developer',
            'category' => 'Engineering',
            'description' => 'Ini deskripsi',
            'responsibility' => 'Ini tanggungjawab',
            'skill' => 'Ini keahlian',
            'learning_resources' => json_encode(['title' => 'Learning Resource', 'link' => 'https://roadmap.sh'])
        ]);
    }
}
