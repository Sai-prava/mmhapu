<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Quicklink;
use App\Models\QuicklinkTitle;
use Illuminate\Http\Request;

class QuicklinktitleController extends Controller
{
    public function list(){
        $manus = Menu::whereNull('menu_id')->whereNull('submenu_id')->orderBy('display_order')->get();
        $title = QuicklinkTitle::all();
        return view('admin.web.quick-link-title.list',compact('title','manus'));
    }
    public function store(Request $request){
        $store =new QuicklinkTitle;
        $store->title = $request->title;

        $store->save();
        toastr()->success('Title Added Successfully.');
        return redirect()->back();
    }
    public function edit($id){
        $edit = QuicklinkTitle::find($id);
        return view('admin.web.quick-link-title.edit',compact('edit'));
    }
    public function update(Request $request){
        $update = QuicklinkTitle::find($request->id);
        $update->title = $request->title;

        $update->save();
        toastr()->success('Updated Successfully Done.');
        return redirect()->route('admin.qtitle.list');
    }
    public function delete($id){
        $delete = QuicklinkTitle::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
