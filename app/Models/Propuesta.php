<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_title',
        'pro_description',
        'pro_image',
        'use_lastname',
        'use_id',
    ];

    public function propuestaUserPropuesta()
    {
        return $this->hasMany(UserPropuesta::class, 'pro_id');
    }

}
