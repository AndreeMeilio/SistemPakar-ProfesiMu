<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $table = 'pelamar';

    protected $guarded = ['id'];

    protected $fillable = ['uuid', 'nama', 'foto', 'email', 'no_telp', 'tanggal_lahir', 'domisili', 'institusi', 'program_studi', 'pendidikan_terakhir', 'semester_saat_ini', 'pengalaman_kerja', 'ekspektasi_pendapatan', 'cv_resume', 'dokumen_lainnya', 'informasi_tambahan', 'id_lowongan', 'status_potensi'];

    public function lowongan() {
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }
}
