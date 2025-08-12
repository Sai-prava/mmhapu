<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExamCandidate;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{

    public function index()
    {
        // if (Auth::user()->role->name == 'admin') {
        //     return view('admin.quiz-list')->with('quiz_list', Quiz::all());
        // }
        return view('prospect.quiz.quiz-list')->with('quiz_list', Quiz::join('questions', 'quizzes.id', '=', 'questions.quiz_id')->distinct('quizzes.id')
            ->select('quizzes.id as quiz_id', 'quizzes.*')
            ->get());
    }

    public function addQuiz()
    {
        if (Auth::user()->role->name == 'Admin') {
            return view('admin.quiz.add-quiz')->with('quiz_list', Quiz::all());
        }
        // return view('user.quiz-list')->with('quiz_list', Quiz::join('questions', 'quizzes.id', '=', 'questions.quiz_id')->distinct('quizzes.id')
        //     ->select('quizzes.id as quiz_id', 'quizzes.*')
        //     ->get());

        // return view('admin.quiz.add-quiz');
    }

    public function storeQuiz(Request $request)
    {
        if (Quiz::create([
            'title' => $request->title,
            'quiz_type' => $request->quiz_type,
            'from_time' => $request->from_time,
            'to_time' => $request->to_time,
            'duration' => $request->duration,
        ])) {
            return redirect()->back()->with('success', 'Quiz: ' . $request->title . ' added successfully!');
        }
        return redirect()->back()->with('error', 'Quiz: ' . $request->title . ' was not added. Something wrong!');
    }

    public function editQuiz($id)
    {
        $edit_quiz = Quiz::find($id);
        return view('admin.quiz.edit-quiz', compact('edit_quiz'));
    }

    public function updateQuiz(Request $request)
    {
        $update_quiz = Quiz::find($request->id);

        $update_quiz->title = $request->title;
        $update_quiz->from_time = $request->from_time;
        $update_quiz->to_time = $request->to_time;
        $update_quiz->duration = $request->duration;
        $update_quiz->save();
        return redirect()->back()->with('success', 'Edited Successfully!');
    }

    public function deleteQuiz($id)
    {
        $delete_quiz = Quiz::find($id);
        if ($delete_quiz) {
            // $delete_quiz->delete();

            Question::where('quiz_id', $id)->delete();
            Result::where('quiz_id', $id)->delete();
            ExamCandidate::where('quiz_id', $id)->delete();

            $delete_quiz->delete();
            return redirect()->back()->with('success', 'Deleted Successfully.');
        }
        return redirect()->back()->with('error', 'Something Wents Wrong !');
    }

    public function joinQuiz($id)
    {
        if (Quiz::where('id', $id)->where('quiz_type', 'live')->first()) {
            if (count(ExamCandidate::where('quiz_id', $id)->where('user_id', '=', Auth::user()->id)->get()) > 0) {

                return redirect()->back()->with('error', 'You already participated this quiz');
            }

            if (time() >= strtotime(Quiz::where('id', $id)->value('to_time'))) {
                return redirect()->back()->with('error', 'Quiz is no longer available');
            }
            if (time() < strtotime(Quiz::where('id', $id)->value('from_time'))) {
                return redirect()->back()->with('error', 'Quiz is not available now. Wait for its availability');
            }

            if (Auth::user()->role->name == 'Prospect' && count(Result::where('user_id', Auth::user()->id)->where('quiz_id', $id)->get()) > 0) {
                return redirect()->back()->with('error', 'You already participated this quiz');
            }
        }

        ExamCandidate::create([
            'user_id' => Auth::user()->id,
            'quiz_id' => $id
        ]);

        return view('prospect.quiz.give-quiz')->with('quiz', Quiz::where('id', $id)->first())
            ->with('questions', Question::where('quiz_id', $id)->get())
            ->with('start_time', Carbon::now());
    }
}
