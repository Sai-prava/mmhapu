<?php

namespace App\Http\Controllers\Prospect;

use App\Http\Controllers\Controller;
use App\Models\MockResult;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index(){
        if (Auth::user()->role->name == 'Admin'){
            return view('admin.quiz.result-page')->with('results',Result::join('quizzes','results.quiz_id','quizzes.id')
                ->join('users','results.user_id','=','users.id')
                ->get());
        }else{
        return view('prospect.quiz.result-page')
                        ->with('results',Result::join('quizzes','results.quiz_id','quizzes.id')
                        ->where('user_id',Auth::user()->id)
                        ->get());
        }
    }
    public function mockResults(){
        return view('prospect.quiz.mock-results')
                    ->with('mock_results',MockResult::join('quizzes','mock_results.quiz_id','quizzes.id')
                    ->where('user_id',Auth::user()->id)
                    ->get());
    }
}
