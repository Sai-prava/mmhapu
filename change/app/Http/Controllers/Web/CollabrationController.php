<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Collabration;
use Illuminate\Http\Request;

class CollabrationController extends Controller
{
    public function collabration(){
        $collabrations = Collabration::all();
        return view('web.collabration',compact('collabrations'));
    }
}
