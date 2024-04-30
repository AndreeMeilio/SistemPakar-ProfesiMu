<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rule;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class RuleController extends Controller
{
    public function index() {
        $rules = Rule::all();

        return view('pages.rules.index', compact('rules'));
    }
    
    public function show(Request $request) {
        return view('pages.rules.detail');
    }

    public function create() {
        return view('pages.rules.add');
    }

    public function store(Request $request, NotyfFactory $flasher) {
    }

    public function edit(Request $request) {
        return view('pages.rules.edit');
    }

    public function update(Request $request, NotyfFactory $flasher) {
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $rule = Rule::find($request->id);

        $rule->delete();
        $flasher->addSuccess('Data aturan berhasil dihapus');

        return to_route('aturan-relasi.index');
    }
}