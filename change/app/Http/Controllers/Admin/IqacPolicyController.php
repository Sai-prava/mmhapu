<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class IqacPolicyController extends Controller
{
    public function list(){
        $policies = Policy::all();
        return view('admin.web.Policies.list', compact('policies'));
    }
    public function add(){
        return view('admin.web.Policies.add');
    }
    public function store(Request $request){
        $request->validate([
            'policy'=>'required',
            'document'=>'required'
        ]);
        $store = new Policy();
        $store->policy = $request->policy;
        if($request->hasFile('document')){
            $document = $request->file('document');
            $ducumentName = time() . '_' . $document->getClientOriginalName();
            $document->move(public_path('uploads/policy'), $ducumentName);
            $store->document = $ducumentName;
        }
        $store->save();
        toastr()->success('New Policy Added Successfully');
        return redirect()->route('admin.policies.list');
    }
    public function edit($id){
        $edit = Policy::find($id);
        return view('admin.web.Policies.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'policy'=>'required',
        ]);
        $update = Policy::find($request->id);
        $update->policy = $request->policy;
        if($request->hasFile('document')){
            $document = $request->file('document');
            $ducumentName = time() . '_' . $document->getClientOriginalName();
            $document->move(public_path('uploads/policy'), $ducumentName);
            $update->document = $ducumentName;
        }
        $update->save();
        toastr()->success('Policy Updated Successfully');
        return redirect()->route('admin.policies.list');
    }
    public function delete($id){
        $delete = Policy::find($id);
        if ($delete) {
            $documentPath = public_path('uploads/policy/' . $delete->document);
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
