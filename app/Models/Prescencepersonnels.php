<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescencepersonnels extends Model
{
    use HasFactory;
    protected $fillable = [
            'date_Jours',
            'statut',
            'personnels_id',
    ];
}
