<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Web\News;
use App\Models\Language;
use App\Models\Web\Viewnewspaper;
use Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Newses
        $data['newses'] = News::where('language_id', Language::version()->id)
                            ->where('date', '<=', Carbon::today())
                            ->where('status', '1')
                            ->orderBy('date', 'desc')
                            ->paginate(6);

        return view('web.newspaper_clippings', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // News
        $news = Viewnewspaper::where('newspaper_id',$id)->with('newspaperTitle')->get();

        return view('web.newspaper',compact('news'));
    }


}
