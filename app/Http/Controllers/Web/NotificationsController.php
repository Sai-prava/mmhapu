<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\notice;
use App\Models\Web\WebEvent;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function notifications(){
        $notifications = notice::where('notice_type','=','Office Orders Notice')->orderBy('id','desc')->get();
        return view('web.notifications', compact('notifications'));
    }
    public function latest(){
        $notices = notice::orderBy('id','desc')->get();
        return view('web.lastest-notice', compact('notices'));
    }
    public function events(){
        $events = WebEvent::where('status','1')->get();
        return view('web.events', compact('events'));
    }
}
