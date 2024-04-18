<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personality extends Model
{
    use HasFactory;

    protected $table = 'personalities';

    protected $fillable = ['code', 'personality_name', 'description'];

    public function characteristics() {
        return $this->hasMany(Characteristic::class, 'personality_id');
    }

    public function participants() {
        return $this->hasMany(Participant::class, 'personality_id');
    }
}
