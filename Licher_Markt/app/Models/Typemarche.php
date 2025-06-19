<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typemarche extends Model
{
    use HasFactory;

    protected $table = 'typeMarche';
    protected $fillable = [
        'id',
        'code',
        'description',
        'libelle',
    ];
}
