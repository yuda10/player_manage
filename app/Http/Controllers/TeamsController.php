<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;

use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{

    public function index(){
        
        $teams1 = Team::where('league', '九州Aリーグ')->get();
        $teams2 = Team::where('league', '九州Bリーグ')->get();
        $teams3 = Team::where('league', '福岡Aリーグ')->get();
        $teams4 = Team::where('league', '福岡Bリーグ')->get();
        
         
        $view = view('teams',[ 'teams1' => $teams1, 'teams2' => $teams2,'teams3' => $teams3,'teams4' => $teams4,]);
        
        return $view;
    }

    public function create(){
        
        return view('teamcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $team=new Team;
        
        // $team->id=$request->input('id');
        $team->name=$request->input('name');
        $team->league=$request->input('league');
        $team->manager_name=$request->input('manager_name');
        $team->manager_phone=$request->input('manager_phone');
        $team->manager_email=$request->input('manager_email');

        $team->save();
        // return view('teams');
        return redirect('teams/');
    }
}
