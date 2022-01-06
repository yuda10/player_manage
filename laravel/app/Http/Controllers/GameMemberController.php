<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

use App\Models\Player;

use App\Models\GameMember;


class GameMemberController extends Controller
{
    /**
     * チームメンバー取得
     * 
     * @param Request $request
     * @return Request
     */

    public function player_list(Request $request)
    {
        $games = Game::where('id','1')->get();
        $players = Player::where('team_id','1')->get();
                            
        return view('game_members.index',compact('games','players'));
    }
}
