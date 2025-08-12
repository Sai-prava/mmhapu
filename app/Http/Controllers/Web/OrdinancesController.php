<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdinancesController extends Controller
{
    public function ordinances(){
        return view('web.ordinances');
    }
}
