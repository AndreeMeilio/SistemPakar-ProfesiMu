<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $guarded = ['id'];

    protected $fillable = ['uuid', 'nama', 'id_tipe_pekerjaan', 'deskripsi', 'persyaratan', 'id_departemen', 'lokasi', 'tanggal_dibuka', 'tanggal_ditutup', 'slug', 'status_aktif', 'id_admin_updated'];

    public function tipe() {
        return $this->belongsTo(TipePekerjaan::class, 'id_tipe_pekerjaan');
    }

    public function departemen() {
        return $this->belongsTo(Departemen::class, 'id_departemen');
    }

    public function pelamar() {
        return $this->hasMany(Pelamar::class, 'id_lowongan');
    }

    public function updatedBy() {
        return $this->belongsTo(User::class, 'id_admin_updated');
    }
}
