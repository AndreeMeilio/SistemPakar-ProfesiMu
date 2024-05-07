<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use App\Models\Characteristic;
use App\Models\Participant;
use App\Models\Rule;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        $professions = Profession::all();
        $characteristics = Characteristic::all();
        $users = User::all();
        $rules = Rule::all();
        $participants = Participant::all();
        $todayParticipants = Participant::whereDate('created_at', date('Y-m-d'))->get();
        
        $data = [
            'professions' => $professions,
            'characteristics' => $characteristics,
            'users' => $users,
            'rules' => $rules,
            'participants' => $participants,
            'todayParticipants' => $todayParticipants,
        ];

        return view('pages.dashboard.index', $data);
    }
}
