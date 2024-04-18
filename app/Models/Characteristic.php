<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    protected $table = 'characteristics';
    
    protected $fillable = ['code', 'personality_id', 'characteristic'];

    public function rules() {
        return $this->hasMany(Rule::class, 'characteristic_id');
    }

    public function personality() {
        return $this->belongsTo(Personality::class, 'personality_id');
    }
}
