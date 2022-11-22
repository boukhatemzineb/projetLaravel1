<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prospect extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'societe',
        'fonction',
        'email',
        'telephone',
        'adresse',
        'site',
        'statut',
        'source',
    ];
}
