<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AntiRaging;
use Illuminate\Http\Request;

class AntiragingController extends Controller
{
    public function list(){
        $antiRaging = AntiRaging::all();
        return view('admin.web.anti-raging.list', compact('antiRaging'));
    }
    public function add(){
        return view('admin.web.anti-raging.add');
    }
    public function store(Request $request){
        $request->validate([
            'designation'=>'required',
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'resume'=>'required',
        ]);
        $store = new AntiRaging();
        $store->designation = $request->designation;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->contact = $request->contact;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/Antiraging'), $resumeName);
            $store->resume = $resumeName;
        }
        $store->save();
        toastr()->success('New Anti-Raging Added Successfully.');
        return redirect()->route('admin.antiRaging.list');
    }
    public function edit($id){
        $edit = AntiRaging::find($id);
        return view('admin.web.anti-raging.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'designation'=>'required',
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required'
        ]);
        $update = AntiRaging::find($request->id);
        $update->designation = $request->designation;
        $update->name = $request->name;
        $update->email = $request->email;
        $update->contact = $request->contact;
        if($request->hasFile('resume')){
            if($update->resume && file_exists(public_path('uploads/Antiraging/'. $update->resume))){
                unlink(public_path('uploads/Antiraging/'.  $update->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/Antiraging'), $resumeName);
            $update->resume = $resumeName;
        }
        $update->save();
        toastr()->success('Anti-Raging Updated Successfully');
        return redirect()->route('admin.antiRaging.list');
    }
    public function delete($id){
        $delete = AntiRaging::find($id);
        if($delete){
            if($delete->resume && file_exists(public_path('uploads/Antiraging/'.$delete->resume))){
                unlink(public_path('uploads/Antiraging/'. $delete->resume));
            }
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
