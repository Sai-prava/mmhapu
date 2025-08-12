<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alim;
use App\Models\Bed;
use App\Models\Fazil;
use App\Models\KrcWithAicte;
use App\Models\KrcWithoutAicte;
use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    public function fazilList(){
        $fazil = Fazil::all();
        return view('admin.web.fazil.list', compact('fazil'));
    }
    public function fazilAdd(){
        return view('admin.web.fazil.add');
    }
    public function fazilStore(Request $request){
        $request->validate([
            'name'=>'required',
            'managment'=>'required',
            'regulating'=>'required',
            'course'=>'required',
            'intake'=>'required',
            'district'=>'required',
            'address'=>'required',
            'code'=>'required',
        ]);
        $fazilStore = new Fazil();
        $fazilStore->name = $request->name;
        $fazilStore->managment = $request->managment;
        $fazilStore->regulating = $request->regulating;
        $fazilStore->course = $request->course;
        $fazilStore->intake = $request->intake;
        $fazilStore->district = $request->district;
        $fazilStore->address = $request->address;
        $fazilStore->email = $request->email;
        $fazilStore->incharge = $request->incharge;
        $fazilStore->contact = $request->contact;
        $fazilStore->code = $request->code;
        // if($request->hasFile('resume')){
        //     $resume = $request->file('resume');
        //     $resumeName = time(). '_' . $resume->getClientOriginalName();
        //     $resume->move(public_path('uploads/fazil'), $resumeName);
        //     $fazilStore->resume = $resumeName;
        // }
        $fazilStore->save();
        toastr()->success('New Fazil Added Successfully.');
        return redirect()->route('admin.fazil.list');
    }
    public function fazilEdit($id){
        $fazilEdit = Fazil::find($id);
        return view('admin.web.fazil.edit', compact('fazilEdit'));
    }
    public function fazilUpdate(Request $request){
        $request->validate([
            'name'=>'required',
            'managment'=>'required',
            'regulating'=>'required',
            'course'=>'required',
            'intake'=>'required',
            'district'=>'required',
            'address'=>'required',
            'code'=>'required',
        ]);
        $fazilUpdate = Fazil::find($request->id);
        $fazilUpdate->name = $request->name;
        $fazilUpdate->managment = $request->managment;
        $fazilUpdate->regulating = $request->regulating;
        $fazilUpdate->course = $request->course;
        $fazilUpdate->intake = $request->intake;
        $fazilUpdate->district = $request->district;
        $fazilUpdate->address = $request->address;
        $fazilUpdate->email = $request->email;
        $fazilUpdate->incharge = $request->incharge;
        $fazilUpdate->contact = $request->contact;
        $fazilUpdate->code = $request->code;
        // if($request->hasFile('resume')){
        //     if($fazilUpdate->resume && file_exists(public_path('uploads/fazil/'. $fazilUpdate->resume))){
        //         unlink(public_path('uploads/fazil/'.  $fazilUpdate->resume));
        //     }
        //     $resume = $request->file('resume');
        //     $resumeName = time(). '_' . $resume->getClientOriginalName();
        //     $resume->move(public_path('uploads/fazil'), $resumeName);
        //     $fazilUpdate->resume = $resumeName;
        // }
        $fazilUpdate->save();
        toastr()->success('Fazil Updated Successfully');
        return redirect()->route('admin.fazil.list');
    }
    public function fazilDelete($id){
        $fazilDelete = Fazil::find($id);
        if($fazilDelete){
            if($fazilDelete->resume && file_exists(public_path('uploads/fazil/'. $fazilDelete->resume))){
                unlink(public_path('uploads/fazil/'. $fazilDelete->resume));
            }
            $fazilDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //Alim
    public function alimList(){
        $Alim = Alim::all();
        return view('admin.web.alim.list', compact('Alim'));
    }
    public function alimAdd(){
        return view('admin.web.alim.add');
    }
    public function alimStore(Request $request){
        $request->validate([
            'name'=>'required',
            'managment'=>'required',
            'regulating'=>'required',
            'course'=>'required',
            'intake'=>'required',
            'district'=>'required',
            'address'=>'required',
            'code'=>'required',
        ]);
        $alimStore = new Alim();
        $alimStore->name = $request->name;
        $alimStore->managment = $request->managment;
        $alimStore->regulating = $request->regulating;
        $alimStore->course = $request->course;
        $alimStore->intake = $request->intake;
        $alimStore->district = $request->district;
        $alimStore->address = $request->address;
        $alimStore->email = $request->email;
        $alimStore->incharge = $request->incharge;
        $alimStore->contact = $request->contact;
        $alimStore->code = $request->code;
        // if($request->hasFile('resume')){
        //     $resume = $request->file('resume');
        //     $resumeName = time(). '_' . $resume->getClientOriginalName();
        //     $resume->move(public_path('uploads/alim'), $resumeName);
        //     $alimStore->resume = $resumeName;
        // }
        $alimStore->save();
        toastr()->success('New Alim Added Successfully.');
        return redirect()->route('admin.alim.list');
    }
    public function alimEdit($id){
        $alimEdit = Alim::find($id);
        return view('admin.web.alim.edit', compact('alimEdit'));
    }
    public function alimUpdate(Request $request){
        $request->validate([
            'name'=>'required',
            'managment'=>'required',
            'regulating'=>'required',
            'course'=>'required',
            'intake'=>'required',
            'district'=>'required',
            'address'=>'required',
            'code'=>'required',
        ]);
        $alimUpdate = Alim::find($request->id);
        $alimUpdate->name = $request->name;
        $alimUpdate->managment = $request->managment;
        $alimUpdate->regulating = $request->regulating;
        $alimUpdate->course = $request->course;
        $alimUpdate->intake = $request->intake;
        $alimUpdate->district = $request->district;
        $alimUpdate->address = $request->address;
        $alimUpdate->email = $request->email;
        $alimUpdate->incharge = $request->incharge;
        $alimUpdate->contact = $request->contact;
        $alimUpdate->code = $request->code;
        // if($request->hasFile('resume')){
        //     if($alimUpdate->resume && file_exists(public_path('uploads/alim/'. $alimUpdate->resume))){
        //         unlink(public_path('uploads/alim/'.  $alimUpdate->resume));
        //     }
        //     $resume = $request->file('resume');
        //     $resumeName = time(). '_' . $resume->getClientOriginalName();
        //     $resume->move(public_path('uploads/alim'), $resumeName);
        //     $alimUpdate->resume = $resumeName;
        // }
        $alimUpdate->save();
        toastr()->success('Alim Updated Successfully');
        return redirect()->route('admin.alim.list');
    }
    public function alimDelete($id){
        $alimDelete = Alim::find($id);
        if($alimDelete){
            if($alimDelete->resume && file_exists(public_path('uploads/alim/'.$alimDelete->resume))){
                unlink(public_path('uploads/alim/'. $alimDelete->resume));
            }
            $alimDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //
    public function WithAicteList(){
        $WithAicte = KrcWithAicte::all();
        return view('admin.web.krc-with-aicte.list', compact('WithAicte'));
    }
    public function WithAicteAdd(){
        return view('admin.web.krc-with-aicte.add');
    }
    public function WithAicteStore(Request $request){
        $request->validate([
            'name'=>'required',
            'management'=>'required',
            'affiliating'=>'required',
            'course_name'=>'required',
            'intake'=>'required',
            'district'=>'required',
            'code'=>'required',
            'address'=>'required',
        ]);
        $WithAicteStore =new KrcWithAicte;
        // $WithAicteStore->designation = $request->designation;
        $WithAicteStore->file_no = $request->file_no;
        $WithAicteStore->name = $request->name;
        $WithAicteStore->management = $request->management;
        $WithAicteStore->affiliating = $request->affiliating;
        $WithAicteStore->course_name = $request->course_name;
        $WithAicteStore->intake = $request->intake;
        $WithAicteStore->session = $request->session;
        $WithAicteStore->district = $request->district;
        $WithAicteStore->email = $request->email;
        $WithAicteStore->incharge = $request->incharge;
        $WithAicteStore->contact = $request->contact;
        $WithAicteStore->code = $request->code;
        $WithAicteStore->address = $request->address;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/krc'), $resumeName);
            $WithAicteStore->resume = $resumeName;
        }
        $WithAicteStore->save();
        toastr()->success('New KRC With AICTE Recognition Added Successfully.');
        return redirect()->route('admin.krcWithAicte.list');
    }
    public function WithAicteEdit($id){
        $WithAicteEdit = KrcWithAicte::find($id);
        return view('admin.web.krc-with-aicte.edit', compact('WithAicteEdit'));
    }
    public function WithAicteUpdate(Request $request){
        $WithAicteUpdate = KrcWithAicte::find($request->id);
        $WithAicteUpdate->file_no = $request->file_no;
        $WithAicteUpdate->name = $request->name;
        $WithAicteUpdate->management = $request->management;
        $WithAicteUpdate->affiliating = $request->affiliating;
        $WithAicteUpdate->course_name = $request->course_name;
        $WithAicteUpdate->intake = $request->intake;
        $WithAicteUpdate->session = $request->session;
        $WithAicteUpdate->district = $request->district;
        $WithAicteUpdate->email = $request->email;
        $WithAicteUpdate->incharge = $request->incharge;
        $WithAicteUpdate->contact = $request->contact;
        $WithAicteUpdate->code = $request->code;
        $WithAicteUpdate->address = $request->address;
        if($request->hasFile('resume')){
            if($WithAicteUpdate->resume && file_exists(public_path('uploads/krc/'. $WithAicteUpdate->resume))){
                unlink(public_path('uploads/krc/'.  $WithAicteUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/krc'), $resumeName);
            $WithAicteUpdate->resume = $resumeName;
        }
        $WithAicteUpdate->save();
        toastr()->success('KRC With AICTE Recognition Updated Successfully');
        return redirect()->route('admin.krcWithAicte.list');
    }
    public function WithAicteDelete($id){
        $WithAicteDelete = KrcWithAicte::find($id);
        if($WithAicteDelete){
            if($WithAicteDelete->resume && file_exists(public_path('uploads/krc/'.$WithAicteDelete->resume))){
                unlink(public_path('uploads/krc/'. $WithAicteDelete->resume));
            }
            $WithAicteDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //
    public function WithoutAicteList(){
        $WithoutAicte = KrcWithoutAicte::all();
        return view('admin.web.krc-without-aicte.list', compact('WithoutAicte'));
    }
    public function WithoutAicteAdd(){
        return view('admin.web.krc-without-aicte.add');
    }
    public function WithoutAicteStore(Request $request){
        $request->validate([
            'name'=>'required',
            'management'=>'required',
            'affiliating'=>'required',
            'course_name'=>'required',
            'intake'=>'required',
            'district'=>'required',
            'code'=>'required',
            'address'=>'required',
        ]);
        $WithoutAicteStore =new KrcWithoutAicte;
        $WithoutAicteStore->file_no = $request->file_no;
        $WithoutAicteStore->name = $request->name;
        $WithoutAicteStore->management = $request->management;
        $WithoutAicteStore->affiliating = $request->affiliating;
        $WithoutAicteStore->course_name = $request->course_name;
        $WithoutAicteStore->intake = $request->intake;
        $WithoutAicteStore->session = $request->session;
        $WithoutAicteStore->district = $request->district;
        $WithoutAicteStore->email = $request->email;
        $WithoutAicteStore->incharge = $request->incharge;
        $WithoutAicteStore->contact = $request->contact;
        $WithoutAicteStore->code = $request->code;
        $WithoutAicteStore->address = $request->address;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/krc'), $resumeName);
            $WithoutAicteStore->resume = $resumeName;
        }
        $WithoutAicteStore->save();
        toastr()->success('New KRC Without AICTE Recognition Added Successfully.');
        return redirect()->route('admin.krcWithoutAicte.list');
    }
    public function WithoutAicteEdit($id){
        $WithoutAicteEdit = KrcWithoutAicte::find($id);
        return view('admin.web.krc-without-aicte.edit', compact('WithoutAicteEdit'));
    }
    public function WithoutAicteUpdate(Request $request){
        $WithoutAicteUpdate = KrcWithoutAicte::find($request->id);
        $WithoutAicteUpdate->file_no = $request->file_no;
        $WithoutAicteUpdate->name = $request->name;
        $WithoutAicteUpdate->management = $request->management;
        $WithoutAicteUpdate->affiliating = $request->affiliating;
        $WithoutAicteUpdate->course_name = $request->course_name;
        $WithoutAicteUpdate->intake = $request->intake;
        $WithoutAicteUpdate->session = $request->session;
        $WithoutAicteUpdate->district = $request->district;
        $WithoutAicteUpdate->email = $request->email;
        $WithoutAicteUpdate->incharge = $request->incharge;
        $WithoutAicteUpdate->contact = $request->contact;
        $WithoutAicteUpdate->code = $request->code;
        $WithoutAicteUpdate->address = $request->address;
        if($request->hasFile('resume')){
            if($WithoutAicteUpdate->resume && file_exists(public_path('uploads/krc/'. $WithoutAicteUpdate->resume))){
                unlink(public_path('uploads/krc/'.  $WithoutAicteUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/krc'), $resumeName);
            $WithoutAicteUpdate->resume = $resumeName;
        }
        $WithoutAicteUpdate->save();
        toastr()->success('KRC Without AICTE Recognition Updated Successfully');
        return redirect()->route('admin.krcWithoutAicte.list');
    }
    public function WithoutAicteDelete($id){
        $WithoutAicteDelete = KrcWithoutAicte::find($id);
        if($WithoutAicteDelete){
            if($WithoutAicteDelete->resume && file_exists(public_path('uploads/krc/'.$WithoutAicteDelete->resume))){
                unlink(public_path('uploads/krc/'. $WithoutAicteDelete->resume));
            }
            $WithoutAicteDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //B.Ed
    public function bedList(){
        $Bed = Bed::all();
        return view('admin.web.bed.list', compact('Bed'));
    }
    public function bedAdd(){
        return view('admin.web.bed.add');
    }
    public function bedStore(Request $request){
        $request->validate([
            'college_name'=>'required',
            'management'=>'required',
            'affiliting'=>'required',
            'intake'=>'required',
            'name'=>'required',
            'district'=>'required',
            'address'=>'required',
            'code'=>'required',
        ]);
        $bedStore =new Bed;
        $bedStore->file_no = $request->file_no;
        $bedStore->college_name = $request->college_name;
        $bedStore->management = $request->management;
        $bedStore->affiliting = $request->affiliting;
        $bedStore->intake = $request->intake;
        $bedStore->name = $request->name;
        $bedStore->district = $request->district;
        $bedStore->address = $request->address;
        $bedStore->email = $request->email;
        $bedStore->website = $request->website;
        $bedStore->director = $request->director;
        $bedStore->contact = $request->contact;
        $bedStore->code = $request->code;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/bed'), $resumeName);
            $bedStore->resume = $resumeName;
        }
        $bedStore->save();
        toastr()->success('New B.Ed Added Successfully.');
        return redirect()->route('admin.bed.list');
    }
    public function bedEdit($id){
        $bedEdit = Bed::find($id);
        return view('admin.web.bed.edit', compact('bedEdit'));
    }
    public function bedUpdate(Request $request){
        $request->validate([
            'file_no'=>'required',
            'college_name'=>'required',
            'management'=>'required',
            'affiliting'=>'required',
            'intake'=>'required',
            'name'=>'required',
            'district'=>'required',
            'address'=>'required',
            'email'=>'required',
            'website'=>'required',
            'director'=>'required',
            'contact'=>'required',
            'code'=>'required'
        ]);
        $bedUpdate = Bed::find($request->id);
        $bedUpdate->file_no = $request->file_no;
        $bedUpdate->college_name = $request->college_name;
        $bedUpdate->management = $request->management;
        $bedUpdate->affiliting = $request->affiliting;
        $bedUpdate->intake = $request->intake;
        $bedUpdate->name = $request->name;
        $bedUpdate->district = $request->district;
        $bedUpdate->address = $request->address;
        $bedUpdate->email = $request->email;
        $bedUpdate->website = $request->website;
        $bedUpdate->director = $request->director;
        $bedUpdate->contact = $request->contact;
        $bedUpdate->code = $request->code;
        if($request->hasFile('resume')){
            if($bedUpdate->resume && file_exists(public_path('uploads/bed/'. $bedUpdate->resume))){
                unlink(public_path('uploads/bed/'.  $bedUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/bed'), $resumeName);
            $bedUpdate->resume = $resumeName;
        }
        $bedUpdate->save();
        toastr()->success('B.Ed Updated Successfully');
        return redirect()->route('admin.bed.list');
    }
    public function bedDelete($id){
        $bedDelete = Bed::find($id);
        if($bedDelete){
            if($bedDelete->resume && file_exists(public_path('uploads/bed/'.$bedDelete->resume))){
                unlink(public_path('uploads/bed/'. $bedDelete->resume));
            }
            $bedDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
