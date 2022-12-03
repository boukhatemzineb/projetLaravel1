<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opp extends Model
{
    use HasFactory;
    protected $fillable = [
        'opportunite_id',
        'produit_id',
        'quantite',
       
    ];
}
