<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\IqacEvent;
use App\Models\IqaceventTitle;
use Illuminate\Http\Request;
use App\Models\Web\WebEvent;
use App\Models\Language;
use App\Models\Year;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Events
        $data['events'] = WebEvent::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->orderBy('date', 'desc')
                            ->paginate(6);

        return view('web.event', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        // Event
        $data['event'] = WebEvent::where('id', $id)
                            ->where('status', '1')
                            ->firstOrFail();

        return view('web.event-single', $data);
    }
    public function iqac_event(Request $request) {
        $years = Year::all();
        $eventTitle = IqaceventTitle::all();

        return view('web.iqac_events', compact('eventTitle', 'years'));
    }
    public function viewEvent($id){
        $view_event = IqacEvent::where('title_id',$id)->get();
        return view('web.iqac_event_view',compact('view_event'));
    }

    public function viewTitle(Request $request){
        $view_title = IqaceventTitle::where('year_id',$request->title)->get();
        return response()->json($view_title);
    }

    public function iqac_event_filter(Request $request){
        $years = Year::all();
        $eventTitle = IqaceventTitle::where('year_id', $request->year_id)
                                    ->where('title', $request->event_name)
                                    ->get();
        return view('web.iqac_events', compact('eventTitle','years'));
    }
}
