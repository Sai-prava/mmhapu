<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use App\Models\Monograph;
use Illuminate\Http\Request;

class MonographController extends Controller
{
    public function List(){
        $monograph = Monograph::all();
        return view('admin.web.monograph.index', compact('monograph'));
    }
    public function Store(Request $request){
        $request->validate([
            'name'=>'required',
            'file'=>'required',
        ]);
        $Store = new Monograph();
        $Store->name = $request->name;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/Monograph'), $pdfName);
            $Store->file = $pdfName;
        }
        $Store->save();
        toastr()->success('New Monograph Added Successfully');
        return redirect()->back();
    }
    public function Edit($id){
        $Edit = Monograph::find($id);
        return view('admin.web.monograph.edit', compact('Edit'));
    }
    public function Update(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $Update = Monograph::find($request->id);
        $Update->name = $request->name;
        if($request->hasFile('file')){
            if($Update->file && file_exists(public_path('uploads/Monograph/'. $Update->file))){
                unlink(public_path('uploads/Monograph/' . $Update->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/Monograph'), $pdfName);
            $Update->file = $pdfName;
        }
        $Update->save();
        toastr()->success('Monograph Updated Successfully');
        return redirect()->route('admin.monograph.list');
    }
    public function Delete($id){
        $Delete = Monograph::find($id);
        if($Delete){
            if ($Delete->file && file_exists(public_path('uploads/Monograph/' . $Delete->file))) {
                unlink(public_path('uploads/Monograph/' . $Delete->file));
            }
            $Delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //documentation
    public function documentationList(){
        $documentation = Documentation::all();
        return view('admin.web.documentation.index', compact('documentation'));
    }
    public function documentationStore(Request $request){
        $request->validate([
            'btn_text'=>'required',
            'file'=>'required'
        ]);
        $documentationStore = new Documentation();
        $documentationStore->btn_text = $request->btn_text;
        $documentationStore->color = $request->color;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/Documentation'), $pdfName);
            $documentationStore->file = $pdfName;
        }
        $documentationStore->save();
        toastr()->success('New Documentation Added Successfully');
        return redirect()->back();
    }
    public function documentationEdit($id){
        $documentationEdit = Documentation::find($id);
        return view('admin.web.documentation.edit', compact('documentationEdit'));
    }
    public function documentationUpdate(Request $request){
        $request->validate([
            'btn_text'=>'required'
        ]);
        $documentationUpdate = Documentation::find($request->id);
        $documentationUpdate->btn_text = $request->btn_text;
        $documentationUpdate->color = $request->color;
        if($request->hasFile('file')){
            if($documentationUpdate->file && file_exists(public_path('uploads/Documentation/'. $documentationUpdate->file))){
                unlink(public_path('uploads/Documentation/' . $documentationUpdate->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/Documentation'), $pdfName);
            $documentationUpdate->file = $pdfName;
        }
        $documentationUpdate->save();
        toastr()->success('Documentation Updated Successfully');
        return redirect()->route('admin.documentation.list');
    }
    public function documentationDelete($id){
        $documentationDelete = Documentation::find($id);
        if($documentationDelete){
            if ($documentationDelete->file && file_exists(public_path('uploads/Documentation/' . $documentationDelete->file))) {
                unlink(public_path('uploads/Documentation/' . $documentationDelete->file));
            }
            $documentationDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
