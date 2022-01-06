<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

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

}
