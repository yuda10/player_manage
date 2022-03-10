<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

use App\Models\Team;

use Carbon\Carbon;

class GameController extends Controller
{
    /**
     * 試合一覧取得
     * 
     * @param Request $request
     * @return Request
     */
    
    public function gameList(Request $request)
    {
        $date1 = new Carbon('today');
        $date2 = new Carbon('+2 month');

        $leagues = [
            'kyusyuA'=>'九州A',
            'kyusyuB'=>'九州B',
            'fukuokaA'=>'福岡県A',
            'fukuokaB'=>'福岡県B'
        ];

        $league = $leagues[$request->league];

        $games = Game::with(['homeTeams', 'awayTeams', 'assistantTeams'])->where('league',$league)
                            ->whereBetween('datetime', [$date1,$date2])->orderBy('datetime','asc')->get();
                            
        $teams = Team::where('league',$league)->get();

        return view('games.index',compact('league', 'games', 'teams'));
    }

    /**
     * 試合追加
     * 
     * @param Request $request
     * @return Request
     */

    public function matchRegister(Request $request)
    {
        $this->validate($request,[
            'home_team_id' => 'required|max:11',
            'away_team_id' => 'required|max:11',
            'assistant_team_id' => 'required|max:11',
            'ground' => 'required|max:32',
            'datetime' => 'required',
            'league' => 'required'
        ]);

        Game::create([
            'home_team_id'=> $request->home_team_id,
            'away_team_id'=> $request->away_team_id,
            'assistant_team_id'=> $request->assistant_team_id,
            'ground'=> $request->ground,
            'datetime'=> $request->datetime,
            'league' => $request->league,
        ]);

        $leagues = [
            '九州A'=>'kyusyuA',
            '九州B'=>'kyusyuB',
            '福岡県A'=>'fukuokaA',
            '福岡県B'=>'fukuokaB'
        ];

        $league = $leagues[$request->league];

        return redirect("/games/$league");
    }



}
