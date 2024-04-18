<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profession;

use App\Models\Lowongan;
use App\Models\TipePekerjaan;
use App\Models\Departemen;

use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Date\Date;

class ProfessionController extends Controller
{
    public function index() {
        $professions = Profession::orderBy('profession_name')->get();

        return view('pages.profession.index', compact('professions'));
    }
    
    public function show(Request $request) {
        $job = Lowongan::find($request->id);

        Date::setLocale('id');
        $start = Date::parse($job->tanggal_dibuka)->format('j F Y');
        $deadline = Date::parse($job->tanggal_ditutup)->format('j F Y');

        $data = [
            'job' => $job,
            'start' => $start,
            'deadline' => $deadline
        ];

        return view('pages.profession.detail', $data);
    }

    public function create() {
        $types = TipePekerjaan::all();
        $departments = Departemen::all();

        $data = [
            'types' => $types,
            'departments' => $departments,
        ];

        return view('pages.profession.add', $data);
    }

    public function store(Request $request, NotyfFactory $flasher) {
        $rules = [
            'nama' => 'required|string',
            'tipe_pekerjaan' => 'required',
            'deskripsi' => 'required|string',
            'persyaratan' => 'required|string',
            'departemen' => 'required',
            'lokasi' => 'required|string',
            'tanggal_dibuka' => 'required',
            'tanggal_ditutup' => 'required',
            'status_aktif' => 'required',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $this->validate($request, $rules, $customMessages);

        $requestValue = $request->all();
        $requestValue['id_tipe_pekerjaan'] = $request->tipe_pekerjaan;
        $requestValue['id_departemen'] = $request->departemen;
        $requestValue['slug'] = Str::slug($requestValue['nama']);
        $requestValue['uuid'] = Str::uuid();

        $currentDate = strtotime(date('Y-m-d'));
        $startDate = strtotime($request->tanggal_dibuka);
        $endDate = strtotime($request->tanggal_ditutup);

        $checkStartDate = ($startDate > $currentDate) && $request->status_aktif;
        $checkEndDate = ($endDate < $currentDate) && $request->status_aktif;
        $checkJobDate = ($endDate < $startDate);

        if ($checkJobDate) {
            $flasher->addError('Tanggal dibuka dan tanggal ditutup tidak sesuai');
            $redirect = redirect(route('profesi-digital.create'));
        }
        
        if ($checkStartDate) {
            $flasher->addError('Status lowongan tidak sesuai dengan tanggal dibuka');
            $redirect = redirect(route('profesi-digital.create'));
        }

        if ($checkEndDate) {
            $flasher->addError('Status lowongan tidak sesuai dengan tanggal ditutup');
            $redirect = redirect(route('profesi-digital.create'));
        }
        
        if (!$checkJobDate && !$checkStartDate && !$checkEndDate) {
            Lowongan::create($requestValue);
            $flasher->addSuccess('Data lowongan kerja berhasil ditambahkan');
            $redirect = redirect(route('profesi-digital.index'));
        }

        return $redirect;
    }

    public function edit(Request $request) {
        $job = Lowongan::find($request->id);
        $types = TipePekerjaan::all();
        $departments = Departemen::all();

        $data = [
            'job' => $job,
            'types' => $types,
            'departments' => $departments,
        ];

        return view('pages.profession.edit', $data);
    }

    public function update(Request $request, NotyfFactory $flasher) {
        $rules = [
            'nama' => 'required|string',
            'tipe_pekerjaan' => 'required',
            'deskripsi' => 'required|string',
            'persyaratan' => 'required|string',
            'departemen' => 'required',
            'lokasi' => 'required|string',
            'tanggal_dibuka' => 'required',
            'tanggal_ditutup' => 'required',
            'status_aktif' => 'required',
        ];

        $customMessages = [
            'required' => ':attribute harus diisi',
        ];

        $this->validate($request, $rules, $customMessages);

        $job = Lowongan::find($request->id);

        $requestValue = $request->all();
        $requestValue['id_tipe_pekerjaan'] = $request->tipe_pekerjaan;
        $requestValue['id_departemen'] = $request->departemen;
        $requestValue['slug'] = Str::slug($requestValue['nama']);
        $requestValue['id_admin_updated'] = Auth::user()->id;

        $currentDate = strtotime(date('Y-m-d'));
        $startDate = strtotime($request->tanggal_dibuka);
        $endDate = strtotime($request->tanggal_ditutup);

        $checkStartDate = ($startDate > $currentDate) && $request->status_aktif;
        $checkEndDate = ($endDate < $currentDate) && $request->status_aktif;
        $checkJobDate = ($endDate < $startDate);

        if ($checkJobDate) {
            $flasher->addError('Tanggal dibuka dan tanggal ditutup tidak sesuai');
            $redirect = redirect(route('profesi-digital.edit', $request->id));
        }
        
        if ($checkStartDate) {
            $flasher->addError('Status lowongan tidak sesuai dengan tanggal dibuka');
            $redirect = redirect(route('profesi-digital.edit', $request->id));
        }

        if ($checkEndDate) {
            $flasher->addError('Status lowongan tidak sesuai dengan tanggal ditutup');
            $redirect = redirect(route('profesi-digital.edit', $request->id));
        }
        
        if (!$checkJobDate && !$checkStartDate && !$checkEndDate) {
            $job->update($requestValue);
            $flasher->addSuccess('Data lowongan kerja berhasil diperbarui');    
            $redirect = redirect(route('profesi-digital.index'));
        }
        
        return $redirect;
    }

    public function destroy(Request $request, NotyfFactory $flasher) {
        $job = Lowongan::find($request->id);

        $job->delete();
        $flasher->addSuccess('Data lowongan kerja berhasil dihapus');

        return to_route('profesi-digital.index');
    }
}