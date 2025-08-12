<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\notice;
use App\Models\NoticetypeModel;
use Illuminate\Http\Request;

class noticeController extends Controller
{
    public function list()
    {
        $all_notice = notice::orderBy('id', 'desc')->get();
        return view('admin.noticeboard.notice.list', compact('all_notice'));
    }
    public function add()
    {
        $add_notice = NoticetypeModel::all();
        return view('admin.noticeboard.notice.add', compact('add_notice'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'notice_type' => 'required',
        ]);
        date_default_timezone_set('Asia/Kolkata');
        $store_notice = new notice;
        $store_notice->title = $request->title;
        $store_notice->description = $request->description;
        $store_notice->type = $request->type;
        $store_notice->url = $request->url;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('file'), $fileName);
            $store_notice->file = $fileName;
        }
        $store_notice->notice_type = $request->notice_type;

        $store_notice->save();
        toastr()->success('Notice Added Successfully!');
        return redirect()->route('admin.Notice.list');
    }
    public function edit($id)
    {
        $edit_notice = Notice::find($id);
        $all_notice = NoticetypeModel::all();
        return view('admin.noticeboard.notice.edit', compact('edit_notice', 'all_notice'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'notice_type' => 'required',
            'type' => 'required'
        ]);
        $update_notice = notice::find($request->id);
        $update_notice->title = $request->title;
        $update_notice->description = $request->description;
        $update_notice->type = $request->type;
        $update_notice->url = $request->url;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('file'), $fileName);
            $update_notice->file = $fileName;
        }
        $update_notice->notice_type = $request->notice_type;

        $update_notice->save();
        toastr()->success('Notice Updated Successfully!');
        return redirect()->route('admin.Notice.list');
    }
    public function delete($id)
    {
        $delete_notice = notice::find($id);
        if ($delete_notice) {
            $delete_notice->delete();
            toastr()->success('Notice Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->success('Something Went Wrong');
        return redirect()->back();
    }
}
