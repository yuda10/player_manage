<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * お知らせ一覧取得
     *
     * @param Request $request
     * @return Request
     */
    
    public function notificationList(Request $request)
    {
        $notifications = Notification::whereNotNull('body')->orderBy('modified_date', 'asc')->get();

        return view('home.index', compact('notifications'));

    }
}
