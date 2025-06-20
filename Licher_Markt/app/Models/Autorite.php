<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Typeautorite;

class Autorite extends Model
{
    use HasFactory;

    protected $table = 'autorite';
    protected $fillable = [
        'id',
        'denomination',
        'email',
        'telephone',
        'annee',
        'sigle',
        'typeautorite_id',
    ];
    public function typeautorite()
    {
        return $this->hasOne(Typeautorite::class,"id","typeautorite_id");
    }
}
