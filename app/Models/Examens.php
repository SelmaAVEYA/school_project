<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examens extends Model
{
    use HasFactory;
    protected $fillable = [
            'date',
            'type',
            'matieres_id',
    ];
}
