<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AntiRaging;
use App\Models\Grievance;
use App\Models\State;
use Illuminate\Http\Request;

class GrievancesController extends Controller
{
    public function grievances()
    {
        $states = State::all();
        return view('web.grievances', compact('states'));
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img('math')]);
    }
    public function storeGrievances(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:grievances,email',
            'mobile' => 'required|unique:grievances,mobile',
            'captcha' => 'required|captcha',
        ], [
            'captcha.captcha' => 'The captcha is invalid.',
            'email.unique' => 'This email is already taken.',
            'mobile.unique' => 'This mobile number is already taken.',
        ]);

        $storeGrievances = new Grievance();
        $storeGrievances->name = $request->name;
        $storeGrievances->email = $request->email;
        $storeGrievances->gender = $request->gender;
        $storeGrievances->mobile = $request->mobile;
        $storeGrievances->enrolment = $request->enrolment;
        $storeGrievances->department = $request->department;
        $storeGrievances->center = $request->center;
        $storeGrievances->course = $request->course;
        $storeGrievances->present_address = $request->present_address;
        $storeGrievances->present_state = $request->present_state;
        $storeGrievances->present_pincode = $request->present_pincode;
        $storeGrievances->permanent_address = $request->permanent_address;
        $storeGrievances->permanent_state = $request->permanent_state;
        $storeGrievances->permanent_pincode = $request->permanent_pincode;
        $storeGrievances->category = $request->category;
        $storeGrievances->other_grievance_category = $request->other_grievance_category;
        $storeGrievances->grievance_description = $request->grievance_description;
        $storeGrievances->uploadCheck = $request->uploadCheck;
        if($request->hasFile('doc')){
            $file = $request->file('doc');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/doc'), $fileName);
            $storeGrievances->doc = $fileName;
        }
        $storeGrievances->proposed_solution = $request->proposed_solution;

        $storeGrievances->save();
        toastr()->success('Your Grievance From Submitted');
        return redirect()->back();
    }

    public function antiRaging(){
        $antiRaging = AntiRaging::all();
        return view('web.anti_raging', compact('antiRaging'));
    }
}
