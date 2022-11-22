<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunite extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'montant',
        'etape',
        'date',
        'Ndevis',
        'Nfacture',
        'remise',
        'client_id',
        
    ];
}
