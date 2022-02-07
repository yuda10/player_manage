<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    // テーブル名
    protected $table = 'players';

    // 可変項目
    protected $fillable = 
    [   
        'jrfu_id',
        'name',
        'phone',
        'email',
        'position',
        'photo',
        'team_id',
    ];
}
