<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Alim;
use App\Models\Bed;
use App\Models\Fazil;
use App\Models\KrcWithAicte;
use App\Models\KrcWithoutAicte;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function fazil(){
        $fazil = Fazil::all();
        return view('web.fazil', compact('fazil'));
    }
    public function alim(){
        $alim = Alim::all();
        return view('web.alim', compact('alim'));
    }
    public function with_aicte(){
        $krc_with_aicte = KrcWithAicte::all();
        return view('web.krc_with_aicte', compact('krc_with_aicte'));
    }
    public function without_aicte(){
        $krc_without_aicte = KrcWithoutAicte::all();
        return view('web.krc_without_aicte', compact('krc_without_aicte'));
    }
    public function bed(){
        $Bed = Bed::all();
        return view('web.bed', compact('Bed'));
    }
}
