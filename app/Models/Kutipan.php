<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kutipan extends Model
{
    use HasFactory;

    protected $table = 'kutipan';

    protected $guarded = ['id'];

    protected $fillable = ['uuid', 'nama', 'photo', 'kutipan', 'posisi', 'id_admin_updated'];

    public function updatedBy() {
        return $this->belongsTo(User::class, 'id_admin_updated');
    }
}
