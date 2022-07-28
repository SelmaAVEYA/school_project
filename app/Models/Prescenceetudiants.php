<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescenceetudiants extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateJours',
        'statut',
        'etudiants_id',

    ];
}
