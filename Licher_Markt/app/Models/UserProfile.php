// app/Models/UserProfile.php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id', 'name', 'experience', 'skills', 
        'location', 'education', 'preferences'
    ];

    protected $casts = [
        'skills' => 'array',
        'preferences' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}