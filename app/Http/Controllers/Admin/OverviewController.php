<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Overview;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function list()
    {
        $overview = Overview::first();
        // dd($overview);
        return view('admin.overview.index', compact('overview'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'faculties'=>'required',
            'departments'=>'required',
            'centres'=>'required',
            'programmes'=>'required',
            'e_resources'=>'required',
            'mou'=>'required',
            'students'=>'required',
            'scholars'=>'required',
        ]);

        $id = $request->id;
        if ($id == -1) {
            $store_overview = new Overview;

            $store_overview->faculties = $request->faculties;
            $store_overview->departments = $request->departments;
            $store_overview->centres = $request->centres;
            $store_overview->programmes = $request->programmes;
            $store_overview->e_resources = $request->e_resources;
            $store_overview->mou = $request->mou;
            $store_overview->students = $request->students;
            $store_overview->scholars = $request->scholars;
            $store_overview->save();
        } else {
            $update_overview = Overview::find($id);

            $update_overview->faculties = $request->faculties;
            $update_overview->departments = $request->departments;
            $update_overview->centres = $request->centres;
            $update_overview->programmes = $request->programmes;
            $update_overview->e_resources = $request->e_resources;
            $update_overview->mou = $request->mou;
            $update_overview->students = $request->students;
            $update_overview->scholars = $request->scholars;
            $update_overview->save();
        }
        toastr()->success('updated Successfully');
        return redirect()->back();
    }
}