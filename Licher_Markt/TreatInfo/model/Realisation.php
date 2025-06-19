<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $table = 'realisations';
    protected $fillable = [
        'id',
	    'datedemarrage', 	
     	'datelancement', 
	 	'delaiexecution', 	
 	    'libelle', 	
		'montantEstime',
        'num_reference',
	 	'autorite_id',
		'plan_id' ,
	 	'modepassation_id',
     	'servicemaitreoeuvre_id', 
	 	'typesBailleurs_id',
	 	'typeMarche_id',
    ];
    public function autorite()
    {
        return $this->hasOne(Autorite::class,"id","autorite_id");
    }
    public function plan()
    {
        return $this->hasOne(Plan::class,"id","plan_id");
    }
    public function modepassation()
    {
        return $this->hasOne(Modepassation::class,"id","modepassation_id");
    }
    public function servicemaitreoeuvre()
    {
        return $this->hasOne(Servicemaitreoeuvre::class,"id","servicemaitreoeuvre_id");
    }
    public function  typebailleurs ()
    {
        return $this->hasOne(Typebailleurs::class,"id","typesBailleurs_id");
    }
    public function  Typemarche ()
    {
        return $this->hasOne(Typemarche::class,"id","typesMarche_id");
    }
}