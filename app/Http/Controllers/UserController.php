<?php

namespace App\Http\Controllers;

use App\Models\User;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('full_name')->get();

        return view('pages.user.index', compact('users'));
    }

    public function create(Request $request) {
        return view('pages.user.add');
    }

    public function store(Request $request, NotyfFactory $flasher)
    {
        $rules = [
            'email' => 'required|email',
            'full_name' => 'required|string',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
            'min' => 'Kata Sandi minimal 8 huruf',
            'confirmed' => 'Ulang Kata Sandi tidak sesuai'
        ];

        $customAttributes = [
            'email' => 'Email',
            'full_name' => 'Nama Lengkap',
            'password' => 'Kata Sandi',
        ];
        
        $this->validate($request, $rules, $customMessages, $customAttributes);

        $request['password'] = Hash::make($request->password);
        $userEmail = User::get('email')->toArray();
        $getAllEmail = array_map(array($this, 'getUserEmail'), $userEmail);
        $requestValue = $request->all();

        if (in_array($request->email, $getAllEmail)) {
            $flasher->addError('Data admin dengan email '.$request['email'].' sudah tersedia');
            $redirect = redirect(route('akun-admin.create'));
        }
        else {
            User::create($requestValue);
            $flasher->addSuccess('Data admin berhasil ditambahkan');
            $redirect = redirect(route('akun-admin.index'));
        }

        return $redirect;
    }

    public function edit(Request $request) {
        $user = User::find($request->id);
        return view('pages.user.edit', compact('user'));
    }

    public function update(Request $request, NotyfFactory $flasher)
    {
        $rules = [
            'full_name' => 'required|string',
            'email' => 'required|email',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $customAttributes = [
            'email' => 'Email',
            'full_name' => 'Nama Lengkap',
        ];
        
        $this->validate($request, $rules, $customMessages, $customAttributes);

        $user = User::find($request->id);
        $requestValue = $request->all();
        $user->update($requestValue);
        $flasher->addSuccess('Data admin berhasil diperbarui');

        return to_route('akun-admin.index');
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $user = User::find($request->id);
        $user->delete();
        $flasher->addSuccess('Data admin berhasil dihapus');

        return redirect()->route('akun-admin.index');
    }

    private function getUserEmail($user) {
        return $user['email'];
    }
}
