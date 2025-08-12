<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\News;
use App\Models\Web\Viewnewspaper;
use Illuminate\Http\Request;

class ViewnewsController extends Controller
{
    public function list(){
        $list = Viewnewspaper::all();
        return view('admin.web.news.view-news.list',compact('list'));
    }
    public function add(){
        $news = News::all();
        return view('admin.web.news.view-news.add',compact('news'));
    }
    public function store(Request $request){
        $request->validate([
            'newspaper_id'=>'required',
            'image'=>'required',
        ]);
        $store = new Viewnewspaper;

        $store->newspaper_id = $request->newspaper_id;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time(). '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/news'),$imageName);
            $store->image = $imageName;
        }
        $store->save();
        toastr()->success('New News Paper Added Successfully');
        return redirect()->route('admin.view_news.list');
    }
    public function edit($id){
        $edit = Viewnewspaper::find($id);
        $news = News::all();
        return view('admin.web.news.view-news.edit',compact('edit','news'));
    }
    public function update(Request $request){
        $request->validate([
            'newspaper_id'=>'required',
        ]);
        $update = Viewnewspaper::find($request->id);

        $update->newspaper_id = $request->newspaper_id;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time(). '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/news'),$imageName);
            $update->image = $imageName;
        }
        $update->save();
        toastr()->success('Updated Successfully');
        return redirect()->route('admin.view_news.list');
    }
    public function delete($id){
        $delete = Viewnewspaper::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->error('Something Went Wrong');
        return redirect()->back();
    }
}
