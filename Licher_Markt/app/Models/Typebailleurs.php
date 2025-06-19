<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typebailleurs extends Model
{
    use HasFactory;

    protected $table = 'typesBailleurs';
    protected $fillable = [
        'id',
        'code ',
        'libelle',
    ];
    
}
