<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use App\Models\Participant;

class DashboardController extends Controller
{
    public function index() {
        $professions = Profession::all();
        $todayParticipants = Participant::whereDate('created_at', date('Y-m-d'))->get();
        
        $data = [
            'professions' => $professions,
            'todayParticipants' => $todayParticipants,
        ];

        return view('pages.dashboard.index', $data);
    }
}
