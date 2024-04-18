<?php

namespace App\Http\Controllers\MainPage;

use App\Http\Controllers\Controller;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function personal_data() {
        return view('pages.main.personal_data');
    }

    public function introduction_test() {
        return view('pages.main.introduction');
    }

    public function interest_test() {
        return view('pages.main.interest_test');
    }

    public function personality_test() {
        return view('pages.main.personality_test');
    }

    public function result_test() {
        return view('pages.main.result_test');
    }
}
