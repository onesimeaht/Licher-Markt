<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modepassation extends Model
{
    use HasFactory;

    protected $table = 'modepassation';
    protected $fillable = [
        'id',
        'code',
        'description',
        'libelle',
    ];
}
