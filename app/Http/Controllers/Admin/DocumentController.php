<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function document(){
        $documents = Document::all();
        return view('admin.web.document.index', compact('documents'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
        ]);
        $store = new Document();
        $store->name = $request->name;
        $store->doc_type = $request->doc_type;
        $store->save();
        toastr()->success('New Document Added Successfully');
        return redirect()->back();
    }
    public function update(Request $request){
        $request->validate([
            'name'=> 'required',
        ]);
        $update =Document::find($request->id);
        $update->name = $request->name;
        $update->doc_type = $request->doc_type;
        $update->save();
        toastr()->success('Document Updated Successfully');
        return redirect()->back();
    }
    public function delete($id){
        $delete = Document::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
