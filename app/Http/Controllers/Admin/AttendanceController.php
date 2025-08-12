<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\AttendanceTitle;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function title(){
        $titles =AttendanceTitle::all();
        return view('admin.web.attendance.title.index', compact('titles'));
    }
    public function storeTitle(Request $request){
        $request->validate([
            'title'=>'required'
        ]);
        $storeTitle = new AttendanceTitle();
        $storeTitle->title = $request->title;

        $storeTitle->save();
        toastr()->success('Attendance Title Added Successfully');
        return redirect()->back();
    }
    public function updateTitle(Request $request){
        $updateTitle = AttendanceTitle::find($request->id);
        $updateTitle->title = $request->title;

        $updateTitle->save();
        toastr()->success('Attendance Title Updated Successfully');
        return redirect()->back();
    }
    public function deleteTitle($id){
        $deleteTitle = AttendanceTitle::find($id);
        if($deleteTitle){
            $deleteTitle->delete();
            Attendance::where('title_id', $id)->delete();
            toastr()->success('Deleted Succesfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong');
        return redirect()->back();
    }

    //Attendace
    public function list(){
        $attendance = Attendance::all();
        return view('admin.web.attendance.attendance.list', compact('attendance'));
    }
    public function add(){
        $add = AttendanceTitle::all();
        return view('admin.web.attendance.attendance.add', compact('add'));
    }
    public function store(Request $request){
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
            'file'=>'required'
        ]);
        $store =new Attendance;
        $store->title_id = $request->title_id;
        $store->name = $request->name;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/attendance'), $fileName);
            $store->file = $fileName;
        }
        $store->save();
        toastr()->success('Attendance Added Successfully');
        return redirect()->route('admin.attendance.list');
    }
    public function edit($id){
        $edit = Attendance::find($id);
        $titles = AttendanceTitle::all();
        return view('admin.web.attendance.attendance.edit', compact('edit','titles'));
    }
    public function update(Request $request){
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
        ]);
        $update = Attendance::find($request->id);
        $update->title_id = $request->title_id;
        $update->name = $request->name;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/attendance'), $fileName);
            $update->file = $fileName;
        }
        $update->save();
        toastr()->success('Attendance Updated Successfully');
        return redirect()->route('admin.attendance.list');
    }
    public function delete($id){
        $delete = Attendance::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }
}
