<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActStatus;
use Illuminate\Http\Request;

class ActStatusController extends Controller
{
    public function list(){
        $actStatus = ActStatus::all();
        return view('admin.web.act-status.list', compact('actStatus'));
    }
    public function add(){
        return view('admin.web.act-status.add');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'date'=>'required',
            'file'=>'required',

        ]);
        $store =new ActStatus;
        $store->title = $request->title;
        $store->date = $request->date;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/ActStatus'),$fileName);
            $store->file = $fileName;
        }
        $store->save();
        toastr()->success('New Act & Status Added Succcessfully.');
        return redirect()->route('admin.actStatus.list');
    }
    public function edit($id){
        $edit = ActStatus::find($id);
        return view('admin.web.act-status.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'title'=>'required',
            'date'=>'required',
        ]);
        $update = ActStatus::find($request->id);
        $update->title = $request->title;
        $update->date = $request->date;
        if($request->hasFile('file')){
            if($update->file && file_exists(public_path('uploads/ActStatus/'. $update->file))){
                unlink(public_path('uploads/ActStatus/' . $update->file));
            }
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/ActStatus'), $fileName);
            $update->file = $fileName;
        }
        $update->save();
        toastr()->success('Act & Status Updated Successfully.');
        return redirect()->route('admin.actStatus.list');
    }
    public function delete($id){
        $delete = ActStatus::find($id);
        if($delete){
            if($delete->file && file_exists(public_path('uploads/ActStatus/'. $delete->file))){
                unlink(public_path('uploads/ActStatus/'. $delete->file));
            }
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
