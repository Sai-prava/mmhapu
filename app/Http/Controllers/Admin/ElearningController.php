<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Elearning;
use App\Models\ElearningTitle;
use Illuminate\Http\Request;

class ElearningController extends Controller
{
    public function title(){
        $titles = ElearningTitle::all();
        return view('admin.web.e-learning.title.index', compact('titles'));
    }
    public function storeTitle(Request $request){
        $request->validate([
            'title'=>'required'
        ]);
        $storeTitle = new ElearningTitle();
        $storeTitle->title = $request->title;

        $storeTitle->save();
        toastr()->success('New e-Learning Title Added Successfully');
        return redirect()->back();
    }
    public function updateTitle(Request $request){
        $updateTitle = ElearningTitle::find($request->id);
        $updateTitle->title = $request->title;

        $updateTitle->save();
        toastr()->success('e-Learning Title Updated Successfully');
        return redirect()->back();
    }
    public function deleteTitle($id){
        $deleteTitle = ElearningTitle::find($id);
        if($deleteTitle){
            $deleteTitle->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
            Elearning::where('title_id',$id)->delete();
        }
        toastr()->error('Something Wents Wrong...');
        return redirect()->back();
    }

    //e-Learning
    public function list(){
        $eLearning = Elearning::all();
        return view('admin.web.e-learning.eLearing.list', compact('eLearning'));
    }
    public function add(){
        $add = ElearningTitle::all();
        return view('admin.web.e-learning.eLearing.add', compact('add'));
    }
    public function store(Request $request){
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
            'file'=>'required'
        ]);
        $store = new Elearning();
        $store->title_id = $request->title_id;
        $store->name = $request->name;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/eLearning'), $fileName);
            $store->file = $fileName;
        }
        $store->save();
        toastr()->success('New e-Learning Added Successfully');
        return redirect()->route('admin.elearning.list');
    }
    public function edit($id){
        $edit = Elearning::find($id);
        $titles = ElearningTitle::all();
        return view('admin.web.e-learning.eLearing.edit', compact('edit','titles'));
    }
    public function update(Request $request){
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
        ]);
        $update = Elearning::find($request->id);
        $update->title_id = $request->title_id;
        $update->name = $request->name;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/eLearning'), $fileName);
            $update->file = $fileName;
        }
        $update->save();
        toastr()->success('e-Learning Updated Successfully');
        return redirect()->route('admin.elearning.list');
    }
    public function delete($id)
{
    $delete = Elearning::find($id);
    if ($delete) {
        $filePath = public_path('uploads/eLearning/' . $delete->file);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $delete->delete();

        toastr()->success('Deleted Successfully');
        return redirect()->back();
    }

    toastr()->error('Something Went Wrong');
    return redirect()->back();
}
}
