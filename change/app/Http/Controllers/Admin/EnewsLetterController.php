<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnewsLetter;
use Illuminate\Http\Request;

class EnewsLetterController extends Controller
{
    public function list(){
        $newsletter = EnewsLetter::all();
        return view('admin.web.e-newsletter.index', compact('newsletter'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'file'=>'required',
        ]);
        $store = new EnewsLetter();
        $store->name = $request->name;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/enews-letter'), $pdfName);
            $store->file = $pdfName;
        }
        $store->save();
        toastr()->success('New E-News Letter Added Successfully.');
        return redirect()->back();
    }
    public function edit($id){
        $edit = EnewsLetter::find($id);
        return view('admin.web.e-newsletter.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $update = EnewsLetter::find($request->id);
        $update->name = $request->name;
        if($request->hasFile('file')){
            if($update->file && file_exists(public_path('uploads/enews-letter/'. $update->file))){
                unlink(public_path('uploads/enews-letter/' . $update->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/enews-letter'), $pdfName);
            $update->file = $pdfName;
        }
        $update->save();
        toastr()->success('E-News Letter Updated Successfully');
        return redirect()->route('admin.enews_letter.list');
    }
    public function delete($id){
        $delete = EnewsLetter::find($id);
        if($delete){
            if($delete->file && file_exists(public_path('uploads/enews-letter/'. $delete->file))){
                unlink(public_path('uploads/enews-letter/'. $delete->file));
            }
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
