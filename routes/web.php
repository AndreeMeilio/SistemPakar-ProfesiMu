<?php

use App\Http\Controllers\Auth\ProfileChangePasswordController;
use App\Http\Controllers\Auth\UserChangePasswordController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPasswordController;
use App\Http\Controllers\JobTypeController;
use App\Http\Controllers\PotentialController;
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
Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    // detail profile route
    Route::get('detail-profil', [UserProfileController::class, 'index'])->name('detail_profile');
    Route::get('detail-profil/ubah-kata-sandi/{id}', [ProfileChangePasswordController::class, 'edit'])->name('profile_password.edit');
    Route::put('detail-profil/ubah-kata-sandi', [ProfileChangePasswordController::class, 'update'])->name('profile_password.update');

    Route::get('potensial', [PotentialController::class, 'index'])->name('potensial.index');
    Route::get('potensial/{tipe_pekerjaan:slug}/{lowongan:slug}', [PotentialController::class, 'detail'])->name('potensial.detail');
    Route::post('potensial/{tipe_pekerjaan:slug}/{lowongan:slug}', [PotentialController::class, 'update'])->name('potensial.update');

    Route::resource('lowongan-kerja', JobVacancyController::class)->parameters(['lowongan-kerja' => 'id']);
    Route::resource('tipe-pekerjaan', JobTypeController::class)->parameters(['tipe-pekerjaan' => 'id'])->except(['show']);
    Route::resource('kutipan', QuotesController::class)->parameters(['kutipan' => 'id'])->except(['show']);
    Route::resource('departemen', DepartmentController::class)->parameters(['departemen' => 'id'])->except(['show']);

    Route::resource('pengguna', UserController::class)->parameters(['pengguna' => 'id'])->except(['show']);
    Route::get('pengguna/ubah-kata-sandi/{id}', [UserChangePasswordController::class, 'edit'])->name('user_password.edit');

});
require __DIR__.'/auth.php';
