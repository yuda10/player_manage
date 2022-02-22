<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

use App\Models\Player;

use App\Models\Team;

use App\Models\GameMember;

use Carbon\Carbon;

class GameMemberController extends Controller
{
    /**
     * 選手登録画面取得
     *
     * @param Request $request
     * @return Request
     */

    public function gameMemberList(Request $request)
    {
        $value = $request->game_id;
        $games = Game::with(['homeTeams', 'awayTeams', 'assistantTeams'])->where('id', $value)->get();
        $home_players = Player::where('team_id', $games[0]['home_team_id'])->get();
        $away_players = Player::where('team_id', $games[0]['away_team_id'])->get();
        $game_members = GameMember::where('game_id', $value)->get();
        $date = new Carbon($games[0]["datetime"]->format('Y-m-d H:i'));
        $date1 = new Carbon('now');

        return view('game_members.index', compact('games', 'home_players', 'away_players', 'game_members', 'date','date1'));
    }

    /**
     * プロフィール画像取得
     *
     * @param $member_id
     * @return Request
     */

    public function imgCode($member_id)
    {
        $img_code = Player::where('id', $member_id)->value('photo');
        return response()->json($img_code);
    }

    /**
     * ゲームメンバー追加（ホーム）
     *
     * @param Request $request
     * @return Request
     */

    public function homeMemberAdd(Request $request)
    {
        $this->validate($request, [
            'game_id' => 'required|max:11',
        ]);

        $members =['game_id'=> $request->game_id];
        $nums = range(1, 23);
        foreach ($nums as $i) {
            $members += [ 'home_' . $i => $request->input('home_' . $i)];
        }

        if (GameMember::where('game_id', $request->game_id)->exists()) {
            GameMember::where('game_id', $request->game_id)->update(
                $members
            );
        } else {
            GameMember::create(
                $members
            );
        }

        return redirect("/game_members/$request->game_id");
    }

    /**
     * ゲームメンバー追加（アウェイ）
     *
     * @param Request $request
     * @return Request
     */

    public function awayMemberAdd(Request $request)
    {
        $this->validate($request, [
            'game_id' => 'required|max:11',
        ]);

        $members =['game_id'=> $request->game_id];
        $nums = range(1, 23);
        foreach ($nums as $i) {
            $members += [ 'away_' . $i => $request->input('away_' . $i)];
        }

        if (GameMember::where('game_id', $request->game_id)->exists()) {
            GameMember::where('game_id', $request->game_id)->update(
                $members
            );
        } else {
            GameMember::create(
                $members
            );
        }

        return redirect("/game_members/$request->game_id");
    }
}
