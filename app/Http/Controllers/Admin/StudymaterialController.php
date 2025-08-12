<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudyMaterial;
use App\Models\Team;
use Illuminate\Http\Request;

class StudymaterialController extends Controller
{
    public function list(){
        $study_material = StudyMaterial::all();
        return view('admin.web.study-material.list', compact('study_material'));
    }
    public function add(){
        $add = Team::all();
        return view('admin.web.study-material.add', compact('add'));
    }
    public function insert(Request $request){
        $request->validate([
            'team_id' => 'required',
            'list' => 'required',
            'pdf' => 'required',
        ]);
        $insert = new StudyMaterial();
        $insert->team_id = $request->team_id;
        $insert->list = $request->list;
        if($request->hasFile('pdf')){
            $pdf = $request->file('pdf');
            $pdfName = $pdf->getClientOriginalName();
            $pdf->move(public_path('Team'), $pdfName);
            $insert->pdf = $pdfName;
        }
        $insert->save();
        toastr()->success('New Study Material Added Successfully');
        return redirect()->route('admin.studyMaterial.list');
    }
    public function edit($id){
        $edit = StudyMaterial::find($id);
        $team = Team::all();
        return view('admin.web.study-material.edit', compact('edit','team'));
    }
    public function update(Request $request){
        $request->validate([
            'team_id' => 'required',
            'list' => 'required',
        ]);
        $update = StudyMaterial::find($request->id);
        $update->team_id = $request->team_id;
        $update->list = $request->list;
        if($request->hasFile('pdf')){
            if($update->pdf && file_exists(public_path('Team/'. $update->pdf))){
                unlink(public_path('Team/'. $update->pdf));
            }
            $pdf = $request->file('pdf');
            $pdfName = $pdf->getClientOriginalName();
            $pdf->move(public_path('Team'), $pdfName);
            $update->pdf = $pdfName;
        }
        $update->save();
        toastr()->success('Updated Successfully');
        return redirect()->route('admin.studyMaterial.list');
    }
    public function delete($id){
        $delete = StudyMaterial::find($id);
        if($delete){
            if($delete->pdf && file_exists(public_path('Team/'. $delete->pdf))){
                unlink(public_path('Team/' . $delete->pdf));
            }
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong');
        return redirect()->back();
    }
}
