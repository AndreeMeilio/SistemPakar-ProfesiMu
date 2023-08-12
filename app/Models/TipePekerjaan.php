<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipePekerjaan extends Model
{
    use HasFactory;

    protected $table = 'tipe_pekerjaan';

    protected $guarded = ['id'];

    protected $fillable = ['uuid', 'nama', 'bg_color', 'text_color', 'slug', 'id_admin_updated'];

    public function lowongan() {
        return $this->hasMany(Lowongan::class, 'id_tipe_pekerjaan');
    }

    public function updatedBy() {
        return $this->belongsTo(User::class, 'id_admin_updated');
    }
}
