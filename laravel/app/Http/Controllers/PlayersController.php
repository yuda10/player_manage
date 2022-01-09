<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{
    public function index($team_id){
        $players= DB::table('players')->where('team_id', $team_id)->orderBy('team_id')->get();
        //$teams = DB::("SELECT * FROM teams");
        //$teams = Team::get();
        $team = Team::find($team_id);
// dd($team);
        // $db = Player::query();
        //$db->where('name', 'LIKE', '%abc%');
        // $players = $db->get();

        // var_dump($players);
        // $player=Player::find(1);
        // var_dump($player->team);

        $view = view('players',[ 'players' => $players,'team'=>$team ] );

        return $view;
    }
}
