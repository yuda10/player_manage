<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    public function team()
    {
        //return $this->hasMany(\App\Models\Team::class);
        return $this->belongsTo(\App\Models\Team::class);
    }
}
