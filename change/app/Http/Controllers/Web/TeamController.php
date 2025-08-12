<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\StudyMaterial;
use App\Models\Team;
use Illuminate\Request;

class TeamController extends Controller
{
    public function team(){
        $teams = Team::all();
        return view('web.team', compact('teams'));
    }
    public function viewTeam($id){
        $view_team = Team::find($id);
        $study_material = StudyMaterial::where('team_id', $id)->get();
        return view('web.view-team', compact('view_team','study_material'));
    }
}
