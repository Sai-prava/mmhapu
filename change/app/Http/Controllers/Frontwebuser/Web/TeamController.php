<?php

namespace App\Http\Controllers\Frontwebuser\Web;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function list(){
        $all_team = Team::all();
        return view('frontwebuser.web.team.list',compact('all_team'));
    }
    public function add(){
        return view('frontwebuser.web.team.add');
    }
    public function store(Request $request)
    {
        $store_team = new Team;
        $store_team->name = $request->name;
        $store_team->designation = $request->designation;
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photoName = time(). '_' . $photo->getClientOriginalName();
            $photo->move(public_path('Team'),$photoName);
            $store_team->photo = $photoName;
        }
        $store_team->facebook = $request->facebook;
        $store_team->instagram = $request->instagram;
        $store_team->x = $request->x;
        $store_team->s_description = $request->s_description;
        $store_team->details = $request->details;

        $store_team->save();
        toastr()->success('Team Added Successfully!');
        return redirect()->route('frontwebuser.Team.list');
    }
    public function edit($id){
        $edit_team = Team::find($id);
        return view('frontwebuser.web.team.edit',compact('edit_team'));
    }
    public function update(Request $request)
    {
        // dd($request->name);
        $update_team = Team::find($request->id);
        $update_team->name = $request->name;
        $update_team->designation = $request->designation;
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photoName = time(). '_' . $photo->getClientOriginalName();
            $photo->move(public_path('Team'),$photoName);
            $update_team->photo = $photoName;
        }
        $update_team->facebook = $request->facebook;
        $update_team->instagram = $request->instagram;
        $update_team->x = $request->x;
        $update_team->s_description = $request->s_description;
        $update_team->details = $request->details;

        $update_team->save();
        toastr()->success('Updated Successfully!');
        return redirect()->route('frontwebuser.Team.list');
    }
    public function delete($id){
        // dd($id);
        $delete_team = Team::find($id);
       if($delete_team){
        $delete_team->delete();
        toastr()->success('Deleted Successfully!');
        return redirect()->back();
       }
        toastr()->error('Something Went Wrong');
        return redirect()->back();
    }
}
