<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gyangrah;
use App\Models\Harmony;
use Illuminate\Http\Request;

class AnnualMagazineController extends Controller
{
    public function gyangrahList(){
        $gyangrah = Gyangrah::all();
        return view('admin.web.gyangrah.index', compact('gyangrah'));
    }
    public function gyangrahStore(Request $request){
        $request->validate([
            'name'=>'required',
            'file'=>'required',
        ]);
        $gyangrahStore = new Gyangrah();
        $gyangrahStore->name = $request->name;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/gyangrah'), $pdfName);
            $gyangrahStore->file = $pdfName;
        }
        $gyangrahStore->save();
        toastr()->success('New Gyangrah Added Successfully');
        return redirect()->back();
    }
    public function gyangrahEdit($id){
        $edit = Gyangrah::find($id);
        return view('admin.web.gyangrah.edit', compact('edit'));
    }
    public function gyangrahUpdate(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $gyangrahUpdate = Gyangrah::find($request->id);
        $gyangrahUpdate->name = $request->name;
        if($request->hasFile('file')){
            if($gyangrahUpdate->file && file_exists(public_path('uploads/gyangrah/'. $gyangrahUpdate->file))){
                unlink(public_path('uploads/gyangrah/' . $gyangrahUpdate->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/gyangrah'), $pdfName);
            $gyangrahUpdate->file = $pdfName;
        }
        $gyangrahUpdate->save();
        toastr()->success('Gyangrah Updated Successfully');
        return redirect()->route('admin.gyangrah.list');
    }
    public function gyangrahDelete($id){
        $gyangrahDelete = Gyangrah::find($id);
        if($gyangrahDelete){
            if ($gyangrahDelete->file && file_exists(public_path('uploads/gyangrah/' . $gyangrahDelete->file))) {
                unlink(public_path('uploads/gyangrah/' . $gyangrahDelete->file));
            }
            $gyangrahDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //Harmony
    public function harmonyList(){
        $harmony = Harmony::all();
        return view('admin.web.harmony.index', compact('harmony'));
    }
    public function harmonyStore(Request $request){
        $request->validate([
            'name'=>'required',
            'file'=>'required'
        ]);
        $harmonyStore = new Harmony();
        $harmonyStore->name = $request->name;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/harmony'), $pdfName);
            $harmonyStore->file = $pdfName;
        }
        $harmonyStore->save();
        toastr()->success('New Harmony Added Successfully');
        return redirect()->back();
    }
    public function harmonyEdit($id){
        $harmonyEdit = Harmony::find($id);
        return view('admin.web.harmony.edit', compact('harmonyEdit'));
    }
    public function harmonyUpdate(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $harmonyUpdate = Harmony::find($request->id);
        $harmonyUpdate->name = $request->name;
        if($request->hasFile('file')){
            if($harmonyUpdate->file && file_exists(public_path('uploads/harmony/'. $harmonyUpdate->file))){
                unlink(public_path('uploads/harmony/' . $harmonyUpdate->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/harmony'), $pdfName);
            $harmonyUpdate->file = $pdfName;
        }
        $harmonyUpdate->save();
        toastr()->success('Harmony Updated Successfully');
        return redirect()->route('admin.harmony.list');
    }
    public function harmonyDelete($id){
        $harmonyDelete = Harmony::find($id);
        if($harmonyDelete){
            if ($harmonyDelete->file && file_exists(public_path('uploads/harmony/' . $harmonyDelete->file))) {
                unlink(public_path('uploads/harmony/' . $harmonyDelete->file));
            }
            $harmonyDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
