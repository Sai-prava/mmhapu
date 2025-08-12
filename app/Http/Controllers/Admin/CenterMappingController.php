<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CenterMapping;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class CenterMappingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.center_mapping.index');
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
                'center_id' => 'required',
                'candidate' => 'required',
                'shift_id' => 'required',
            ]);
            foreach($request->candidate as $candidate_id)
            {
                $alreadyHave = CenterMapping::where('user_id',$candidate_id)->first();
                if($alreadyHave)
                {
                    $alreadyHave->update([
                        'center_id' => $request->center_id,
                        'shift_id' => $request->shift_id,
                    ]);

                }else{
                    
                    CenterMapping::create([
                        'user_id' => $candidate_id,
                        'center_id' => $request->center_id,
                        'shift_id' => $request->shift_id,
                    ]);
                }

            }
            toastr()->success('Center Mapping Added Successfully');
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
     * @param  \App\Models\CenterMapping  $centerMapping
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.center_mapping.index',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CenterMapping  $centerMapping
     * @return \Illuminate\Http\Response
     */
    public function edit(CenterMapping $centerMapping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CenterMapping  $centerMapping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CenterMapping $centerMapping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CenterMapping  $centerMapping
     * @return \Illuminate\Http\Response
     */
    public function destroy(CenterMapping $centerMapping)
    {
        //
    }
}
