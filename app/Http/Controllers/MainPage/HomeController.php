<?php

namespace App\Http\Controllers\MainPage;

use App\Http\Controllers\Controller;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Enums\DigitalExperiences;

class HomeController extends Controller
{
    public function index() {
        return view('pages.main.index');
    }

    public function profession() {
        return view('pages.main.profession');
    }

    public function personality() {
        return view('pages.main.personality');
    }

    public function personalData() {
        $experiences = DigitalExperiences::toArray();

        return view('pages.main.personal_data', compact('experiences'));
    }

    public function submitPersonalData(Request $request) {
        $rules = [
            'participant_name' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|numeric',
            'study_program' => 'required|string',
            'education' => 'required|string',
            'experience' => 'required|string',
            'goal' => 'string',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $customAttributes = [
            'participant_name' => 'Nama Lengkap',
            'gender' => 'Jenis Kelamin',
            'age' => 'Usia',
            'study_program' => 'Program Studi',
            'education' => 'Pendidikan',
            'experience' => 'Pengalaman',
            'goal' => 'Tujuan',
        ];

        $this->validate($request, $rules, $customMessages, $customAttributes);

        Participant::create($request->all());

        return to_route('introduction_test');
    }

    public function introductionTest() {
        return view('pages.main.introduction');
    }

    public function interestTest() {
        return view('pages.main.interest_test');
    }

    public function personalityTest() {
        return view('pages.main.personality_test');
    }

    public function resultTest() {
        return view('pages.main.result_test');
    }
}
