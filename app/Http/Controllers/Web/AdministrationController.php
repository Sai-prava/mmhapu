<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficer;
use App\Models\AuthoritiesTitle;
use App\Models\Authority;
use App\Models\UniversityAdministration;
use App\Models\UniversityAdministrationTitle;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function chancellor_1(){
        return view('web.chancellor_1');
    }

    public function vc(){
        return view('web.vc');
    }

    public function universityAuthority(){
        $titles = AuthoritiesTitle::with('positions.authorities')->get();
        return view('web.university_authority', compact('titles'));
    }

    public function statutoryBodies(){
        $administativeOfficers = AdministrativeOfficer::all();
        return view('web.statutory_bodies', compact('administativeOfficers'));
    }

    public function universityOfficers(){
        $title = UniversityAdministrationTitle::all();
        $officers = UniversityAdministration::all();
        return view('web.university_officers', compact('title','officers'));
    }

    public function directory(){
        return view('web.directory');
    }
}
