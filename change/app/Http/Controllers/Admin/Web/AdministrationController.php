<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Administration;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function list()
    {
        $administration = Administration::all();
        return view('admin.web.administration.list', compact('administration'));
    }
    public function add()
    {
        return view('admin.web.administration.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'heading'=>'required',
            'url'=>'required',
        ]);
        $store = new Administration;
        $store->icon = $request->icon;
        $store->heading = $request->heading;
        $store->url = $request->url;

        $store->save();
        toastr()->success('Aministration Added Successfully!');
        return redirect()->route('admin.administration.list');
    }
    public function edit($id)
    {
        $edit = Administration::find($id);
        return view('admin.web.administration.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'heading'=>'required',
            'url'=>'required',
        ]);
        $update = Administration::find($request->id);
        $update->icon = $request->icon;
        $update->heading = $request->heading;
        $update->url = $request->url;
        $update->save();
        toastr()->success('Edited Successfully!');
        return redirect()->route('admin.administration.list');
    }
    public function delete($id){
        $delete = Administration::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->success('Something Wents Wrong !');
            return redirect()->back();
    }
}
