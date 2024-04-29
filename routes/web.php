<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ProfileChangePasswordController;
use App\Http\Controllers\Auth\UserProfileController;

use App\Http\Controllers\MainPage\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\PersonalityController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('daftar-profesi', [HomeController::class, 'profession'])->name('profession');

Route::get('daftar-riasec', [HomeController::class, 'personality'])->name('personality');

Route::get('data-diri', [HomeController::class, 'personal_data'])->name('personal_data');

Route::get('pengenalan-tes', [HomeController::class, 'introduction_test'])->name('introduction_test');

Route::get('tes-minat-1', [HomeController::class, 'interest_test'])->name('interest_test');

Route::get('tes-kepribadian-2', [HomeController::class, 'personality_test'])->name('personality_test');

Route::get('hasil-tes', [HomeController::class, 'result_test'])->name('result_test');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('detail-profil', [UserProfileController::class, 'index'])->name('detail_profile');
    Route::get('detail-profil/ubah-kata-sandi/{id}', [ProfileChangePasswordController::class, 'edit'])->name('profile_password.edit');
    Route::put('detail-profil/ubah-kata-sandi', [ProfileChangePasswordController::class, 'update'])->name('profile_password.update');

    Route::resource('profesi-digital', ProfessionController::class)->parameters(['profesi-digital' => 'id']);

    Route::resource('karakteristik-riasec', PersonalityController::class)->parameters(['karakteristik-riasec' => 'id'])->except(['show']);

    Route::resource('akun-admin', UserController::class)->parameters(['akun-admin' => 'id'])->except(['show']);
});

require __DIR__.'/auth.php';
