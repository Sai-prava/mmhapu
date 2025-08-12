<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProspectApplicationService
{
    public function mapStepOneData($request)
    {
        $request->merge(['step' => 2]);
        $application_process = new \stdClass;
        $application_process->step = 2;
        $application_process->user_id = $request->user_id;
        $application_process->first_name = $request->first_name;
        $application_process->middle_name = $request->middle_name;
        $application_process->last_name = $request->last_name;
        $application_process->father_first_name = $request->father_first_name;
        $application_process->father_middle_name = $request->father_middle_name;
        $application_process->father_last_name = $request->father_last_name;
        $application_process->mother_first_name = $request->mother_first_name;
        $application_process->mother_middle_name = $request->mother_middle_name;
        $application_process->mother_last_name = $request->mother_last_name;
        $application_process->guardian_first_name = $request->guardian_first_name;
        $application_process->guardian_middle_name = $request->guardian_middle_name;
        $application_process->guardian_last_name = $request->guardian_last_name;
        $application_process->day = $request->day;
        $application_process->month = $request->month;
        $application_process->year = $request->year;
        $application_process->phone = $request->phone;
        $application_process->alternative_phone = $request->alternative_phone;
        $application_process->email = $request->email;
        $application_process->aadhar_no = $request->aadhar_no;
        return $application_process;
    }
    public function mapStepTwoData($request)
    {
        $application_process = $request->session()->get('application_process');
        $application_process->step = 3;
        $application_process->gender = $request->gender;
        $application_process->caste = $request->caste;
        $application_process->persons_with_disability = $request->persons_with_disability;
        $application_process->ex_service_man = $request->ex_service_man;
        $application_process->religion = $request->religion;
        $application_process->nationality = $request->nationality;
        $application_process->other_nationality_1 = @$request->other_nationality_1;
        $application_process->mother_tongue = $request->mother_tongue;
        $application_process->type = $request->type;
        $application_process->premise_name = $request->premise_name;
        $application_process->plot_no = $request->plot_no;
        $application_process->locality = $request->locality;
        $application_process->sub_locality = $request->sub_locality;
        $application_process->landmark = $request->landmark;
        $application_process->village = $request->village;
        $application_process->post_office = $request->post_office;
        $application_process->police_station = $request->police_station;
        $application_process->country_id = $request->country_id;
        $application_process->state_id = $request->state_id;
        $application_process->city_id = $request->city;
        $application_process->pin = $request->pin;
        $application_process->same_as_temparory = $request->same_as_temparory ? 1 : 0;
        return $application_process;
    }
    public function mapStepThreeData($request)
    {
        $application_process = $request->session()->get('application_process');
        $application_process->step = 4;
        $application_process->name_of_exam = $request->name_of_exam;
        $application_process->name_of_board = $request->name_of_board;
        $application_process->attended_school = $request->attended_school;
        $application_process->passing_year = $request->passing_year;
        $application_process->total_marks = $request->total_marks;
        $application_process->marks = $request->marks;
        $application_process->percentage = @$request->percentage;
        return $application_process;
    }
}
