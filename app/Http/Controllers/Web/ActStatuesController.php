<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ActStatus;
use Illuminate\Http\Request;

class ActStatuesController extends Controller
{
    public function actStatutes(){
        $act_statutes = ActStatus::orderBy('id', 'desc')->get();
        return view('web.act_statutes', compact('act_statutes'));
    }
}
