<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AnnualReport;
use App\Models\Documentation;
use App\Models\EnewsLetter;
use App\Models\Gyangrah;
use App\Models\Harmony;
use App\Models\Monograph;
use App\Models\Proceeding;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    public function proceedings(){
        $proceedings = Proceeding::all();
        return view('web.proceedings', compact('proceedings'));
    }
    public function documentation(){
        $documentation = Documentation::all();
        return view('web.documentation', compact('documentation'));
    }
    public function annualMagazine(){
        return view('web.annual_magazine');
    }
    public function gyangrah(){
        $gyangrah = Gyangrah::all();
        return view('web.gyangrah', compact('gyangrah'));
    }
    public function hramony(){
        $harmony = Harmony::all();
        return view('web.harmony', compact('harmony'));
    }

    public function annualReports(){
        $bilingual = AnnualReport::where('type','Bilingual')->get();
        $english = AnnualReport::where('type','English')->get();
        $hindi = AnnualReport::where('type','Hindi')->get();
        return view('web.reports', compact('bilingual','english','hindi'));
    }

    public function enewsLetter(){
        $enews_letter = EnewsLetter::all();
        return view('web.e_news_letter', compact('enews_letter'));
    }
    public function booksResearchPublication(){
        return view('web.books_research_publication');
    }
    public function monograph(){
        $monograph = Monograph::all();
        return view('web.monograph', compact('monograph'));
    }
}
