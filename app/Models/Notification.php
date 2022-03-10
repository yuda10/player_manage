<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    // テーブル名
    protected $table = 'notifications';

    // 可変項目
    protected $fillable = 
    [   
        'modified_date',
        'body',
    ];

    protected $guarded = [
        'id'
    ];

    protected $dates = ['modified_date'];

}
