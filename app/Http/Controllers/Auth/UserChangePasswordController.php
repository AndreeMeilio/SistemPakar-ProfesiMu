<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules;

class UserChangePasswordController extends Controller
{
    public function edit(Request $request) {
        $pengguna = User::find($request->id);
        return view('pages.user.edit_password', compact('pengguna'));
    }
}
