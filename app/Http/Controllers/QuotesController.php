<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kutipan;
use Illuminate\Support\Facades\Auth;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuotesController extends Controller
{
    public function index() {
        $quotesList = Kutipan::orderBy('id')->get();

        return view('pages.quotes.index', compact('quotesList'));
    }

    public function create() {
        return view('pages.quotes.add');
    }

    public function store(Request $request, NotyfFactory $flasher) {
        $rules = [
            'nama' => 'required|string',
            'foto' => 'required|max:2048',
            'kutipan' => 'required|string',
            'posisi' => 'required|string',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $fileImage = null;
        if ($request->hasFile('foto')) {
            $imageName = str_replace(' ', '_', $request->nama);
            $extension = $request->file('foto')->guessExtension();
            $fileImage = $imageName.'.'.$extension;
            $image = $request->file('foto')->storeAs('public/images/kutipan', $fileImage);
        }

        $this->validate($request, $rules, $customMessages);

        // Request value upload to DB
        $requestValue = $request->all();
        $requestValue['foto'] = $fileImage;
        $requestValue['uuid'] = Str::uuid();

        Kutipan::create($requestValue);
        $flasher->addSuccess('Data kutipan berhasil ditambahkan');

        return to_route('kutipan.index');
    }

    public function edit(Request $request) {
        $quotes = Kutipan::find($request->id);

        return view('pages.quotes.edit', compact('quotes'));
    }

    public function update(Request $request, NotyfFactory $flasher) {
        $rules = [
            'nama' => 'required|string',
            'foto' => 'max:2048',
            'kutipan' => 'required|string',
            'posisi' => 'required|string',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $this->validate($request, $rules, $customMessages);
        
        $quotes = Kutipan::find($request->id);

        // Upload new file
        $fileImage = null;

        if ($request->file('foto') == null) {
            $fileImage = $quotes->foto;
        }
        else {
            if ($request->hasFile('foto')) {
                $imageName = str_replace(' ', '_', $request->nama);
                $extension = $request->file('foto')->guessExtension();
                $fileImage = $imageName.'.'.$extension;
                $image = $request->file('foto')->storeAs('public/images/kutipan', $fileImage);
            }
        }

        // Request value upload to DB
        $requestValue = $request->all();
        $requestValue['foto'] = $fileImage;
        $requestValue['id_admin_updated'] = Auth::user()->id;

        $quotes->update($requestValue);
        $flasher->addSuccess('Data kutipan berhasil diperbarui');

        return to_route('kutipan.index');
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $quotes = Kutipan::find($request->id);

        $quotes->delete();
        $flasher->addSuccess('Data kutipan berhasil dihapus');

        return to_route('kutipan.index');
    }
}