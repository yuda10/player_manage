<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public function team()
    {
        //return $this->hasMany(\App\Models\Team::class);
        return $this->belongsTo(\App\Models\Team::class);
    }
=======
    // テーブル名
    protected $table = 'players';

    // 可変項目
    protected $fillable = 
    [   
        'name',
        'birthday',
        'photo',
        'team_id',
    ];
>>>>>>> yuda/main
}
