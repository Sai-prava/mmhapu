<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class IqacFeedbackController extends Controller
{
    public function index(){
        $feedbacks = Feedback::all();
        return view('admin.web.feedback.index', compact('feedbacks'));
    }
    public function store(Request $request){
        $request->validate([
            'subject'=>'required',
            'url'=>'required|url'
        ]);
        $store = new Feedback();
        $store->subject = $request->subject;
        $store->url= $request->url;
        $store->save();
        toastr()->success('New Feedback System Added Successfully');
        return redirect()->back();
    }
    public function edit($id){
        $edit = Feedback::find($id);
        return view('admin.web.feedback.edit', compact('edit'));
    }
    public function update(Request $request){
        $request->validate([
            'subject'=>'required',
            'url'=>'required|url'
        ]);
        $update = Feedback::find($request->id);
        $update->subject = $request->subject;
        $update->url= $request->url;
        $update->save();
        toastr()->success('Feedback System Updated.');
        return redirect()->route('admin.Feedback.index');
    }
    public function delete($id){
        $delete = Feedback::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully.');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }
}
