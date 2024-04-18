<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lowongan;
use App\Models\Pelamar;
use App\Models\TipePekerjaan;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;

class PotentialController extends Controller
{
    public function index() {
        $jobTypes = TipePekerjaan::all();
        $openJobTypes = [];

        foreach ($jobTypes as $jobType) {
            $openVacancies = $jobType->lowongan()->where('status_aktif', true)->get();
            
            if ($openVacancies->count() > 0) {
                foreach ($openVacancies as $openVacancy) {
                    $potentialApplicants = $openVacancy->pelamar()
                                            ->where(function($query) {
                                                $query->where('status_potensi', 'Cocok')
                                                ->orWhere('status_potensi', 'Cadangan');
                                            })->get();
                    
                    $openVacancy->pelamar_count = $potentialApplicants->count();
                }

                $jobType->openVacancies = $openVacancies;
                $openJobTypes[] = $jobType;
            }
        }

        return view('pages.potential.index', compact('openJobTypes'));
    }

    public function detail($tipePekerjaanSlug, $lowonganSlug, NotyfFactory $flasher) {
        $jobType = TipePekerjaan::where('slug', $tipePekerjaanSlug)->first();
        $jobVacancy = Lowongan::where('slug', $lowonganSlug)->first();

        if ($jobType == null || $jobVacancy == null) {
            $flasher->addError('Lowongan kerja tidak ditemukan');
            return redirect(route('potensial.index'));
        }

        $potentialApplicants = $jobVacancy->pelamar()
                                ->where(function($query) {
                                    $query->where('status_potensi', 'Cocok')
                                    ->orWhere('status_potensi', 'Cadangan');
                                })->orderBy('status_potensi', 'DESC')->orderBy('full_name')->get();

        $jobVacancy->pelamar_count = $potentialApplicants->count();

        $data = [
            'jobType' => $jobType,
            'jobVacancy' => $jobVacancy,
            'potentialApplicants' => $potentialApplicants,
        ];

        return view('pages.potential.detail', $data);
    }

    public function update($tipePekerjaanSlug, $lowonganSlug, Request $request, NotyfFactory $flasher) {
        $rules = [
            'id' => 'required',
            'status_potensi' => 'required',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $this->validate($request, $rules, $customMessages);
        
        $applicant = Pelamar::find($request->id);

        // Request value upload to DB
        $requestValue = $request->all();

        $applicant->update($requestValue);
        $flasher->addSuccess('Data pelamar potensial berhasil diperbarui');

        return to_route('potensial.detail', ['tipe_pekerjaan' => $tipePekerjaanSlug, 'lowongan' => $lowonganSlug]);
    }
}