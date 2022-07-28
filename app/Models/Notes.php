<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    protected $fillable = [
            'notes',
            'appreciations',
            'bulletins_id',
            'examens_id',
            'etudiants_id',
    ];
}
