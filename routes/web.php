<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ProfileChangePasswordController;
use App\Http\Controllers\Auth\UserProfileController;

use App\Http\Controllers\MainPage\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\PersonalityController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('daftar-profesi', [HomeController::class, 'profession'])->name('profession');

Route::get('daftar-riasec', [HomeController::class, 'personality'])->name('personality');

Route::get('data-diri', [HomeController::class, 'personalData'])->name('personal_data');
Route::post('data-diri', [HomeController::class, 'submitPersonalData'])->name('submit_data');

Route::get('pengenalan-tes', [HomeController::class, 'introductionTest'])->name('introduction_test');

Route::get('tes-minat-1', [HomeController::class, 'interestTest'])->name('interest_test');

Route::get('tes-kepribadian-2', [HomeController::class, 'personalityTest'])->name('personality_test');

Route::get('hasil-tes', [HomeController::class, 'resultTest'])->name('result_test');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('profil', [UserProfileController::class, 'index'])->name('profile');
    Route::get('profil/ubah-kata-sandi/{id}', [ProfileChangePasswordController::class, 'edit'])->name('password.edit');
    Route::put('profil/ubah-kata-sandi', [ProfileChangePasswordController::class, 'update'])->name('password.update');

    Route::resource('profesi-digital', ProfessionController::class)->parameters(['profesi-digital' => 'id']);

    Route::resource('karakteristik-riasec', PersonalityController::class)->parameters(['karakteristik-riasec' => 'id'])->except(['show']);

    Route::resource('aturan-relasi', RuleController::class)->parameters(['aturan-relasi' => 'id']);

    Route::resource('riwayat-partisipan', ParticipantController::class)->parameters(['riwayat-partisipan' => 'id'])->except(['store', 'create', 'edit', 'update']);

    Route::resource('akun-admin', UserController::class)->parameters(['akun-admin' => 'id'])->except(['show']);
});

require __DIR__.'/auth.php';
