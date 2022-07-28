<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptions extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateInscription',
        'montantPaye',
        'etudiants_id',
        'annee_scolaire_id',
    ];
}
