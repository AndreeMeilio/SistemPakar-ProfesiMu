<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    public function index() {
        $departments = Departemen::orderBy('nama')->get();
        return view('pages.department.index', compact('departments'));
    }

    public function create() {
        return view('pages.department.add');
    }

    public function store(Request $request, NotyfFactory $flasher) {
        $rules = [
            'nama' => 'required|string',
            'logo' => 'required|max:2048',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $fileImage = null;
        if ($request->hasFile('logo')) {
            $imageName = str_replace(' ', '_', $request->nama);
            $extension = $request->file('logo')->guessExtension();
            $fileImage = $imageName.'.'.$extension;
            $image = $request->file('logo')->storeAs('public/images/departemen', $fileImage);
        }

        $this->validate($request, $rules, $customMessages);

        // Request value upload to DB
        $requestValue = $request->all();
        $requestValue['logo'] = $fileImage;
        $requestValue['slug'] = Str::slug($requestValue['nama']);
        $requestValue['uuid'] = Str::uuid();

        Departemen::create($requestValue);

        $flasher->addSuccess('Data departemen berhasil ditambahkan');

        return to_route('departemen.index');
    }

    public function edit(Request $request) {
        $department = Departemen::find($request->id);
        return view('pages.department.edit', compact('department'));
    }

    public function update(Request $request, NotyfFactory $flasher) {
        $rules = [
            'nama' => 'required|string',
            'logo' => 'max:2048',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $this->validate($request, $rules, $customMessages);

        $department = Departemen::find($request->id);

        // Upload new file
        $fileImage = null;

        if ($request->file('logo') == null) {
            $fileImage = $department->logo;
        }
        else {
            if ($request->hasFile('logo')) {
                $imageName = str_replace(' ', '_', $request->nama);
                $extension = $request->file('logo')->guessExtension();
                $fileImage = $imageName.'.'.$extension;
                $image = $request->file('logo')->storeAs('public/images/departemen', $fileImage);
            }
        }

        // Request value upload to DB
        $requestValue = $request->all();
        $requestValue['logo'] = $fileImage;
        $requestValue['slug'] = Str::slug($requestValue['nama']);
        $requestValue['id_admin_updated'] = Auth::user()->id;

        $department->update($requestValue);
        $flasher->addSuccess('Data departemen berhasil diperbarui');

        return to_route('departemen.index');
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $quotes = Departemen::find($request->id);

        $quotes->delete();
        $flasher->addSuccess('Data departemen berhasil dihapus');

        return to_route('departemen.index');
    }
}
