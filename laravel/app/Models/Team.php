<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function players()
    {
        return $this->hasMany(App\Models\Player::class);
        // return $this->belongsTo(App\Models\Player::class);
    }

    // テーブル名
    protected $table = 'teams';

    // 可変項目
    protected $fillable =
    [
        'name',
        'league',
        'manager_name',
        'manager_phone',
        'manager_email',
    ];

    // Game（子）とのリレーション
    public function homeTeams()
    {
        return $this->hasMany(Game::class, 'id', 'home_team_id');
    }

    public function awayTeams()
    {
        return $this->hasMany(Game::class, 'id', 'away_team_id');
    }

    public function assistantTeams()
    {
        return $this->hasMany(Game::class, 'id', 'assistant_team_id');
    }
}
