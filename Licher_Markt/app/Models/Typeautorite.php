<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeautorite extends Model
{
    use HasFactory;
    protected $table = 'typeautorite';
    protected $fillable = [
        'id',
        'code',
        'description',
        'libelle',
      
    ];
}
