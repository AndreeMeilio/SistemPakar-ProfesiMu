<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use App\Models\Characteristic;
use App\Models\User;
use App\Models\Participant;

class DashboardController extends Controller
{
    public function index() {
        $professions = Profession::all();
        $characteristics = Characteristic::all();
        $users = User::all();
        $todayParticipants = Participant::whereDate('created_at', date('Y-m-d'))->get();
        
        $data = [
            'professions' => $professions,
            'characteristics' => $characteristics,
            'users' => $users,
            'todayParticipants' => $todayParticipants,
        ];

        return view('pages.dashboard.index', $data);
    }
}
