<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegacyController extends Controller
{
    public function legacy(){
        return view('web.legacy');
    }
}
