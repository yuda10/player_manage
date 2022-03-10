<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Team;
use App\Models\Notification;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * ユーザー情報一覧取得
     *
     * @param Request $request
     * @return Request
     */
    
    public function userList(Request $request)
    {
        $users = User::with('userTeam')->orderBy('id', 'desc')->get();
        $teams = Team::select('id', 'name')->get();
        $notifications = Notification::get();

        return view('users.index', compact('users', 'teams', 'notifications'));
    }

    /**
     * ユーザー情報変更
     *
     * @param Request $request
     * @return Request
     */

    public function userEdit(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|max:10',
            'name' => 'required|max:128',
            'email' => 'required|max:255',
            'admin_grade' => 'required',
        ]);

        User::where('id', $request['id'])->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'team_id'=> $request->team_id,
            'admin_grade'=> $request->admin_grade,
        ]);

        return redirect("/system_admin");
    }

    /**
     * お知らせ変更
     *
     * @param Request $request
     * @return Request
     */

    public function notificationEdit(Request $request)
    {
        $notice = [
            ['id' => 1, 'modified_date' => $request -> modified_date_1, 'body' => $request -> body_1],
            ['id' => 2, 'modified_date' => $request -> modified_date_2, 'body' => $request -> body_2],
            ['id' => 3, 'modified_date' => $request -> modified_date_3, 'body' => $request -> body_3],
            ['id' => 4, 'modified_date' => $request -> modified_date_4, 'body' => $request -> body_4],
            ['id' => 5, 'modified_date' => $request -> modified_date_5, 'body' => $request -> body_5],
        ];
        
        Notification::upsert($notice, ['id']);

        return redirect("/system_admin");
    }
}
