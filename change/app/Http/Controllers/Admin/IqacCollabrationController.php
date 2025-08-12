<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collabration;
use Illuminate\Http\Request;

class IqacCollabrationController extends Controller
{
    public function list(){
        $collabrations = Collabration::all();
        return view('admin.web.collabration.list', compact('collabrations'));
    }
    public function add(){
        return view('admin.web.collabration.add');
    }
    public function store(Request $request){
        $request->validate([
            'intitution'=>'required',
            'description'=>'required',
            'document'=>'required',
        ]);
        $store = new Collabration();
        $store->intitution = $request->intitution;
        $store->description = $request->description;
        if($request->hasFile('document')){
            $document = $request->file('document');
            $documentName = time() . '_' . $document->getClientOriginalName();
            $document->move(public_path('uploads/collabration'), $documentName);
            $store->document = $documentName;
        }
        $store->save();
        toastr()->success('New Collabration Added Successfully.');
        return redirect()->route('admin.Collabration.list');
    }
    public function edit($id){
        $edit = Collabration::find($id);
        return view('admin.web.collabration.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'intitution'=>'required',
            'description'=>'required',
        ]);
        $update = Collabration::find($request->id);
        $update->intitution = $request->intitution;
        $update->description = $request->description;
        if($request->hasFile('document')){
            if ($update->document && file_exists(public_path('uploads/collabration/' . $update->document))) {
                unlink(public_path('uploads/collabration/' . $update->document));
            }

            $document = $request->file('document');
            $documentName = time() . '_' . $document->getClientOriginalName();
            $document->move(public_path('uploads/collabration'), $documentName);

            $update->document = $documentName;
        }
        $update->save();
        toastr()->success('Collabration Updated Successfully');
        return redirect()->route('admin.Collabration.list');
    }
    public function delete($id){
        $delete = Collabration::find($id);
        if($delete){
            if($delete->document && file_exists(public_path('uploads/collabration/' . $delete->document))){
                unlink(public_path('uploads/collabration/' . $delete->document));
            }
            $delete->delete();
            toastr()->success('Collabration Deleted Successfully.');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }
}
