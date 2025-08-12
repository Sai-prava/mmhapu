<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grievance;
use App\Models\StudentGrievance;
use Illuminate\Http\Request;

class StudentGrievanceController extends Controller
{
    public function list(){
        $StudentGrievance = StudentGrievance::all();
        return view('admin.web.student-grievance.list', compact('StudentGrievance'));
    }
    public function add(){
        return view('admin.web.student-grievance.add');
    }
    public function store(Request $request){
        $request->validate([
            'designation' =>'required',
            'name' =>'required',
            'email' => 'required|email|unique:student_grievance,email',
            'contact' => 'required|string|unique:student_grievance,contact',
        ]);
        $store = new StudentGrievance();
        $store->designation = $request->designation;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->contact = $request->contact;

        $store->save();
        toastr()->success('New StudentGrievance Added Successfully');
        return redirect()->route('admin.studentGrievance.list');
    }
    public function edit($id){
        $edit = StudentGrievance::find($id);
        return view('admin.web.student-grievance.edit', compact('edit'));
    }
    public function update(Request $request){
        $update = StudentGrievance::find($request->id);

        $request->validate([
            'designation' =>'required',
            'name' =>'required',
            'email' => 'required|email|unique:student_grievance,email,'. $update->id,
            'contact' => 'required|string|unique:student_grievance,contact,'. $update->id,
        ]);

        $update->designation = $request->designation;
        $update->name = $request->name;
        $update->email = $request->email;
        $update->contact = $request->contact;

        $update->save();
        toastr()->success('StudentGrievance Updated Successfully');
        return redirect()->route('admin.studentGrievance.list');
    }
    public function delete($id){
        $delete = StudentGrievance::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong');
        return redirect()->back();
    }

    public function grievances(){
        $allData = Grievance::orderBy('id', 'desc')->get();
        return view('admin.web.student-grievance.form-list', compact('allData'));
    }
    public function viewGrievances($id){
        $viewGrievances = Grievance::find($id);
        return view('admin.web.student-grievance.form-view', compact('viewGrievances'));
    }
}
