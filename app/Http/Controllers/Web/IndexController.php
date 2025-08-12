<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Controller;
use App\Models\Administration;
use App\Models\Calender;
use App\Models\Campus;
use App\Models\Committe;
use App\Models\CommittesTitle;
use App\Models\Web\CallToAction;
use App\Models\Web\Testimonial;
use Illuminate\Http\Request;
use App\Models\Web\AboutUs;
use App\Models\Web\Feature;
use App\Models\Web\Slider;
use App\Models\notice;
use App\Models\Team;
// use App\Models\Web\WebEvent;
use App\Models\Language;
use App\Models\NoticetypeModel;
use App\Models\Overview;
use App\Models\Student;
use App\Models\Web\News;
use App\Models\Web\Viewnewspaper;
use App\Models\Web\WebEvent;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sliders
        $data['sliders'] = Slider::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        // Features
        $data['features'] = Feature::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();
        //Notice
        $notices = notice::orderBy('id', 'desc')->get();

        $office_orders_notice = notice::where('notice_type','=','Office Orders Notice')->orderBy('id','desc')->get();

        $admission_notice = notice::where('notice_type','=','Admission Notice')->orderBy('id', 'desc')->get();

        $exam_notice = notice::where('notice_type','=','Exam Result')->orderBy('id', 'desc')->get();

        // About Us
        $data['about'] = AboutUs::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->first();

        //team
        $teams = Team::all();
         // Notice Type

        //Event
        $events = WebEvent::where('status','1')->orderBy('id','desc')->get();

        //campus section
        $campus = Campus::all();

        //campus section
        $administration = Administration::all();
        //Student section
        $student = Student::all();

        //Overviews
        $overview = Overview::first();

        //News
        $news = News::all();

        $viewNews = Viewnewspaper::orderBy('id','desc')->first();



        // Call To Action
        $data['callToAction'] = CallToAction::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->first();

        // Testimonials
        $data['testimonials'] = Testimonial::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->orderBy('id', 'desc')
                            ->get();


        return view('web.index', $data, compact('notices','admission_notice', 'office_orders_notice','exam_notice','teams','events','overview', 'campus', 'administration', 'student','viewNews'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function setCookie(Request $request) {
        //
        if(Cookie::get('sidebar') != 'navbar-collapsed'){
            Cookie::queue(Cookie::make('sidebar', 'navbar-collapsed', 60*60*24*365));
        }
        else{
            Cookie::queue(Cookie::make('sidebar', 'navbar-expeded', 60*60*24*365));
        }

        return response()->json(['data'=> Cookie::get('sidebar')]);
    }
    public function fitIndia(){
        return view('web.fit_india_movement');
    }
    public function committe(){
        $title = CommittesTitle::all();
        $committes = Committe::all();
        return view('web.committe_topbar', compact('title','committes'));
    }
    public function calender(){
        $calenders = Calender::orderBy('id','desc')->get();
        return view('web.calender', compact('calenders'));
    }
    public function getCalenderByYear(Request $request){
        $calender = Calender::where('year', $request->year)->first();
        return response()->json($calender);
    }
}
