<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

use Carbon\Carbon;

class GameController extends Controller
{
    /**
     * 試合一覧取得
     * 
     * @param Request $request
     * @return Request
     */
    
    public function gamelist(Request $request)
    {
        $date1 = new Carbon('today');
        $date2 = new Carbon('+1 month');

        $games = Game::orderBy('datetime','asc')
                            ->whereBetween('datetime', [$date1,$date2])->get();
                            
        return view('games.index',['games'=>$games]);
    }
}
