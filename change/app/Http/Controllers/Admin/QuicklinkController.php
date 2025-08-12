<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quicklink;
use Illuminate\Http\Request;

class QuicklinkController extends Controller
{
    public function list(){
        $quicklinks = Quicklink::all();
        return view('admin.web.quick-links.list',compact('quicklinks'));
    }
    public function add(){
        return view('admin.web.quick-links.add');
    }
    public function store(Request $request){
        request()->validate([
            'title' =>'required',
            'url' =>'required',
        ]);

        $store_quicklink =new Quicklink;
        $store_quicklink->title = $request->title;
        $store_quicklink->url = $request->url;

        $store_quicklink->save();
        toastr()->success('Quick Link Added Successfully!');
        return redirect()->route('admin.Quicklink.list');
    }
    public function edit($id){
        $edit_quicklink = Quicklink::find($id);
        return view('admin.web.quick-links.edit',compact('edit_quicklink'));
    }

    public function update(Request $request){
        request()->validate([
            'title' =>'required',
            'url' =>'required',
        ]);
        $update_quicklink = Quicklink::find($request->id);

        $update_quicklink->title = $request->title;
        $update_quicklink->url = $request->url;

        $update_quicklink->save();
        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.Quicklink.list');
    }

    public function delete($id){
        $delete_quicklink = Quicklink::find($id);
        if($delete_quicklink){
            $delete_quicklink->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->error('Something Went Wrong');
        return redirect()->back();
    }
}
