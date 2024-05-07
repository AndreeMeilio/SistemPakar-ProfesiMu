<?php

namespace App\Http\Controllers\MainPage;

use App\Http\Controllers\Controller;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Personality;
use App\Models\Profession;
use App\Enums\ProfessionCategories;
use App\Enums\DigitalExperiences;

class HomeController extends Controller
{
    public function index() {
        return view('pages.main.index');
    }

    public function profession() {
        $categories = ProfessionCategories::toArray();
        $professions = Profession::all();

        $data = [
            'categories' => $categories,
            'professions' => $professions,
        ];

        return view('pages.main.profession', $data);
    }

    public function personality() {
        $personalities = Personality::all();

        return view('pages.main.personality', compact('personalities'));
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
        ];

        $this->validate($request, $rules, $customMessages, $customAttributes);

        Participant::create($request->all());
        $participantId = Participant::latest()->first();

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

    public function resultTest(Request $request) {
        $participant = Participant::find($request->id);
        
        $feedbackDate = null;
        $isFeedbackSubmitted = false;

        if ($participant) {
            $feedbackDate = date('d/m/Y', strtotime($participant->created_at));
            $isFeedbackSubmitted = $participant->star_rating || $participant->feedback ? true : false;
        } else {
            return back();
        }

        $data = [
            'participant' => $participant,
            'feedbackDate' => $feedbackDate,
            'isFeedbackSubmitted' => $isFeedbackSubmitted,
        ];

        return view('pages.main.result_test', $data);
    }

    public function submitFeedback(Request $request, NotyfFactory $flasher) {
        if (!$request->star_rating && !$request->feedback) {
            $flasher->addError('Mohon isi minimal salah satu kolom umpan balik');
            return back();
        }
        
        $participant = Participant::find($request->id);
        $requestValue = $request->all();
        $participant->update($requestValue);
        $flasher->addSuccess('Umpan balik mu telah kami terima, terima kasih!');

        return to_route('result_test', $request->id);
    }
}
