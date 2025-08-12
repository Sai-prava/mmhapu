<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\DegreeCertificate;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsectionController extends Controller
{
    public function list()
    {
        $student = Student::all();
        return view('admin.web.student.list', compact('student'));
    }
    public function add()
    {
        return view('admin.web.student.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'url' => 'required',
        ]);
        $store = new Student;
        $store->icon = $request->icon;
        $store->heading = $request->heading;
        $store->url = $request->url;

        $store->save();
        toastr()->success('Student Added Successfully!');
        return redirect()->route('admin.student.list');
    }
    public function edit($id)
    {
        $edit = Student::find($id);
        return view('admin.web.student.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'url' => 'required',
        ]);
        $update = Student::find($request->id);
        $update->icon = $request->icon;
        $update->heading = $request->heading;
        $update->url = $request->url;
        $update->save();
        toastr()->success('Edited Successfully!');
        return redirect()->route('admin.student.list');
    }
    public function delete($id)
    {
        $delete = Student::find($id);
        if ($delete) {
            $delete->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->success('Something Wents Wrong !');
        return redirect()->back();
    }
    public function index(){
        $certificates = DegreeCertificate::all();
        return view('admin.web.degree-certificate.index', compact('certificates'));
    }
    public function certificateStore(Request $request){
        $request->validate([
            'degree_id' => 'required',
            'price' => 'required',
        ]);
        $store_degree = new DegreeCertificate();
        $store_degree->degree_id = $request->degree_id;
        $store_degree->price = $request->price;
        $store_degree->save();
        toastr()->success('Degree Certificate Added Successfully!');
        return redirect()->back();
    }
    public function degreeUpdate(Request $request){
        $update_degree = DegreeCertificate::find($request->id);
        $update_degree->degree = $request->degree;
        $update_degree->price = $request->price;
        $update_degree->save();
        toastr()->success('Degree Certificate Updated Successfully!');
        return redirect()->back();
    }
    public function certificateDelete($id){
        $delete_degree = DegreeCertificate::find($id);
        if ($delete_degree) {
            $delete_degree->delete();
            toastr()->success('Degree Certificate Deleted Successfully!');
            return redirect()->back();
            }
            toastr()->error('Something Wents Wrong !');
            return redirect()->back();
    }
}
