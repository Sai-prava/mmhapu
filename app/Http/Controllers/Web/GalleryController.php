<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Web\Gallery;
use App\Models\Language;
use App\Models\Web\Viewgallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Galleries
        $data['galleries'] = Gallery::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->orderBy('id', 'desc')
                            ->get();

        return view('web.gallery_thum', $data);
    }

    public function viewGallery($id){
        $view_gallery = Viewgallery::where('galleries_id',$id)->with('getGalleryTitle')->get();
        return view('web.gallery',compact('view_gallery'));
    }
}
