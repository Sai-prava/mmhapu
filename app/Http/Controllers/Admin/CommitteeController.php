<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Committe;
use App\Models\CommittesTitle;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function committe_titleList(){
        $titles = CommittesTitle::all();
        return view('admin.web.committee.title.index', compact('titles'));
    }
    public function committe_titleStore(Request $request){
        $request->validate([
            'title' => 'required|unique:committes_title',
        ]);
        $store_title =new CommittesTitle;
        $store_title->title = $request->title;
        $store_title->save();
        toastr()->success('New Committees Title Added Successfully');
        return redirect()->back();
    }
    public function committe_titleUpdate(Request $request){
        $request->validate([
            'title' => 'required|unique:committes_title,title,' . $request->id,
        ]);
        $update_title = CommittesTitle::find($request->id);
        $update_title->title = $request->title;
        $update_title->save();
        toastr()->success('Updated Successfully');
        return redirect()->back();
    }
    public function committe_titleDelete($id){
        $delete_title = CommittesTitle::find($id);
        if($delete_title){
            $delete_title->delete();
            Committe::where('title_id', $id)->delete();
            toastr()->success('Deleted Successfully');
        return redirect()->back();
        }
    }

    public function committeList(){
        $committees = Committe::all();
        return view('admin.web.committee.committee.list', compact('committees'));
    }
    public function committeAdd(){
        $add = CommittesTitle::all();
        return view('admin.web.committee.committee.add', compact('add'));
    }
    public function committeStore(Request $request){
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
            'designation'=>'required',
            'position'=>'required',
            'email'=>'required | email',
            'contact'=>'required | max:10 | min:10',
        ]);
        $store_committe = new Committe;
        $store_committe->title_id = $request->title_id;
        $store_committe->name = $request->name;
        $store_committe->designation = $request->designation;
        $store_committe->position = $request->position;
        $store_committe->email = $request->email;
        $store_committe->contact = $request->contact;
        $store_committe->save();
        toastr()->success('New Committees Added Successfully.');
        return redirect()->route('admin.committe.list');
    }
    public function committeEdit($id){
        $edit_committe = Committe::find($id);
        $edit = CommittesTitle::all();
        return view('admin.web.committee.committee.edit', compact('edit_committe','edit'));
    }
    public function committeUpdate(Request $request){
        $request->validate([
            'title_id'=>'required',
            'name'=>'required',
            'designation'=>'required',
            'position'=>'required',
            'email'=>'required | email',
            'contact'=>'required | max:10 | min:10',
        ]);
        $update_committe = Committe::find($request->id);
        $update_committe->title_id = $request->title_id;
        $update_committe->name = $request->name;
        $update_committe->designation = $request->designation;
        $update_committe->position = $request->position;
        $update_committe->email = $request->email;
        $update_committe->contact = $request->contact;
        $update_committe->save();
        toastr()->success('Updated Successfully.');
        return redirect()->route('admin.committe.list');
    }
    public function committeDelete($id){
        $delete_committe = Committe::find($id);
        if($delete_committe){
            $delete_committe->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong');
        return redirect()->back();
    }
}
