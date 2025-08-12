<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Quicklink;
use Illuminate\Http\Request;

class ScstController extends Controller
{
    public function ScSt(){
        return view('web.sc_st');
    }
}
