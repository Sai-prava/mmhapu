<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topbar;
use Illuminate\Http\Request;

class TopbarController extends Controller
{
    public function list(){
        $topbars = Topbar::all();
        return view('admin.web.top-bar.list',compact('topbars'));
    }
    public function add(){
        return view('admin.web.top-bar.add');
    }
    public function store(Request $request){
        request()->validate([
            'title' =>'required',
            'url' =>'required',
        ]);

        $store_topbar =new Topbar;
        $store_topbar->title = $request->title;
        $store_topbar->url = $request->url;

        $store_topbar->save();
        toastr()->success('Topbar Added Successfully!');
        return redirect()->route('admin.Topbar.list');
    }
    public function edit($id){
        $edit_topbar = Topbar::find($id);
        return view('admin.web.top-bar.edit',compact('edit_topbar'));
    }

    public function update(Request $request){
        request()->validate([
            'title' =>'required',
            'url' =>'required',
        ]);
        $update_topbar = Topbar::find($request->id);

        $update_topbar->title = $request->title;
        $update_topbar->url = $request->url;

        $update_topbar->save();
        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.Topbar.list');
    }

    public function delete($id){
        $delete_topbar = Topbar::find($id);
        if($delete_topbar){
            $delete_topbar->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->error('Something Went Wrong');
        return redirect()->back();
    }
}
