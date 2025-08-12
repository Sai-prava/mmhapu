<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentInfo;
use App\Models\FacultySubcategory;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class DepartmentinfoController extends Controller
{
    public function list()
    {
        $info = DepartmentInfo::all();
        return view('admin.department-info.list', compact('info'));
    }
    public function add()
    {
        $subcategories = FacultySubcategory::all();
        return view('admin.department-info.add', compact('subcategories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'faculty_subcat_id' => 'required|unique:department_info,faculty_subcat_id',
            'head' => 'required',
            'address' => 'required',
            'phone' => 'required| max:10| min:10',
            'email' => 'required| email',
            'website' => 'required',
        ], [
            'faculty_subcat_id.unique' => 'The selected faculty subcategory is already in use. Please choose a different one.',
        ]);

        $store = new DepartmentInfo();
        $store->faculty_subcat_id = $request->faculty_subcat_id;
        $store->head = $request->head;
        $store->address = $request->address;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->website = $request->website;
        $store->save();
        toastr()->success('Department Info added Successfully');
        return redirect()->route('admin.Info.list');
    }
    public function edit($id)
    {
        $subcategories = FacultySubcategory::all();
        $edit = DepartmentInfo::find($id);
        return view('admin.department-info.edit', compact('edit', 'subcategories'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'faculty_subcat_id' => [
                'required',
                Rule::unique('department_info', 'faculty_subcat_id')->ignore($request->id),
            ],
            'head' => 'required',
            'address' => 'required',
            'phone' => 'required|max:10|min:10',
            'email' => 'required|email',
            'website' => 'required',
        ], [
            'faculty_subcat_id.unique' => 'The selected faculty subcategory is already in use. Please choose a different one.',
        ]);

        $update = DepartmentInfo::find($request->id);
        $update->faculty_subcat_id = $request->faculty_subcat_id;
        $update->head = $request->head;
        $update->address = $request->address;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->website = $request->website;

        $update->save();
        toastr()->success('Department Info updated Successfully');
        return redirect()->route('admin.Info.list');
    }
    public function delete($id)
    {
        $delete = DepartmentInfo::find($id);
        $delete->delete();
        toastr()->success('Deleted Successfully');
        return redirect()->back();
    }
}
