<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\Mediapath;
use Illuminate\Http\Request;

class MediapathController extends Controller
{
    public function list(){
        $media_paths = Mediapath::orderBy('id','desc')->get();
        return view('admin.web.media-path.index', compact('media_paths'));
    }
    public function store(Request $request){
        $store = new Mediapath;

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time(). '_' . $file->getClientOriginalName();
            $filePath = 'web/media_path/' . $fileName;
            $file->move(public_path('web/media_path'),$fileName);
            $store->file = $fileName;
        }
        $store->path = $filePath;
        $store->save();
        toastr()->success('file Added Suucessfully');
        return redirect()->back();
    }
    public function delete($id){
        $delete = Mediapath::find($id);
        if($delete){
            // Construct the full file path
            $filePath = public_path($delete->path);

            // Check if the file exists and delete it
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // Delete the record from the database
            $delete->delete();

            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }

        toastr()->error('Something Went Wrong!!');
        return redirect()->back();
    }
}
