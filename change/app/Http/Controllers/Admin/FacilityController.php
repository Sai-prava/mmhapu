<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function list()
    {
        $facilities = Facility::all();
        return view('admin.web.facility.list', compact('facilities'));
    }
    public function add()
    {
        return view('admin.web.facility.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'images' => 'required',
        ]);
        $store = new Facility;
        $store->title = $request->title;
        $store->description = $request->description;
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagesArray = [];

            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('Facility'), $imageName);
                $imagesArray[] = $imageName;
            }

            $store->images = json_encode($imagesArray);
            $store->save();
        }
        $store->save();
        toastr()->success('Facility Added Sussceefully');
        return redirect()->route('admin.facility.list');
    }
    public function edit($id)
    {
        $edit = Facility::find($id);
        return view('admin.web.facility.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $update = Facility::find($request->id);

        if (!$update) {
            toastr()->error('Facility not found.');
            return redirect()->route('admin.facility.list');
        }

        $update->title = $request->title;
        $update->description = $request->description;

        if ($request->hasFile('images')) {
            $currentImages = json_decode($update->images, true);
            if (is_array($currentImages)) {
                foreach ($currentImages as $currentImage) {
                    $currentImagePath = public_path('Facility/' . $currentImage);
                    if (file_exists($currentImagePath)) {
                        unlink($currentImagePath);
                    }
                }
            }
            $images = $request->file('images');
            $imagesArray = [];

            foreach ($images as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('Facility'), $imageName);
                $imagesArray[] = $imageName;
            }

            $update->images = json_encode($imagesArray);
        }

        $update->save();

        toastr()->success('Facility Updated Successfully');
        return redirect()->route('admin.facility.list');
    }

    public function delete($id)
    {
        $delete = Facility::find($id);

        if ($delete) {
            $images = json_decode($delete->images, true);
            if (is_array($images)) {
                foreach ($images as $image) {
                    $imagePath = public_path('Facility/' . $image);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }

            $delete->delete();
            toastr()->success('Facility deleted successfully.');
            return redirect()->back();
        }
    }
}
