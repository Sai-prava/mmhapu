<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentInfo;
use App\Models\FacultyCategory;
use App\Models\FacultySubcategory;
use Illuminate\Http\Request;

class FacultySubcategoryController extends Controller
{
    public function list(){
        $subcategories = FacultySubcategory::all();
        return view('admin.web.faculty.subcategory.list', compact('subcategories'));
    }
    public function add(){
        $categories = FacultyCategory::all();
        return view('admin.web.faculty.subcategory.add',compact('categories'));
    }
    public function store(Request $request){
        $request->validate([
            'faculty_id' => 'required',
            'name' => 'required',
            'phone' => 'required| max:10| min:10',
            'email' => 'required| email',
            'description' => 'required',
        ]);
        $store = new FacultySubcategory;
        $store->faculty_id = $request->faculty_id;
        $store->name = $request->name;
        $store->icon = $request->icon;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->description = $request->description;
        $store->save();
        toastr()->success('Faculty Subcategory Added Successfully');
        return redirect()->route('admin.faculty.subcategory.list');
    }
    public function edit($id){
        $edit = FacultySubcategory::find($id);
        $categories = FacultyCategory::all();
        return view('admin.web.faculty.subcategory.edit',compact('edit','categories'));
    }
    public function update(Request $request){
        $request->validate([
            'faculty_id' => 'required',
            'name' => 'required',
            'phone' => 'required| max:10| min:10',
            'email' => 'required| email',
            'description' => 'required',
        ]);
        $update = FacultySubcategory::find($request->id);
        $update->faculty_id = $request->faculty_id;
        $update->name = $request->name;
        $update->icon = $request->icon;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->description = $request->description;
        $update->save();
        toastr()->success('Faculty Subcategory Edited Successfully');
        return redirect()->route('admin.faculty.subcategory.list');
    }
    public function delete($id){
        $delete = FacultySubcategory::find($id);
        $delete->delete();
        DepartmentInfo::where('faculty_subcat_id',$id)->delete();
        toastr()->success('Deleted Successfully');
        return redirect()->back();
    }
}
