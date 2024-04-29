<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Personality;
use App\Models\Profession;
use App\Models\Characteristic;

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
            'description' => 'Karakteristik tipe Realistic',
        ]);
        Personality::create([
            'code' => 'I',
            'personality_name' => 'Investigative',
            'description' => 'Karakteristik tipe Investigative',
        ]);
        Personality::create([
            'code' => 'A',
            'personality_name' => 'Artistic',
            'description' => 'Karakteristik tipe Artistic',
        ]);
        Personality::create([
            'code' => 'S',
            'personality_name' => 'Social',
            'description' => 'Karakteristik tipe Social',
        ]);
        Personality::create([
            'code' => 'E',
            'personality_name' => 'Enterprising',
            'description' => 'Karakteristik tipe Enterprising',
        ]);
        Personality::create([
            'code' => 'C',
            'personality_name' => 'Conventional',
            'description' => 'Karakteristik tipe Conventional',
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

        Characteristic::create([
            'code' => 'KK1',
            'personality_id' => 1,
            'characteristic' => 'Memiliki kemampuan mendesain',
        ]);
    }
}
