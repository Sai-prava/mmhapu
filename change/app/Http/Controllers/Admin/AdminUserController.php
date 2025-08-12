<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class AdminUserController extends Controller
{
    public function list(){
        $all_adminuser = User::getAdminUser();
        return view('admin.adminUser.list',compact('all_adminuser'));
    }
    public function add(){
        return view('admin.adminUser.add');
    }
    public function store(Request $request){
        $store_adminuser = new User;
        $store_adminuser->name = $request->name;
        $store_adminuser->email = $request->email;
        $store_adminuser->role_id =6;
        if($request->hasFile('image')){
        $store_adminuser->image = $request->image;
        }
        $store_adminuser->password =$request->password;
        $store_adminuser->save();
        toastr()->success('Admin User Added Successfully!');
        return redirect()->route('admin.AdminUser.list');
    }
    public function edit($id){
        $edit_adminuser = User::find($id);
        return view('admin.adminUser.edit',compact('edit_adminuser'));
    }
    public function update(Request $request){
        // dd($request->all());
        $update_adminuser = User::find($request->id);
        $update_adminuser->name = $request->name;
        $update_adminuser->email = $request->email;
        if($request->hasFile('image')){
        $update_adminuser->image = $request->image;
        }
        $update_adminuser->password =$request->password;
        $update_adminuser->status =$request->status;
        $update_adminuser->save();
        toastr()->success('Admin User Updated Successfully!');
        return redirect()->route('admin.AdminUser.list');
    }
    // public function delete($id){
    //     $delete_adminuser = User::find($id);
    //     if($delete_adminuser){
    //         $delete_adminuser->delete();
    //         toastr()->success('Admin User Deleted Successfully!');
    //         return redirect()->back();
    //     }
    //     toastr()->error('Something Went Wrong');
    //     return redirect()->back();
    // }
}
