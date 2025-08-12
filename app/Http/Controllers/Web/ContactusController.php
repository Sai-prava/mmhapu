<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Quicklink;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function contactUs(){
        return view('web.contact_us');
    }
    public function address(){
        return view('web.address');
    }
    public function howtoReach(){
        return view('web.how_to_reach');
    }
        public function ScSt(){
        return view('web.sc_st');
    }
}
