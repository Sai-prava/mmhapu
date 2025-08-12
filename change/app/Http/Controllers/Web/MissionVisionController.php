<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Web\AboutUs;
use Illuminate\Http\Request;

class MissionVisionController extends Controller
{
    public function missionVision(){
        $mission_vission = AboutUs::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->first();
        return view('web.vision_mission',compact('mission_vission'));
    }
}
