<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChancellorController extends Controller
{
    public function chancellor(){
        return view('web.chancellor');
    }
}
