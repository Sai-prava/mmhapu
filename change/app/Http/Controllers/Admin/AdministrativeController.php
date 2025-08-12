<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficer;
use App\Models\AuthoritiesTitle;
use App\Models\Authority;
use App\Models\Position;
use App\Models\UniversityAdministration;
use App\Models\UniversityAdministrationTitle;
use Illuminate\Http\Request;

class AdministrativeController extends Controller
{
    public function officersList()
    {
        $officersList = AdministrativeOfficer::all();
        return view('admin.web.administrative-officers.list', compact('officersList'));
    }
    public function officersAdd()
    {
        return view('admin.web.administrative-officers.add');
    }
    public function officersStore(Request $request)
    {
        $request->validate([
            'designation' => 'required',
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'resume' => 'required',
        ]);
        $officersStore = new AdministrativeOfficer;
        $officersStore->designation = $request->designation;
        $officersStore->name = $request->name;
        $officersStore->email = $request->email;
        $officersStore->contact = $request->contact;
        if ($request->hasFile('resume')) {
            $resume = $request->file('resume');
            $resumeName = time() . '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/administrative'), $resumeName);
            $officersStore->resume = $resumeName;
        }
        $officersStore->save();
        toastr()->success('New Administrative Officers Added Successfully.');
        return redirect()->route('admin.administrative_officers.list');
    }
    public function officersEdit($id)
    {
        $officersEdit = AdministrativeOfficer::find($id);
        return view('admin.web.administrative-officers.edit', compact('officersEdit'));
    }
    public function officersUpdate(Request $request)
    {
        $request->validate([
            'designation' => 'required',
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required'
        ]);
        $officersUpdate = AdministrativeOfficer::find($request->id);
        $officersUpdate->designation = $request->designation;
        $officersUpdate->name = $request->name;
        $officersUpdate->email = $request->email;
        $officersUpdate->contact = $request->contact;
        if ($request->hasFile('resume')) {
            if ($officersUpdate->resume && file_exists(public_path('uploads/administrative/' . $officersUpdate->resume))) {
                unlink(public_path('uploads/administrative/' .  $officersUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time() . '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/administrative'), $resumeName);
            $officersUpdate->resume = $resumeName;
        }
        $officersUpdate->save();
        toastr()->success('Administrative Officers Updated Successfully');
        return redirect()->route('admin.administrative_officers.list');
    }
    public function officersDelete($id)
    {
        $officersDelete = AdministrativeOfficer::find($id);
        if ($officersDelete) {
            if ($officersDelete->resume && file_exists(public_path('uploads/administrative/' . $officersDelete->resume))) {
                unlink(public_path('uploads/administrative/' . $officersDelete->resume));
            }
            $officersDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //
    public function university_officers_titleList()
    {
        $titles = UniversityAdministrationTitle::all();
        return view('admin.web.university-officers.title.index', compact('titles'));
    }
    public function university_officers_titleStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $university_officers_titleStore = new UniversityAdministrationTitle;
        $university_officers_titleStore->title = $request->title;

        $university_officers_titleStore->save();
        toastr()->success('New University Officer Title Added Successfully');
        return redirect()->route('admin.university_officers_title.list');
    }
    public function university_officers_titleUpdate(Request $request)
    {
        $university_officers_titleUpdate = UniversityAdministrationTitle::find($request->id);
        $university_officers_titleUpdate->title = $request->title;

        $university_officers_titleUpdate->save();
        toastr()->success('University Officer Title Updated Successfully');
        return redirect()->route('admin.university_officers_title.list');
    }
    public function university_officers_titleDelete($id)
    {
        $university_officers_titleDelete = UniversityAdministrationTitle::find($id);
        if ($university_officers_titleDelete) {
            $university_officers_titleDelete->delete();
            UniversityAdministration::where('title_id', $id)->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //University Adminstative
    public function university_officersList()
    {
        $university_officersList = UniversityAdministration::all();
        return view('admin.web.university-officers.officers.list', compact('university_officersList'));
    }
    public function university_officersAdd()
    {
        $add = UniversityAdministrationTitle::all();
        return view('admin.web.university-officers.officers.add', compact('add'));
    }
    public function university_officersStore(Request $request)
    {
        $request->validate([
            'title_id' => 'required',
            'designation' => 'required',
            'name' => 'required',
            'resume' => 'required',
            'image' => 'required',
        ]);
        $university_officersStore = new UniversityAdministration();
        $university_officersStore->title_id = $request->title_id;
        $university_officersStore->designation = $request->designation;
        $university_officersStore->name = $request->name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/universityOfficer'), $imageName);
            $university_officersStore->image = $imageName;
        }
        if ($request->hasFile('resume')) {
            $resume = $request->file('resume');
            $resumeName = time() . '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/universityOfficer'), $resumeName);
            $university_officersStore->resume = $resumeName;
        }
        $university_officersStore->save();
        toastr()->success('New University Administration Added Successfully.');
        return redirect()->route('admin.university_officers.list');
    }
    public function university_officersEdit($id)
    {
        $edit = UniversityAdministrationTitle::all();
        $university_officersEdit = UniversityAdministration::find($id);
        return view('admin.web.university-officers.officers.edit', compact('university_officersEdit', 'edit'));
    }
    public function university_officersUpdate(Request $request)
    {
        $request->validate([
            'title_id' => 'required',
            'designation' => 'required',
            'name' => 'required'
        ]);
        $university_officersUpdate = UniversityAdministration::find($request->id);
        $university_officersUpdate->title_id = $request->title_id;
        $university_officersUpdate->designation = $request->designation;
        $university_officersUpdate->name = $request->name;
        if ($request->hasFile('image')) {
            if ($university_officersUpdate->image && file_exists(public_path('uploads/universityOfficer/' . $university_officersUpdate->image))) {
                unlink(public_path('uploads/universityOfficer/' . $university_officersUpdate->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/universityOfficer'), $imageName);
            $university_officersUpdate->image = $imageName;
        }
        if ($request->hasFile('resume')) {
            if ($university_officersUpdate->resume && file_exists(public_path('uploads/universityOfficer/' . $university_officersUpdate->resume))) {
                unlink(public_path('uploads/universityOfficer/' . $university_officersUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time() . '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/universityOfficer'), $resumeName);
            $university_officersUpdate->resume = $resumeName;
        }
        $university_officersUpdate->save();

        toastr()->success('University Administration Updated Successfully');
        return redirect()->route('admin.university_officers.list');
    }
    public function university_officersDelete($id)
    {
        $university_officersDelete = UniversityAdministration::find($id);
        if ($university_officersDelete) {
            if ($university_officersDelete->image && file_exists(public_path('uploads/universityOfficer/' . $university_officersDelete->image))) {
                unlink(public_path('uploads/universityOfficer/' . $university_officersDelete->image));
            }
            if ($university_officersDelete->resume && file_exists(public_path('uploads/universityOfficer/' . $university_officersDelete->resume))) {
                unlink(public_path('uploads/universityOfficer/' . $university_officersDelete->resume));
            }
            $university_officersDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //Authorities title
    public function authoritiesList()
    {
        $authorities = AuthoritiesTitle::all();
        return view('admin.web.authorities.title.index', compact('authorities'));
    }
    public function authoritiesStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $authoritiesStore = new AuthoritiesTitle();
        $authoritiesStore->title = $request->title;
        $authoritiesStore->save();
        toastr()->success('New University Authorities Added Successfully');
        return redirect()->back();
    }
    public function authoritiesUpdate(Request $request)
    {
        $authoritiesUpdate = AuthoritiesTitle::find($request->id);
        $authoritiesUpdate->title = $request->title;
        $authoritiesUpdate->save();
        toastr()->success('University Authorities Updated Successfully.');
        return redirect()->back();
    }
    public function authoritiesDelete($id)
    {
        $authoritiesDelete = AuthoritiesTitle::find($id);
        if ($authoritiesDelete) {
            $authoritiesDelete->delete();
            Position::where('title_id', $id)->delete();
            Authority::where('title_id', $id)->delete();
            toastr()->success('Deleted Successfully.');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //Authorities Position
    public function positionList()
    {

        $titles = AuthoritiesTitle::all();
        $positionList = Position::all();
        return view('admin.web.authorities.position.index', compact('titles', 'positionList'));
    }
    public function positionStore(Request $request)
    {
        $request->validate([
            'title_id' => 'required',
            'position' => 'required',
        ]);
        $positionStore = new Position();
        $positionStore->title_id = $request->title_id;
        $positionStore->position = $request->position;
        $positionStore->save();
        toastr()->success('New Authorities Position Added Successfully');
        return redirect()->back();
    }
    public function positionUpdate(Request $request)
    {
        $positionUpdate = Position::find($request->id);
        $positionUpdate->title_id = $request->title_id;
        $positionUpdate->position = $request->position;
        $positionUpdate->save();
        toastr()->success('Authorities Position Updated Successfully');
        return redirect()->back();
    }
    public function positionDelete($id)
    {
        $positionDelete = Position::find($id);
        if ($positionDelete) {
            $positionDelete->delete();
            Authority::where('position_id', $id)->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    public function authorityList()
    {
        $authorityList = Authority::all();
        return view('admin.web.authorities.authority.list', compact('authorityList'));
    }
    public function authorityAdd()
    {
        $add = Position::all();
        $titles = AuthoritiesTitle::all();
        return view('admin.web.authorities.authority.add', compact('add', 'titles'));
    }
    public function authorityStore(Request $request)
    {
        $request->validate([
            'title_id' => 'required',
            'position_id' => 'required',
            'name' => 'required',
            'designation' => 'required',
        ]);
        $authorityStore = new Authority;
        $authorityStore->title_id = $request->title_id;
        $authorityStore->position_id = $request->position_id;
        $authorityStore->name = $request->name;
        $authorityStore->designation = $request->designation;
        $authorityStore->save();
        toastr()->success('New University Autherity Added Successfully');
        return redirect()->route('admin.authority.list');
    }
    public function authorityEdit($id)
    {
        $authorityEdit = Authority::find($id);
        $titles = AuthoritiesTitle::all();
        $edit = Position::where('title_id', $authorityEdit->title_id)->get();
        return view('admin.web.authorities.authority.edit', compact('authorityEdit', 'edit', 'titles'));
    }
    public function authorityUpdate(Request $request)
    {
        $request->validate([
            'title_id' => 'required',
            'position_id' => 'required',
            'name' => 'required',
            'designation' => 'required',
        ]);
        $authorityUpdate = Authority::find($request->id);
        $authorityUpdate->title_id = $request->title_id;
        $authorityUpdate->position_id  = $request->position_id;
        $authorityUpdate->name  = $request->name;
        $authorityUpdate->designation  = $request->designation;
        $authorityUpdate->save();
        toastr()->success('University Autherity Updated Successfully');
        return redirect()->route('admin.authority.list');
    }
    public function authorityDelete($id)
    {
        $authorityDelete = Authority::find($id);
        if ($authorityDelete) {
            $authorityDelete->delete();
            toastr()->success('Deleted Successfully.');
            return redirect()->back();
        }
        toastr()->error('Someting wents wrong.');
        return redirect()->back();
    }
    public function getPosition(Request $request)
    {
        $getPosition = Position::where('title_id', $request->title_id)->get();
        return response()->json($getPosition);
    }
}
