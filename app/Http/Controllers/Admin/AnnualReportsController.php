<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnnualReport;
use Illuminate\Http\Request;

class AnnualReportsController extends Controller
{
    public function list(){
        $reports = AnnualReport::all();
        return view('admin.web.reports.index', compact('reports'));
    }
    public function store(Request $request){
        $request->validate([
            'type'=>'required',
            'name'=>'required',
            'file'=>'required',
        ]);
        $store =new AnnualReport;
        $store->type = $request->type;
        $store->name = $request->name;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/reports'), $pdfName);
            $store->file = $pdfName;
        }
        $store->save();
        toastr()->success('New Annual Reports Added Successfully');
        return redirect()->back();
    }
    public function edit($id){
        $edit = AnnualReport::find($id);
        return view('admin.web.reports.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'type'=>'required',
            'name'=>'required'
        ]);
        $update = AnnualReport::find($request->id);
        $update->type = $request->type;
        $update->name = $request->name;
        if($request->hasFile('file')){
            if($update->file && file_exists(public_path('uploads/reports/'. $update->file))){
                unlink(public_path('uploads/reports/' . $update->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/reports'), $pdfName);
            $update->file = $pdfName;
        }
        $update->save();
        toastr()->success('Annual Report Updated Successfully');
        return redirect()->route('admin.reports.list');
    }
    public function delete($id){
        $delete = AnnualReport::find($id);
        if($delete){
            if ($delete->file && file_exists(public_path('uploads/reports/' . $delete->file))) {
                unlink(public_path('uploads/reports/' . $delete->file));
            }
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
