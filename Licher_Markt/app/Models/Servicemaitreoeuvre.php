<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicemaitreoeuvre extends Model
{
    use HasFactory;

    protected $table = 'servicemaitreoeuvre';
    protected $fillable = [
        'id',
        'codification',
        'libelleService',
    ];
}
