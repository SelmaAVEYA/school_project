<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletins extends Model
{
    use HasFactory;
    protected $fillable = [
            'date_Sortie',
            'annee_scolaire_id',
            'etudiants_id',
    ];
}
