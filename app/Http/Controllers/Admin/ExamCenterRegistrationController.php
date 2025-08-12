<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExamCenterRegistration;
use Exception;
use Illuminate\Http\Request;

class ExamCenterRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.center_registration.index');
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
        try{
            $this->validate($request,[
                'name' => 'required',
                'address' => 'required',
                'contact_person' => 'required',
                'contact_no' => 'required',
                'max_candidate_allowed' => 'required',
            ]);
            ExamCenterRegistration::create($request->all());
            toastr()->success('Exam Center Registration Added Successfully');
            return redirect()->back();
        }catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamCenterRegistration  $examCenterRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(ExamCenterRegistration $examCenterRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamCenterRegistration  $examCenterRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamCenterRegistration $examCenterRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamCenterRegistration  $examCenterRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $examCenterRegistration = ExamCenterRegistration::find($id);
        $examCenterRegistration->update($request->all());
        toastr()->success('Exam Center Registration Updated successfully');
        return redirect()->back(); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamCenterRegistration  $examCenterRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examCenterRegistration = ExamCenterRegistration::find($id);
        $examCenterRegistration->delete();
        toastr()->success('Exam Center Registration Deleted successfully');
        return redirect()->back();
    }
}
