<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\AttendanceTitle;
use App\Models\Committee;
use App\Models\CommitteesCellsTitle;
use App\Models\CommittesCell;
use App\Models\Elearning;
use App\Models\ElearningTitle;
use App\Models\Evaluation;
use App\Models\EvaluationTitle;
use App\Models\Facility;
use App\Models\Feedback;
use App\Models\Minute;
use App\Models\Mou;
use App\Models\Policy;
use App\Models\StudentGrievance;
use App\Models\Syllabus;
use App\Models\SyllabusTitle;
use Illuminate\Http\Request;

class IqacController extends Controller
{
    public function feedback(){
        $feedback = Feedback::all();
        return view('web.feedback', compact('feedback'));
    }
    public function Evaluation(){
        $evaluations = Evaluation::all();
        return view('web.evaluation_report', compact('evaluations'));
    }
    public function committees(){
        $committees = Committee::all();
        return view('web.iqac_committees', compact('committees'));
    }
    public function policy(){
        $policy = Policy::all();
        return view('web.policy', compact('policy'));
    }
    public function minutes(){
        $minute = Minute::all();
        return view('web.iqac_minutes', compact('minute'));
    }
    public function committeesCells(){

        $committeesTitles  = CommitteesCellsTitle::where('type', 'committees')->get();
        $cellsTitles = CommitteesCellsTitle::where('type', 'cells')->get();

        $committeesCells = CommittesCell::whereIn('title_id', $committeesTitles->pluck('id'))
                                        ->get()
                                        ->groupBy('title_id');
        $cells = CommittesCell::whereIn('title_id', $cellsTitles->pluck('id'))
                                ->get()
                                ->groupBy('title_id');
        return view('web.committees', compact('committeesTitles','cellsTitles', 'committeesCells','cells'));
    }
    public function mou(){
        $mous = Mou::orderBy('dated','desc')->get();
        return view('web.mou', compact('mous'));
    }

    public function attendance(){
        $titles = AttendanceTitle::all();
        $attendance = Attendance::all();
        return view('web.attendance', compact('titles','attendance'));
    }
    public function eLearning(){
        return view('web.eLearning');
    }
    public function eResource(){
        $titles = ElearningTitle::all();
        $eLearning = Elearning::all();
        return view('web.eResources', compact('titles','eLearning'));
    }
    public function grievanceRedressal(){
        $grievanceRedressal = StudentGrievance::all();
        return view('web.student_grievance', compact('grievanceRedressal'));
    }
    public function syllabus(){
        $titles = SyllabusTitle::all();
        $syllabus = Syllabus::all();
        return view('web.syllabus', compact('titles','syllabus'));
    }

    public function facilities(){
        $facilities = Facility::all();
        return view('web.facilities', compact('facilities'));
    }

}
