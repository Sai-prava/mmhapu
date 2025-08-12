<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Campus;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function list()
    {
        $campus = Campus::all();
        return view('admin.web.campus.list', compact('campus'));
    }
    public function add()
    {
        return view('admin.web.campus.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'heading'=>'required',
            'url'=>'required',
        ]);
        $store = new Campus;
        $store->icon = $request->icon;
        $store->heading = $request->heading;
        $store->url = $request->url;

        $store->save();
        toastr()->success('Campus Added Successfully!');
        return redirect()->route('admin.campus.list');
    }
    public function edit($id)
    {
        $edit = Campus::find($id);
        return view('admin.web.campus.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'heading'=>'required',
            'url'=>'required',
        ]);
        $update = Campus::find($request->id);
        $update->icon = $request->icon;
        $update->heading = $request->heading;
        $update->url = $request->url;
        $update->save();
        toastr()->success('Edited Successfully!');
        return redirect()->route('admin.campus.list');
    }
    public function delete($id){
        $delete = Campus::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->success('Something Wents Wrong !');
            return redirect()->back();
    }
}
