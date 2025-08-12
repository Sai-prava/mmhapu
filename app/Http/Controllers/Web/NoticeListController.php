<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notice;

class NoticeListController extends Controller
{
    public function noticeList($type){
        $title = "Notice List";
        $notice = notice::where('notice_type',$type)->orderBy('id','desc')->get();
        return view('web.noticelist',compact('title','notice','type'));
    }
    public function viewNotice($id){
        $title = "Notice List";
        $view_notice = notice::find($id);
        return view('web.notice-single',compact('title','view_notice'));
    }
}
