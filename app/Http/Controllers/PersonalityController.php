<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personality;
use App\Models\Characteristic;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;

class PersonalityController extends Controller
{
    public function index() {
        $personalities = Personality::orderBy('id', 'asc')->get();
        $characteristics = Characteristic::all();

        $data = [
            'personalities' => $personalities,
            'characteristics' => $characteristics,
        ];

        return view('pages.personalities.index', $data);
    }

    public function create() {
        $personalities = Personality::all();
        
        return view('pages.personalities.add', compact('personalities'));
    }

    public function store(Request $request, NotyfFactory $flasher) {
        $rules = [
            'code' => 'required|string',
            'personality_id' => 'required|numeric',
            'characteristic' => 'required|string',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $customAttributes = [
            'code' => 'Kode',
            'personality_id' => 'Tipe Kepribadian',
            'characteristic' => 'Karakteristik',
        ];

        $this->validate($request, $rules, $customMessages, $customAttributes);

        $requestValue = $request->all();

        Characteristic::create($requestValue);
        $flasher->addSuccess('Data karakteristik berhasil ditambahkan');

        return to_route('karakteristik-riasec.index');
    }

    public function edit(Request $request) {
        $characteristic = Characteristic::find($request->id);
        $personalities = Personality::all();

        $data = [
            'characteristic' => $characteristic,
            'personalities' => $personalities,
        ];

        return view('pages.personalities.edit', $data);
    }

    public function update(Request $request, NotyfFactory $flasher) {
        $rules = [
            'code' => 'string',
            'personality_id' => 'required|numeric',
            'characteristic' => 'required|string',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $customAttributes = [
            'code' => 'Kode',
            'personality_id' => 'Tipe Kepribadian',
            'characteristic' => 'Karakteristik',
        ];

        $this->validate($request, $rules, $customMessages, $customAttributes);

        $characteristic = Characteristic::find($request->id);

        // Request value upload to DB
        $requestValue = $request->all();

        $characteristic->update($requestValue);
        $flasher->addSuccess('Data karakteristik berhasil diperbarui');

        return to_route('karakteristik-riasec.index');
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $characteristic = Characteristic::find($request->id);

        $characteristic->delete();
        $flasher->addSuccess('Data karakteristik berhasil dihapus');

        return to_route('karakteristik-riasec.index');
    }
}