<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IqacEvent;
use App\Models\IqaceventTitle;
use Illuminate\Http\Request;

class IqaceventController extends Controller
{
    public function list()
    {
        $title = IqaceventTitle::all();
        $events = IqacEvent::all();
        return view('admin.web.iqac-event.event.list', compact('title', 'events'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title_id'=>'required',
            'image'=>'required',
        ]);
        $store = new IqacEvent;
        $store->title_id = $request->title_id;
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $imageNames = [];

            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('IQAC Event'), $imageName);
                $imageNames[] = $imageName;
            }

            $store->image = json_encode($imageNames);
        }
        $store->save();
        toastr()->success('IQAC Event Added Successfully');
        return redirect()->back();
    }
    public function edit($id)
    {
        $edit = IqacEvent::find($id);
        $eventTitles = IqaceventTitle::all();
        return view('admin.web.iqac-event.event.edit', compact('edit', 'eventTitles'));
    }
    public function update(Request $request)
    {
        $update = IqacEvent::find($request->id);
        $update->title_id = $request->title_id;
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $imageNames = [];

            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();

                if ($update->image && file_exists(public_path('IQAC Event/' . $update->image))) {
                    unlink(public_path('IQAC Event/' . $update->image));
                }

                $image->move(public_path('IQAC Event'), $imageName);
                $imageNames[] = $imageName;
            }

            $update->image = json_encode($imageNames);
        }
        $update->save();
        toastr()->success('IQAC Event Updated Successfully');
        return redirect()->route('admin.IqacEvent.list');
    }
    public function delete($id)
    {
        $delete = IqacEvent::find($id);
        if ($delete) {
            if ($delete->image) {
                $images = json_decode($delete->image);

                if (is_array($images)) {
                    foreach ($images as $image) {
                        if (file_exists(public_path('IQAC Event/' . $image))) {
                            unlink(public_path('IQAC Event/' . $image));
                        }
                    }
                }
            }

            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }
}
