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
            'photo' => 'required|max:2048',
            'full_name' => 'required|string',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        // Custom errors validate
        $customMessages = [
            'required' => ':attribute harus diisi',
            'min' => 'Kata Sandi minimal 8 huruf',
            'confirmed' => 'Ulang Kata Sandi tidak sesuai'
        ];

        // Input image
        $fileImage = null;
        if ($request->hasFile('photo')) {
            $imageName = str_replace(' ', '_', $request->full_name);
            $extension = $request->file('photo')->guessExtension();
            $fileImage = $imageName.'.'.$extension;
            $image = $request->file('photo')->storeAs('public/images/pengguna', $fileImage);
        }

        $this->validate($request, $rules, $customMessages);

        $request['password'] = Hash::make($request->password);
        $UserEmail = User::get('email')->toArray();
        $getAllEmail = array_map(array($this, 'getUserEmail'), $UserEmail);
        
        // Request value upload to DB
        $attr = $request->all();
        $attr['uuid'] = Str::uuid();
        $attr['photo'] = $fileImage;

        if (in_array($request->email, $getAllEmail)) {
            $flasher->addError('Data pengguna dengan email '.$request['email'].' sudah tersedia');
            $redirect = redirect(route('pengguna.create'));
        }
        else {
            User::create($attr);
            $flasher->addSuccess('Data pengguna berhasil ditambahkan');
            $redirect = redirect(route('pengguna.index'));
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

        $this->validate($request, $rules, $customMessages);

        $pengguna = User::find($request->id);

        // Upload new file
        $fileImage = null;

        if ($request->file('photo') == null) {
            $fileImage = $pengguna->photo;
        }
        else {
            if ($request->hasFile('photo')) {
                $imageName = str_replace(' ', '_', $request->full_name);
                $extension = $request->file('photo')->guessExtension();
                $fileImage = $imageName.'.'.$extension;
                $image = $request->file('photo')->storeAs('public/images/pengguna', $fileImage);
            }
        }

        // Request value upload to DB
        $attr = $request->all();
        $attr['photo'] = $fileImage;
        $attr['id_admin_updated'] = Auth::user()->id;

        $pengguna->update($attr);

        $flasher->addSuccess('Data pengguna berhasil diperbarui');

        return to_route('pengguna.index');
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $pengguna = User::find($request->id);

        $pengguna->delete();

        $flasher->addSuccess('Data pengguna berhasil dihapus');

        return redirect()->route('pengguna.index');
    }

    private function getUserEmail($user) {
        return $user['email'];
    }
}
