<?php

use App\Http\Controllers\Auth\ProfileChangePasswordController;
use App\Http\Controllers\Auth\UserChangePasswordController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\PersonalityController;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPasswordController;
use App\Http\Controllers\PotentialController;
use App\Http\Controllers\MainPage\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('daftar-profesi', [HomeController::class, 'profession'])->name('profession');

Route::get('daftar-riasec', [HomeController::class, 'personality'])->name('personality');

Route::get('data-diri', [HomeController::class, 'personal_data'])->name('personal_data');

Route::get('pengenalan-tes', [HomeController::class, 'introduction_test'])->name('introduction_test');

Route::get('tes-minat-1', [HomeController::class, 'interest_test'])->name('interest_test');

Route::get('tes-kepribadian-2', [HomeController::class, 'personality_test'])->name('personality_test');

Route::get('hasil-tes', [HomeController::class, 'result_test'])->name('result_test');

Route::middleware(['auth'])->group(function () {

    // dashboard route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // detail profile route
    Route::get('detail-profil', [UserProfileController::class, 'index'])->name('detail_profile');
    Route::get('detail-profil/ubah-kata-sandi/{id}', [ProfileChangePasswordController::class, 'edit'])->name('profile_password.edit');
    Route::put('detail-profil/ubah-kata-sandi', [ProfileChangePasswordController::class, 'update'])->name('profile_password.update');

    // Route::get('potensial', [PotentialController::class, 'index'])->name('potensial.index');
    // Route::get('potensial/{tipe_pekerjaan:slug}/{lowongan:slug}', [PotentialController::class, 'detail'])->name('potensial.detail');
    // Route::post('potensial/{tipe_pekerjaan:slug}/{lowongan:slug}', [PotentialController::class, 'update'])->name('potensial.update');

    Route::resource('profesi-digital', ProfessionController::class)->parameters(['profesi-digital' => 'id']);
    Route::resource('karakteristik-riasec', PersonalityController::class)->parameters(['karakteristik-riasec' => 'id'])->except(['show']);
    Route::resource('kutipan', QuotesController::class)->parameters(['kutipan' => 'id'])->except(['show']);
    Route::resource('departemen', DepartmentController::class)->parameters(['departemen' => 'id'])->except(['show']);

    Route::resource('pengguna', UserController::class)->parameters(['pengguna' => 'id'])->except(['show']);
    Route::get('pengguna/ubah-kata-sandi/{id}', [UserChangePasswordController::class, 'edit'])->name('user_password.edit');

});
require __DIR__.'/auth.php';
