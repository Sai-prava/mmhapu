<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentCategoryEntranceFee;
use Exception;
use Illuminate\Http\Request;

class DocumentCategoryEntranceFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                'document_category_id' => 'required',
                'entrance_fee_id' => 'required',
            ]);
            DocumentCategoryEntranceFee::create($request->all());
            toastr()->success('Document Category For Entrance Fee Added Successfully');
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
     * @param  \App\Models\DocumentCategoryEntranceFee  $documentCategoryEntranceFee
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentCategoryEntranceFee $documentCategoryEntranceFee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocumentCategoryEntranceFee  $documentCategoryEntranceFee
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentCategoryEntranceFee $documentCategoryEntranceFee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocumentCategoryEntranceFee  $documentCategoryEntranceFee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $documentCategoryEntranceFee = DocumentCategoryEntranceFee::find($id);
        $documentCategoryEntranceFee->update($request->all());
        toastr()->success('Document Category Updated successfully');
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocumentCategoryEntranceFee  $documentCategoryEntranceFee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documentCategoryEntranceFee = DocumentCategoryEntranceFee::find($id);
        $documentCategoryEntranceFee->delete();
        toastr()->success('Document Category Entrance Fee Deleted successfully');
        return redirect()->back();
    }
}
