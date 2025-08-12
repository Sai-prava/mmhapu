<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommitteesCellsTitle;
use App\Models\CommittesCell;
use Illuminate\Http\Request;

class CommitteesCellsController extends Controller
{
    public function index(){
        $titles = CommitteesCellsTitle::all();
        return view('admin.web.committees&cells.title.index', compact('titles'));
    }
    public function storeTitle(Request $request){
        $request->validate([
            'title'=>'required',
            'type'=>'required'
        ]);
        $storeTitle =new CommitteesCellsTitle;
        $storeTitle->title = $request->title;
        $storeTitle->type = $request->type;

        $storeTitle->save();
        toastr()->success('New Committees & Cells Title Added Successfully');
        return redirect()->back();
    }
    public function update(Request $request){
        $request->validate([
            'title'=>'required',
            'type'=>'required'
        ]);
        $updateTitle = CommitteesCellsTitle::find($request->id);
        $updateTitle->title = $request->title;
        $updateTitle->type = $request->type;

        $updateTitle->save();
        toastr()->success('Committees & Cells Title Updated Successfully');
        return redirect()->back();
    }
    public function delete($id){
        $deleteTitle = CommitteesCellsTitle::find($id);
        if($deleteTitle){
            $deleteTitle->delete();
            CommittesCell::where('title_id', $id)->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }

    public function list(){
        $committeesCells = CommittesCell::all();
        return view('admin.web.committees&cells.committees_cells.list', compact('committeesCells'));
    }
    public function add(){
        return view('admin.web.committees&cells.committees_cells.add');
    }
    public function store(Request $request){
        $request->validate([
            'type'=>'required',
            'title_id'=>'required',
            'name'=>'required',
            'designation'=>'required',
        ]);
        $store =new CommittesCell;
        $store->type = $request->type;
        $store->title_id = $request->title_id;
        $store->name = $request->name;
        $store->designation = $request->designation;

        $store->save();
        toastr()->success('New Committees & Cells Addedd Successfully');
        return redirect()->route('admin.committesCells.list');
    }
    public function edit($id){
        $edit = CommittesCell::find($id);
        $add = CommitteesCellsTitle::where('type',$edit->type)->get();
        return view('admin.web.committees&cells.committees_cells.edit', compact('edit','add'));
    }
    public function updateCommittee(Request $request){
        $request->validate([
            'type'=>'required',
            'title_id'=>'required',
            'name'=>'required',
            'designation'=>'required',
        ]);
        $update = CommittesCell::find($request->id);
        $update->type = $request->type;
        $update->title_id = $request->title_id;
        $update->name = $request->name;
        $update->designation = $request->designation;

        $update->save();
        toastr()->success('Committees & Cells Updated Successfully');
        return redirect()->route('admin.committesCells.list');
    }
    public function deleteCommittee($id){
        $delete = CommittesCell::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong');
        return redirect()->back();
    }
    public function getTitle(Request $request){
        $viewTitle = CommitteesCellsTitle::where('type', $request->type)->get();
        return response()->json($viewTitle);
    }
}
