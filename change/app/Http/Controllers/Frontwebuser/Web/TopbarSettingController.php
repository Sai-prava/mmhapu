<?php

namespace App\Http\Controllers\Frontwebuser\Web;

use App\Http\Controllers\Controller;
use App\Models\Web\TopbarSetting;
use Illuminate\Http\Request;
use Toastr;

class TopbarSettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // Module Data
    //     $this->title    = trans_choice('module_topbar_setting', 1);
    //     $this->route    = 'frontwebuser.topbar-setting'; // Adjust route as needed
    //     $this->view     = 'frontwebuser.web.topbar-setting'; // Adjust view path as needed
    //     $this->access   = 'frontwebuser-topbar-setting'; // Adjust access key as needed

    //     $this->middleware('permission:'.$this->access.'-view');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_topbar = TopbarSetting::first();
        // dd($all_topbar);
        return view('frontwebuser.web.topbar-setting.index',compact('all_topbar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Field Validation
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $id = $request->id;


        // -1 means no data row found
        if($id == -1){
            // Insert Data
            $topbarSetting = new TopbarSetting;
            $topbarSetting->address_title = $request->address_title;
            $topbarSetting->address = $request->address;
            $topbarSetting->email = $request->email;
            $topbarSetting->phone = $request->phone;
            $topbarSetting->working_hour = $request->working_hour;
            $topbarSetting->about_title = $request->about_title;
            $topbarSetting->about_summery = $request->about_summery;
            $topbarSetting->social_title = $request->social_title;
            $topbarSetting->social_status = $request->social_status;
            $topbarSetting->save();
        }
        else{
            // Update Data
            $topbarSetting = TopbarSetting::find($id);
            $topbarSetting->address_title = $request->address_title;
            $topbarSetting->address = $request->address;
            $topbarSetting->email = $request->email;
            $topbarSetting->phone = $request->phone;
            $topbarSetting->working_hour = $request->working_hour;
            $topbarSetting->about_title = $request->about_title;
            $topbarSetting->about_summery = $request->about_summery;
            $topbarSetting->social_title = $request->social_title;
            $topbarSetting->social_status = $request->social_status;
            $topbarSetting->save();
        }


        Toastr::success(__('msg_updated_successfully'), __('msg_success'));

        return redirect()->back();
    }
}
