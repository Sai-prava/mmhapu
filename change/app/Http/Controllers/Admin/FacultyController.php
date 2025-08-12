<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FacultyCategory;
use App\Models\FacultySubcategory;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function list(){
        $categories = FacultyCategory::all();
        return view('admin.web.faculty.category.list',compact('categories'));
    }
    public function add(){
        return view('admin.web.faculty.category.add');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'phone' => 'required',
            'email' => 'required | email',
        ]);
        $store = new FacultyCategory;
        $store->name = $request->name;
        $store->icon = $request->icon;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->save();
        toastr()->success('Faculty Category Added Successfully');
        return redirect()->route('admin.faculty.category.list');
    }
    public function edit($id){
        $edit = FacultyCategory::find($id);
        return view('admin.web.faculty.category.edit',compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required | email',
        ]);
        $update = FacultyCategory::find($request->id);
        $update->name = $request->name;
        $update->icon = $request->icon;
        $update->phone = $request->phone;
        $update->email = $request->email;

        $update->save();
        toastr()->success('Faculty Category Edited Successfully');
        return redirect()->route('admin.faculty.category.list');
    }
    public function delete($id){
        $delete = FacultyCategory::find($id);
        $delete->delete();
        FacultySubcategory::where('faculty_id',$id)->delete();
        toastr()->success('Faculty Category Deleted Successfully!');
        return redirect()->back();
    }
    public function getSubcategory(Request $request){
        $subcategory = FacultySubcategory::where('faculty_id', $request->faculty_id)->get();
        return response()->json($subcategory);
    }
}
