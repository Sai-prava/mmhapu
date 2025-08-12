<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\EvaluationTitle;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index(){
        $evaluations = EvaluationTitle::all();
        return view('admin.web.iqac-evaluation.title.index', compact('evaluations'));
    }
    public function store(Request $request){
        $request->validate([
            'title'=> 'required',
        ]);
        $store = new EvaluationTitle();
        $store->title = $request->title;
        $store->save();
        toastr()->success('Evaluation Report Title Added Successfully.');
        return redirect()->back();
    }
    public function update(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $update = EvaluationTitle::find($request->id);
        $update->title = $request->title;

        $update->save();
        toastr()->success('Evaluation Report Title Updated Successfully.');
        return redirect()->back();
    }
    public function delete($id){
        $delete = EvaluationTitle::find($id);
        $delete->delete();
        Evaluation::where('title_id', $id)->delete();

        toastr()->success('Deleted Successfully.');
        return redirect()->back();
    }

    public function list(){
        $evaluation = Evaluation::all();
        return view('admin.web.iqac-evaluation.evaluation.index', compact('evaluation'));
    }
    public function add(){
        $add = EvaluationTitle::all();
        return view('admin.web.iqac-evaluation.evaluation.add', compact('add'));
    }
    public function insert(Request $request){
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
            'file'=>'required',
        ]);
        $insert = new Evaluation();
        $insert->title_id = $request->title_id;
        $insert->name = $request->name;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/evaluation'), $pdfName);
            $insert->file = $pdfName;
        }
        $insert->save();
        toastr()->success('Evaluation Report Added Successfully');
        return redirect()->route('admin.evaluation_report.list');
    }
    public function edit($id){
        $edit = Evaluation::find($id);
        $title = EvaluationTitle::all();
        return view('admin.web.iqac-evaluation.evaluation.edit', compact('edit','title'));
    }
    public function Eupdate(Request $request){
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
        ]);
        $evaluation_update = Evaluation::find($request->id);
        $evaluation_update->title_id = $request->title_id;
        $evaluation_update->name = $request->name;
        if($request->hasFile('file')){
            if($evaluation_update->file && file_exists(public_path('uploads/evaluation/'. $evaluation_update->file))){
                unlink(public_path('uploads/evaluation/' . $evaluation_update->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/evaluation'), $pdfName);
            $evaluation_update->file = $pdfName;
        }
        $evaluation_update->save();
        toastr()->success('Evaluation Report Updated');
        return redirect()->route('admin.evaluation_report.list');
    }
    public function destory($id){
        $destory = Evaluation::find($id);
        if($destory){
            $destory->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong');
        return redirect()->back();
    }
}
