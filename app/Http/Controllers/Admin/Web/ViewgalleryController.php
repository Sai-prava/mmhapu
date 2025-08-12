<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\Gallery;
use App\Models\Web\Viewgallery;
use Illuminate\Http\Request;

class ViewgalleryController extends Controller
{
   public function list(){
    $all_gallery = Viewgallery::all();
    return view('admin.web.gallery.view-gallery.list',compact('all_gallery'));
   }
   public function add(){
    $add_gallery = Gallery::all();
    return view('admin.web.gallery.view-gallery.add', compact('add_gallery'));
   }
   public function store(Request $request){
    $request->validate([
        'image'=>'required',
        'galleries_id'=>'required',
    ]);
    $store_gallery = new Viewgallery;
    $store_gallery->galleries_id = $request->galleries_id;

    if($request->hasFile('image')){
        $image = $request->file('image');
        $imageName = time(). '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/gallery'),$imageName);
        $store_gallery->image = $imageName;
    }
    $store_gallery->save();
    toastr()->success('New Image Added Successfully');
    return redirect()->route('admin.Viewgalleries.list');
   }

   public function edit($id){
    $edit_gallery = Viewgallery::find($id);
    $galleris = Gallery::all();
    return view('admin.web.gallery.view-gallery.edit', compact('edit_gallery','galleris'));
   }
   public function update(Request $request){
    $request->validate([
        'galleries_id'=>'required',
    ]);
    $update_gallery = Viewgallery::find($request->id);

    $update_gallery->galleries_id = $request->galleries_id;

    if($request->hasFile('image')){
        $image = $request->file('image');
        $imageName = time(). '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/gallery'),$imageName);
        $update_gallery->image = $imageName;
    }
    $update_gallery->save();
    toastr()->success('Updated Successfully');
    return redirect()->route('admin.Viewgalleries.list');
   }
   public function delete($id){
    $delete_gallery = Viewgallery::find($id);
       if($delete_gallery){
        $delete_gallery->delete();
        toastr()->success('Deleted Successfully!');
        return redirect()->back();
       }
        toastr()->error('Something Went Wrong');
        return redirect()->back();
   }
}