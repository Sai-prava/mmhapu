<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Committee;
use Illuminate\Http\Request;

class IqacCommitteesController extends Controller
{
    public function list(){
        $committees = Committee::all();
        return view('admin.web.committees.list', compact('committees'));
    }
    public function add(){
        return view('admin.web.committees.add');
    }
    public function store(Request $request){
        $request->validate([
            'name_address'=>'required',
            'designation'=>'required',
        ]);
        $store = new Committee;
        $store->name_address = $request->name_address;
        $store->designation = $request->designation;

        $store->save();
        toastr()->success('New Committees Added Successfully');
        return redirect()->route('admin.committees.list');
    }
    public function edit($id){
        $edit = Committee::find($id);
        return view('admin.web.committees.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'name_address'=>'required',
            'designation'=>'required',
        ]);
        $update = Committee::find($request->id);
        $update->name_address = $request->name_address;
        $update->designation = $request->designation;

        $update->save();
        toastr()->success('Committees Updated Successfully');
        return redirect()->route('admin.committees.list');
    }
    public function delete($id){
        $delete = Committee::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong');
        return redirect()->back();
    }
}
