<?php

namespace App\Http\Controllers\Prospect;

use App\Http\Controllers\Controller;
use App\Models\CenterMapping;
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
        return view('prospect.center_mapping.index');
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
            CenterMapping::create($request->all());
            toastr()->success('Candiate Center Mapping Added Successfully');
            return redirect()->to(route('prospect.dashboard.index'));
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
    public function show(CenterMapping $centerMapping)
    {
        //
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
