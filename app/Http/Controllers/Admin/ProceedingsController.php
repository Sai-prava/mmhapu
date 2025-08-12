<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proceeding;
use Illuminate\Http\Request;

class ProceedingsController extends Controller
{
    public function list()
    {
        $proceedings = Proceeding::all();
        return view('admin.web.proceeding.list', compact('proceedings'));
    }
    public function add()
    {
        return view('admin.web.proceeding.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'file'=>'required',
        ]);
        $store = new Proceeding();
        $store->title = $request->title;
        if ($request->hasFile('file')) {
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/proceedings'), $pdfName);
            $store->file = $pdfName;
        }
        $store->save();
        toastr()->success('New Proceedings Adeed Successfully.');
        return redirect()->route('admin.proceedings.list');
    }
    public function edit($id)
    {
        $edit = Proceeding::find($id);
        return view('admin.web.proceeding.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'title'=>'required'
        ]);
        $update = Proceeding::find($request->id);
        $update->title = $request->title;
        if ($request->hasFile('file')) {
            if ($update->file && file_exists(public_path('uploads/proceedings/' . $update->file))) {
                unlink(public_path('uploads/proceedings/' . $update->file));
            }
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/proceedings'), $pdfName);
            $update->file = $pdfName;
        }
        $update->save();
        toastr()->success('Proceeding Updated Successfully.');
        return redirect()->route('admin.proceedings.list');
    }
    public function delete($id)
    {
        $delete = Proceeding::find($id);
        if ($delete) {
            if ($delete->file && file_exists(public_path('uploads/proceedings/' . $delete->file))) {
                unlink(public_path('uploads/proceedings/' . $delete->file));
            }
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }
}
