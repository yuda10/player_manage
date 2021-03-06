<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;
use Intervention\Image\Facades\Image;

class CreateController extends Controller
{
    public function index(Request $request){
        $team_id=null;
        $team_name=null;
        if(!empty($request->session()->get('team_id'))){
            $team_id=$request->session()->get('team_id');
            $team_name=Team::find($team_id)->name;
            
        }
        
        // dd($team_id);

        return view('players.create', compact('team_id','team_name'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player=new Player;
        
        $player->team_id=$request->input('team_id');
        $player->position=$request->input('position');
        $player->name=$request->input('name');
        $player->birthday=$request->input('birthday');
        $player->phone=$request->input('phone');
        $player->email=$request->input('email');

        $player->save();
        $player->refresh();

        $profileImage = $request->file('example');
        // dd($profileImage);
        if ($profileImage != null) {
            $image_path = $this->saveProfileImage($profileImage, $player->id); // return file name
            $player->photo=$image_path;

            $player->save();
        }
            //  dd($image_path);

        //一覧表示画面にリダイレクト
        return redirect('players/'.$request->input('team_id'));
    }
    
    private function saveProfileImage($image, $id) {
        // get instance
        $img = \Image::make($image);
        // resize
        // $img->fit(100, 100, function($constraint){
        //     $constraint->upsize(); 
        // });
        // save
        $file_name = 'profile_'.$id.'.'.$image->getClientOriginalExtension();
        $save_path = 'public/profiles/'.$file_name;
        \Storage::put($save_path, (string) $img->encode());
        // return file name
        return $file_name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player=Player::find($id);
        // dd($player);
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $player=Player::find($id);
        // dd($id);
        $player->team_id=$request->team_id;
        $player->position=$request->position;
        $player->name=$request->name;
        $player->birthday=$request->birthday;
        $player->phone=$request->phone;
        // $player->photo=$request->photo;
        $player->email=$request->email;

        //DBに保存
        $player->save();
        // dd($request);
     
        $profileImage = $request->file('example');

        if ($profileImage != null) {
            $image_path = $this->saveProfileImage($profileImage, $player->id); // return file name
            $player->photo=$image_path;

            $player->save();
        }

        
        if(!$request->img_name){
            $player=Player::find($id);
        $player->photo=null;
        $player->save();
        }


        //処理が終わったらmember/indexにリダイレクト
        return redirect('players/'.$player->team_id);
    }

}

