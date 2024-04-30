<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use App\Enums\ProfessionCategories;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index() {
        $professions = Profession::orderBy('profession_name')->get();

        return view('pages.profession.index', compact('professions'));
    }
    
    public function show(Request $request) {
        $profession = Profession::find($request->id);
        $learningResources = json_decode($profession->learning_resources, true);

        $data = [
            'profession' => $profession,
            'learningResources' => $learningResources
        ];

        return view('pages.profession.detail', $data);
    }

    public function create() {
        $categories = ProfessionCategories::toArray();

        return view('pages.profession.add', compact('categories'));
    }

    public function store(Request $request, NotyfFactory $flasher) {
        $rules = [
            'code' => 'required|string',
            'profession_name' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'responsibility' => 'required|string',
            'skill' => 'required|string',
            'learning_title' => 'required|string',
            'learning_url' => 'required|string',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $customAttributes = [
            'code' => 'Kode',
            'profession_name' => 'Nama Profesi',
            'category' => 'Kategori',
            'description' => 'Deskripsi',
            'responsibility' => 'Tanggung Jawab',
            'skill' => 'Keterampilan',
            'learning_title' => 'Judul Pembelajaran',
            'learning_url' => 'URL Pembelajaran',
        ];
        
        $this->validate($request, $rules, $customMessages, $customAttributes);

        $requestValue = $request->all();
        $requestValue['learning_resources'] = json_encode([
            'title' => $request->learning_title, 
            'link' => $request->learning_url
        ]);

        if (Profession::where('code', $request->code)->exists()) {
            $flasher->addError('Kode profesi sudah ada');
            $redirect = redirect(route('profesi-digital.create'));
        } else {
            Profession::create($requestValue);
            $flasher->addSuccess('Data profesi berhasil ditambahkan');
            $redirect = redirect(route('profesi-digital.index'));
        }

        return $redirect;
    }

    public function edit(Request $request) {
        $profession = Profession::find($request->id);
        $categories = ProfessionCategories::toArray();
        $learningResources = json_decode($profession->learning_resources, true);

        $data = [
            'profession' => $profession,
            'categories' => $categories,
            'learningResources' => $learningResources
        ];

        return view('pages.profession.edit', $data);
    }

    public function update(Request $request, NotyfFactory $flasher) {
        $rules = [
            'code' => 'string',
            'profession_name' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'responsibility' => 'required|string',
            'skill' => 'required|string',
            'learning_title' => 'required|string',
            'learning_url' => 'required|string',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $customAttributes = [
            'code' => 'Kode',
            'profession_name' => 'Nama Profesi',
            'category' => 'Kategori',
            'description' => 'Deskripsi',
            'responsibility' => 'Tanggung Jawab',
            'skill' => 'Keterampilan',
            'learning_title' => 'Judul Pembelajaran',
            'learning_url' => 'URL Pembelajaran',
        ];

        $this->validate($request, $rules, $customMessages, $customAttributes);

        $profession = Profession::find($request->id);

        $requestValue = $request->all();
        $requestValue['learning_resources'] = json_encode([
            'title' => $request->learning_title, 
            'link' => $request->learning_url
        ]);
        
        $profession->update($requestValue);
        $flasher->addSuccess('Data profesi berhasil diperbarui');    

        return redirect(route('profesi-digital.index'));
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $profession = Profession::find($request->id);

        $profession->delete();
        $flasher->addSuccess('Data profesi berhasil dihapus');

        return to_route('profesi-digital.index');
    }
}