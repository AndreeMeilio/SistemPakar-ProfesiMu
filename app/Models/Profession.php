<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    protected $table = 'professions';

    protected $fillable = [
        'code', 
        'profession_name', 
        'category', 
        'description', 
        'responsibility', 
        'skill', 
        'learning_resources'
    ];

    protected $casts = [
        'learning_resources' => 'array'
    ];

    public function rules() {
        return $this->hasMany(Rule::class, 'profession_id');
    }

    public function participants() {
        return $this->hasMany(Participant::class, 'profession_id');
    }
}
