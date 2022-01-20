<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // テーブル名
    protected $table = 'games';

    // 可変項目
    protected $fillable = 
    [   
        'home_team_id',
        'away_team_id',
        'ground',
        'datetime',
        'league',
        'assistant_team_id'
    ];

    protected $dates = ['datetime'];

    // Team（親）とのリレーション
    public function homeTeams()
    {
        return $this->belongsTo(Team::class, 'home_team_id', 'id');
    }

    public function awayTeams()
    {
        return $this->belongsTo(Team::class, 'away_team_id', 'id');
    }

    public function assistantTeams()
    {
        return $this->belongsTo(Team::class, 'assistant_team_id', 'id');
    }
}