<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TipePekerjaan;
use Illuminate\Support\Facades\Auth;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobTypeController extends Controller
{
    public function index() {
        $jobTypesList = TipePekerjaan::orderBy('nama')->get();

        return view('pages.job_type.index', compact('jobTypesList'));
    }

    public function create() {
        return view('pages.job_type.add');
    }

    public function store(Request $request, NotyfFactory $flasher) {
        $rules = [
            'nama' => 'required|string',
            'bg_color' => 'required',
            'text_color' => 'required',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $this->validate($request, $rules, $customMessages);

        // Request value upload to DB
        $requestValue = $request->all();
        $requestValue['bg_color'] = strtoupper($requestValue['bg_color']);
        $requestValue['text_color'] = strtoupper($requestValue['text_color']);
        $requestValue['slug'] = Str::slug($requestValue['nama']);
        $requestValue['uuid'] = Str::uuid();

        TipePekerjaan::create($requestValue);
        $flasher->addSuccess('Data tipe pekerjaan berhasil ditambahkan');

        return to_route('tipe-pekerjaan.index');
    }

    public function edit(Request $request) {
        $jobType = TipePekerjaan::find($request->id);

        return view('pages.job_type.edit', compact('jobType'));
    }

    public function update(Request $request, NotyfFactory $flasher) {
        $rules = [
            'nama' => 'required|string',
            'bg_color' => 'required',
            'text_color' => 'required',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $this->validate($request, $rules, $customMessages);
        
        $jobTypes = TipePekerjaan::find($request->id);

        // Request value upload to DB
        $requestValue = $request->all();
        $requestValue['bg_color'] = strtoupper($requestValue['bg_color']);
        $requestValue['text_color'] = strtoupper($requestValue['text_color']);
        $requestValue['slug'] = Str::slug($requestValue['nama']);
        $requestValue['id_admin_updated'] = Auth::user()->id;

        $jobTypes->update($requestValue);
        $flasher->addSuccess('Data tipe pekerjaan berhasil diperbarui');

        return to_route('tipe-pekerjaan.index');
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $jobTypes = TipePekerjaan::find($request->id);

        $jobTypes->delete();
        $flasher->addSuccess('Data tipe pekerjaan berhasil dihapus');

        return to_route('tipe-pekerjaan.index');
    }
}