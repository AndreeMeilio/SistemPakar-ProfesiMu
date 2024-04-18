<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = 'rules';

    protected $fillable = [
        'code', 
        'characteristic_id', 
        'profession_id', 
        'characteristic_code', 
        'profession_code', 
    ];

    public function characteristic() {
        return $this->belongsTo(Characteristic::class, 'characteristic_id');
    }

    public function profession() {
        return $this->belongsTo(Profession::class, 'profession_id');
    }
}
