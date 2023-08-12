<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $table = 'departemen';

    protected $guarded = ['id'];

    protected $fillable = ['uuid', 'nama', 'logo', 'slug', 'id_admin_updated'];

    public function lowongan() {
        return $this->hasMany(Lowongan::class, 'id_departemen');
    }

    public function updatedBy() {
        return $this->belongsTo(User::class, 'id_admin_updated');
    }
}
