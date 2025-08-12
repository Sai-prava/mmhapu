<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    public function departmentArabic(){
        return view('web.department_of_commerce');
    }
}
