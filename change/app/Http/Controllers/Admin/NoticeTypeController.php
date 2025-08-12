<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NoticetypeModel;
use Illuminate\Http\Request;

class NoticeTypeController extends Controller
{
    public function list()
    {
        $all_noticetype = NoticetypeModel::all();
        return view('admin.noticeboard.type.list', compact('all_noticetype'));
    }
    public function add()
    {
        return view('admin.noticeboard.type.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'notice_type' => 'required',
        ]);
        date_default_timezone_set('Asia/Kolkata');
        $store_noticetype = new NoticetypeModel;
        $store_noticetype->notice_type = $request->notice_type;
        $store_noticetype->save();
        toastr()->success('Noticetype Added Successfully!');
        return redirect()->route('admin.NoticeType.list');
    }
    public function edit($id)
    {
        $edit_noticetype = NoticetypeModel::find($id);
        return view('admin.noticeboard.type.edit', compact('edit_noticetype'));
    }
    public function update(Request $request)
    {
        $update_noticetype = NoticetypeModel::find($request->id);
        $update_noticetype->notice_type = $request->notice_type;
        $update_noticetype->save();
        toastr()->success('Noticetype Updated Successfully!');
        return redirect()->route('admin.NoticeType.list');
    }
    public function delete($id)
    {
        $delete_noticetype = NoticetypeModel::find($id);
        if ($delete_noticetype) {
            $delete_noticetype->delete();
            toastr()->success('Noticetype Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->error('Something Went Wrong');
        return redirect()->back();
    }
}
