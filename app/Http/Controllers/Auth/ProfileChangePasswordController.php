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
        $pengguna = User::find($request->id);
        return view('pages.profile.profile_password', compact('pengguna'));
    }

    public function update(Request $request, NotyfFactory $flasher)
    {
        $rules = [
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        // Custom errors validate
        $customMessages = [
            'required' => ':attribute harus diisi',
            'min' => 'Kata Sandi minimal 8 huruf',
            'confirmed' => 'Ulang Kata Sandi tidak sesuai'
        ];

        $this->validate($request, $rules, $customMessages);

        $pengguna = User::find($request->id);

        if (Hash::check($request->current_password, $pengguna->password)) {
            $pengguna-> update([
                'password' => Hash::make($request->password),
                'password_confirmation' => $request->password_confirmation,
                'id_admin_updated' => Auth::user()->id,
            ]);
        }

        else {
            throw ValidationException::withMessages([
                'current_password' => 'Kata Sandi Lama yang Anda masukkan salah'
            ]);
        }

        $getUserID = Auth::user()->id;
        if((int)$request->id === $getUserID)
        {
            // Hapus sesi login /auto logout
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();


            return redirect('/masuk');
        }
        else {
            $flasher->addSuccess('Kata Sandi berhasil diperbarui');
            return to_route('pengguna.index');
        }
    }
}
