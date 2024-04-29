<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class ProfileChangePasswordController extends Controller
{
    public function edit(Request $request) {
        $user = User::find($request->id);

        return view('pages.profile.profile_password', compact('user'));
    }

    public function update(Request $request, NotyfFactory $flasher)
    {
        $rules = [
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
            'min' => 'Kata Sandi minimal 8 huruf',
            'confirmed' => 'Ulang Kata Sandi tidak sesuai'
        ];

        $this->validate($request, $rules, $customMessages);

        $user = User::find($request->id);

        if (Hash::check($request->current_password, $user->password)) {
            $user-> update([
                'password' => Hash::make($request->password),
                'password_confirmation' => $request->password_confirmation,
            ]);
        }
        else {
            throw ValidationException::withMessages([
                'current_password' => 'Kata Sandi Lama yang Anda masukkan salah'
            ]);
        }

        $getUserID = Auth::user()->id;

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login-admin');
    }
}
