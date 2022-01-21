<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameMember extends Model
{
    use HasFactory;

    // テーブル名
    protected $table = 'game_members';

    // 可変項目
    protected $fillable = 
    [   
        'game_id',
        'home_1',
        'home_2',
        'home_3',
        'home_4',
        'home_5',
        'home_6',
        'home_7',
        'home_8',
        'home_9',
        'home_10',
        'home_11',
        'home_12',
        'home_13',
        'home_14',
        'home_15',
        'home_16',
        'home_17',
        'home_18',
        'home_19',
        'home_20',
        'home_21',
        'home_22',
        'home_23',
        'away_1',
        'away_2',
        'away_3',
        'away_3',
        'away_4',
        'away_5',
        'away_6',
        'away_7',
        'away_8',
        'away_9',
        'away_10',
        'away_11',
        'away_12',
        'away_13',
        'away_14',
        'away_15',
        'away_16',
        'away_17',
        'away_18',
        'away_19',
        'away_20',
        'away_21',
        'away_22',
        'away_23',
    ];
}

