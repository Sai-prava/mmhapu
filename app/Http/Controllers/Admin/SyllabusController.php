<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Syllabus;
use App\Models\SyllabusTitle;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function index()
    {
        $all_titles = SyllabusTitle::all();
        return view('admin.web.syllabus.title.index', compact('all_titles'));
    }
    public function insert(Request $request)
    {
        $request->validate([
            'title'=>'required'
        ]);
        $insert = new SyllabusTitle();
        $insert->title = $request->title;
        $insert->save();
        toastr()->success('Syllabus Title Added Successfully.');
        return redirect()->back();
    }
    public function updateTitle(Request $request)
    {
        $updateTitle = SyllabusTitle::find($request->id);
        $updateTitle->title = $request->title;
        $updateTitle->save();
        toastr()->success('Syllabus Title Updated Successfully.');
        return redirect()->back();
    }
    public function destory($id)
    {
        $destory = SyllabusTitle::find($id);
        if ($destory) {
            $destory->delete();
            Syllabus::where('title_id', $id)->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }

    //syllabus
    public function list()
    {
        $syllabus = Syllabus::all();
        return view('admin.web.syllabus.syllabus.list', compact('syllabus'));
    }
    public function add()
    {
        $add = SyllabusTitle::all();
        return view('admin.web.syllabus.syllabus.add', compact('add'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
            'file'=>'required',
        ]);
        $store = new Syllabus();
        $store->title_id = $request->title_id;
        $store->name = $request->name;
        if ($request->hasFile('file')) {
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/syllabus'), $pdfName);
            $store->file = $pdfName;
        }
        $store->save();
        toastr()->success('New Syllabus Added Successfully');
        return redirect()->route('admin.syllabus.list');
    }
    public function edit($id)
    {
        $edit = Syllabus::find($id);
        $title = SyllabusTitle::all();
        return view('admin.web.syllabus.syllabus.edit', compact('edit', 'title'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
        ]);
        $update = Syllabus::find($request->id);
        $update->title_id = $request->title_id;
        $update->name = $request->name;
        if ($request->hasFile('file')) {
            if ($update->file && file_exists(public_path('uploads/syllabus/' . $update->file))) {
                unlink(public_path('uploads/syllabus/' . $update->file));
            }
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/syllabus'), $pdfName);
            $update->file = $pdfName;
        }
        $update->save();
        toastr()->success('Syllabus Updated Successfully');
        return redirect()->route('admin.syllabus.list');
    }
    public function delete($id){
        $delete = Syllabus::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }
}
