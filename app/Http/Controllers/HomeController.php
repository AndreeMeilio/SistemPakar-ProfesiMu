<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use App\Models\Lowongan;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index() {
        $applicants = Pelamar::all();
        $jobs = Lowongan::all();

        $potentials = Pelamar::where('status_potensi', 'Cocok')->orWhere('status_potensi', 'Cadangan')->get();
        $latestApplicants = Pelamar::latest()->take(5)->get();
        $todayApplicants = Pelamar::whereDate('created_at', date('Y-m-d'))->get();
        
        $data = [
            'applicants' => $applicants,
            'jobs' => $jobs,
            'potentials' => $potentials,
            'latestApplicants' => $latestApplicants,
            'todayApplicants' => $todayApplicants
        ];

        return view('pages.home.index', $data);
    }
}
