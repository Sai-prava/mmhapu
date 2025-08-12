<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GatewayDetail;
use Exception;
use Illuminate\Http\Request;

class GatewayDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gateway_detail.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gateway_detail.create');
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
            if($request->user_id)
            {
                $isAlready = GatewayDetail::where('user_id',$request->user_id)
                                        ->where('type',$request->type)->first();
            }else{
                $isAlready = GatewayDetail::whereNull('user_id')
                            ->where('type',$request->type)->first();
            }
            if($isAlready)
            {
                toastr()->error("Gateway Already Added!");
                return redirect()->back();
            }
            GatewayDetail::create($request->all());
            toastr()->success('Gateway Added Successfully');
            return redirect()->to(route('admin.gateway.index'));
        }catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GatewayDetail  $gatewayDetail
     * @return \Illuminate\Http\Response
     */
    public function show(GatewayDetail $gatewayDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GatewayDetail  $gatewayDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gateway = GatewayDetail::find($id);
        return view('admin.gateway_detail.edit',compact('gateway'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GatewayDetail  $gatewayDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $gatewayDetail = GatewayDetail::find($id);
        $gatewayDetail->update($request->all());
        toastr()->success('Gateway Detail Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GatewayDetail  $gatewayDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gatewayDetail = GatewayDetail::find($id);
        $gatewayDetail->delete();
        toastr()->success('Gateway Detail Deleted successfully');
        return redirect()->back();
    }
}
