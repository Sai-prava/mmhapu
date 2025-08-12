<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calender;
use Illuminate\Http\Request;

class AdminCalenderController extends Controller
{
    public function calender(){
        $calenders = Calender::all();
        return view('admin.web.calender.index', compact('calenders'));
    }
    public function add(){
        return view('admin.web.calender.add');
    }
    public function store(Request $request){
        $request->validate([
            'year' => 'required|numeric|unique:calenders,year',
            'calender' => 'required'
        ]);
        $store = new Calender();
        $store->year = $request->year;
        if($request->hasFile('calender')){
            $file = $request->file('calender');
            $filename = time().'.'.$file->getClientOriginalName();
            $file->move(public_path('uploads/calender'), $filename);
            $store->calender = $filename;
        }
        $store->save();
        toastr()->success('New Calender added successfully');
        return redirect()->route('admin.calender.index');
    }
    public function edit($id){
        $edit = Calender::find($id);
        return view('admin.web.calender.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'year' => 'required|numeric|unique:calenders,year,'.$request->id,
        ]);
        $update = Calender::find($request->id);
        $update->year = $request->year;
        if($request->hasFile('calender')){
            if ($update->calender && file_exists(public_path('uploads/calender/' . $update->calender))) {
                unlink(public_path('uploads/calender/' . $update->calender));
            }
            $file = $request->file('calender');
            $filename = time().'.'.$file->getClientOriginalName();
            $file->move(public_path('uploads/calender'), $filename);
            $update->calender = $filename;
        }
        $update->save();
        toastr()->success('Calender updated successfully');
        return redirect()->route('admin.calender.index');
    }
    public function delete($id){
        $delete = Calender::find($id);
        if ($delete->calender && file_exists(public_path('uploads/calender/' . $delete->calender))){
                unlink(public_path('uploads/calender/' . $delete->calender));
            }
        $delete->delete();
        toastr()->success('Calender deleted successfully');
        return redirect()->route('admin.calender.index');
    }
}
