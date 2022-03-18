<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;

use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{

    public function index(){
        
        $teams1 = Team::where('league', '九州A')->get();
        $teams2 = Team::where('league', '九州B')->get();
        $teams3 = Team::where('league', '福岡県A')->get();
        $teams4 = Team::where('league', '福岡県B')->get();
        
        $view = view('teams.index',[ 'teams1' => $teams1, 'teams2' => $teams2,'teams3' => $teams3,'teams4' => $teams4,]);
        
        return $view;
    }

    public function create(){
        
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Request
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:11',
            'league' => 'required|max:11',
            'manager_name' => 'required|max:11',
            'manager_phone' => 'required|max:32',
            'manager_email' => 'required|max:255'
        ]);

        Team::create([
            'name'=> $request->name,
            'league'=> $request->league,
            'manager_name'=> $request->manager_name,
            'manager_phone'=> $request->manager_phone,
            'manager_email'=> $request->manager_email,
        ]);
        
        return redirect('/teams');
    }
}
