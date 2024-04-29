<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flasher\Notyf\Prime\NotyfFactory;
use App\Models\Participant;

class ParticipantController extends Controller
{
    public function index() {
        $participants = Participant::orderBy('created_at')->get();

        return view('pages.participants.index', compact('participants'));
    }
    
    public function show(Request $request) {
        $participant = Participant::find($request->id);

        if (stripos($participant->experience, 'bekerja')) {
            $participant->experience = 'Bekerja atau magang di bidang digital';
        } elseif (stripos($participant->experience, 'kursus')) {
            $participant->experience = 'Mengikuti kursus atau pelatihan di bidang digital';
        } elseif (stripos($participant->experience, 'belajar')) {
            $participant->experience = 'Belajar mandiri di bidang digital';
        } else {
            $participant->experience = 'Belum memiliki pengalaman di bidang digital';
        }

        $data = [
            'participant' => $participant,
        ];

        return view('pages.participants.detail', $data);
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $profession = Participant::find($request->id);

        $profession->delete();
        $flasher->addSuccess('Data partisipan berhasil dihapus');

        return to_route('riwayat-partisipan.index');
    }
}
