<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPropuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'use_id',
        'pro_id',
    ];
    public function userPropuestaUser()
    {
        return $this->belongsTo(User::class,'use_id');
    }
    public static function checkProfer($idProfer){
        $isPressed = self::where('pro_id', $idProfer)->where('use_id',auth()->user()->id)->first();
        if($isPressed!=null){
            return true;
        }else{
            return false;
        }
    }
}
