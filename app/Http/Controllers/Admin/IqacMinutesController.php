<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Minute;
use Illuminate\Http\Request;

class IqacMinutesController extends Controller
{
    public function list(){
        $minutes = Minute::all();
        return view('admin.web.iqac-minutes.list', compact('minutes'));
    }
    public function add(){
        return view('admin.web.iqac-minutes.add');
    }
    public function store(Request $request){
        $request->validate([
            'iqac_minute'=>'required',
            'document'=>'required',
        ]);
        $store = new Minute;
        $store->iqac_minute = $request->iqac_minute;
        if($request->hasFile('document')){
            $document = $request->file('document');
            $ducumentName = time() . '_' . $document->getClientOriginalName();
            $document->move(public_path('uploads/minutes'), $ducumentName);
            $store->document = $ducumentName;
        }
        $store->save();
        toastr()->success('New IQAC Minutes Added Successfully');
        return redirect()->route('admin.minutes.list');
    }
    public function edit($id){
        $edit = Minute::find($id);
        return view('admin.web.iqac-minutes.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'iqac_minute'=>'required',
        ]);
        $update = Minute::find($request->id);
        $update->iqac_minute = $request->iqac_minute;
        if($request->hasFile('document')){
            $document = $request->file('document');
            $ducumentName = time() . '_' . $document->getClientOriginalName();
            $document->move(public_path('uploads/minutes'), $ducumentName);
            $update->document = $ducumentName;
        }
        $update->save();
        toastr()->success('IQAC Minutes Updated Successfully');
        return redirect()->route('admin.minutes.list');
    }
    public function delete($id){
        $delete = Minute::find($id);
        if ($delete) {
            $documentPath = public_path('uploads/minutes/' . $delete->document);
            if ($delete->document && file_exists($documentPath)) {
                unlink($documentPath);
            }
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Deleted Successfully');
        return redirect()->back();
    }
}
