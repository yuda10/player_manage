<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

use App\Models\Player;

use App\Models\Team;

use App\Models\GameMember;


class GameMemberController extends Controller
{
    /**
     * チームメンバー取得
     * 
     * @param Request $request
     * @return Request
     */

    public function playerList(Request $request)
    {
        $value = $request->game;
        $games = Game::with(['homeTeams', 'awayTeams', 'assistantTeams'])->where('id', $value)->get();
        $players = Player::where('team_id', $value)->get();
                            
        return view('game_members.index',compact('games','players'));
    }
}
