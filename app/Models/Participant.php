<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'participants';
    
    protected $fillable = [
        'participant_name', 
        'gender', 
        'age', 
        'study_program', 
        'education', 
        'experience', 
        'goal',
        'personality_id',
        'profession_id',
        'star_rating',
        'feedback',
    ];

    public function personality() {
        return $this->belongsTo(Personality::class, 'personality_id');
    }

    public function profession() {
        return $this->belongsTo(Profession::class, 'profession_id');
    }
}
