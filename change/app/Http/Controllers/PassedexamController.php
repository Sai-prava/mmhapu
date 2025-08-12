<?php

namespace App\Http\Controllers;

use App\Models\Passed_exam;
use Exception;
use Illuminate\Http\Request;

class PassedexamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.passed_exam.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Passed_exam::create($request->all());
            toastr()->success('Exam Added Successfully');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Passed_exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Passed_exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passed_exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exam = Passed_exam::find($id);
        return view('admin.passed_exam.edit', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passed_exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exam = Passed_exam::find($id);
        $exam->update($request->all());
        toastr()->success('Exam Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passed_exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = Passed_exam::find($id);
        $exam->delete();
        toastr()->success('Exam Deleted successfully');
        return redirect()->back();
    }
}
