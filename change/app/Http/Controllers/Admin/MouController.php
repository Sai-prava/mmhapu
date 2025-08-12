<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mou;
use Illuminate\Http\Request;

class MouController extends Controller
{
    public function list(){
        $mous = Mou::all();
        return view('admin.web.mous.list', compact('mous'));
    }
    public function add(){
        return view('admin.web.mous.add');
    }
    public function store(Request $request){
        $request->validate([
            'institute'=>'required',
            'collaborative'=>'required',
            'country'=>'required',
            'dated'=>'required',
        ]);
        $store = new Mou();
        $store->institute = $request->institute;
        $store->collaborative = $request->collaborative;
        $store->country = $request->country;
        $store->dated = $request->dated;

        $store->save();
        toastr()->success('New MOUs Added Successfully');
        return redirect()->route('admin.mous.list');
    }
    public function edit($id){
        $edit = Mou::find($id);
        return view('admin.web.mous.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'institute'=>'required',
            'collaborative'=>'required',
            'country'=>'required',
            'dated'=>'required',
        ]);
        $update = Mou::find($request->id);
        $update->institute = $request->institute;
        $update->collaborative = $request->collaborative;
        $update->country = $request->country;
        $update->dated = $request->dated;

        $update->save();
        toastr()->success('MOUs Updated Successfully');
        return redirect()->route('admin.mous.list');
    }
    public function delete($id){
        $delete = Mou::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }
}
