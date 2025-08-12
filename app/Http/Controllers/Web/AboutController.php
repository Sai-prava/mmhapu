<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Web\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $aboutUs = AboutUs::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->first();
        return view('web.about',compact('aboutUs'));
    }
}
