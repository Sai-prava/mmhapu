<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\DegreeCertificate;
use App\Models\Document;
use App\Models\Session;
use App\Models\Student;
use App\Models\Course;
use App\Models\Degree;
use App\Models\UrgentMode;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class StudentsectionController extends Controller
{
    public function list()
    {
        $student = Student::all();
        return view('admin.web.student.list', compact('student'));
    }
    public function add()
    {
        return view('admin.web.student.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'url' => 'required',
        ]);
        $store = new Student;
        $store->icon = $request->icon;
        $store->heading = $request->heading;
        $store->url = $request->url;

        $store->save();
        toastr()->success('Student Added Successfully!');
        return redirect()->route('admin.student.list');
    }
    public function edit($id)
    {
        $edit = Student::find($id);
        return view('admin.web.student.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'url' => 'required',
        ]);
        $update = Student::find($request->id);
        $update->icon = $request->icon;
        $update->heading = $request->heading;
        $update->url = $request->url;
        $update->save();
        toastr()->success('Edited Successfully!');
        return redirect()->route('admin.student.list');
    }
    public function delete($id)
    {
        $delete = Student::find($id);
        if ($delete) {
            $delete->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->success('Something Wents Wrong !');
        return redirect()->back();
    }
    public function index()
    {
        $certificates = DegreeCertificate::all();
        foreach ($certificates as $certificate) {
            $documentIds = json_decode($certificate->document_id, true) ?? [];
            $certificate->documents = Document::whereIn('id', $documentIds)->get();
        }
        return view('admin.web.degree-certificate.list', compact('certificates'));
    }
    public function certificateAdd()
    {
        $documents = Document::all();
        $degree = Degree::all();
        return view('admin.web.degree-certificate.add', compact('documents', 'degree'));
    }
    public function certificateStore(Request $request)
    {
        $request->validate([
            'degree_id' => [
                'required',
                Rule::unique('degree_certificates')->where(function ($query) use ($request) {
                    return $query->where('change_type', $request->change_type);
                }),
            ],
            'price' => 'required',
        ], [
            'degree_id.unique' => 'The degree with this change type already exists.',
        ]);

        $store_degree = new DegreeCertificate();
        $store_degree->degree_id = $request->degree_id;
        $store_degree->change_type = $request->change_type;
        $store_degree->document_id = json_encode($request->document_id);
        $store_degree->price = $request->price;
        $store_degree->status = $request->has('status') ? 1 : 0;
        $store_degree->save();
        toastr()->success('Degree Certificate Added Successfully!');
        return redirect()->route('admin.certificate.index');
    }
    public function certificateEdit($id)
    {
        $edit_degree = DegreeCertificate::find($id);
        $documents = Document::all();
        $degree = Degree::all();
        return view('admin.web.degree-certificate.edit', compact('edit_degree', 'documents', 'degree'));
    }
    public function degreeUpdate(Request $request)
    {
        $request->validate([
            'degree_id' => [
                'required',
                Rule::unique('degree_certificates')->where(function ($query) use ($request) {
                    return $query->where('change_type', $request->change_type);
                })->ignore($request->id),
            ],
            'price' => 'required',
        ], [
            'degree.unique' => 'The degree with this change type already exists.',
        ]);

        $update_degree = DegreeCertificate::find($request->id);
        $update_degree->degree_id = $request->degree_id;
        $update_degree->change_type = $request->change_type;
        $update_degree->document_id = json_encode($request->document_id);
        $update_degree->price = $request->price;
        $update_degree->status = $request->has('status') ? 1 : 0;
        $update_degree->save();
        toastr()->success('Degree Certificate Updated Successfully!');
        return redirect()->route('admin.certificate.index');
    }
    public function certificateDelete($id)
    {
        $delete_degree = DegreeCertificate::find($id);
        if ($delete_degree) {
            $delete_degree->delete();
            toastr()->success('Degree Certificate Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong !');
        return redirect()->back();
    }

    public function session()
    {
        $course = Course::all();
        $session = Session::all();
        return view('admin.web.session.index', compact('session', 'course'));
    }
    public function sessionStore(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'session' => 'required',
        ]);
        $session_store = new Session();
        $session_store->course = $request->course;
        $session_store->session = $request->session;

        $session_store->save();

        toastr()->success('Session Added Successfully!');
        return redirect()->back();
    }
    public function sessionUpdate(Request $request)
    {
        $session_update = Session::find($request->id);

        $session_update->course = $request->course;
        $session_update->session = $request->session;

        $session_update->save();

        toastr()->success('Session Updated Successfully!');
        return redirect()->back();
    }
    public function sessionDelete($id)
    {
        $session_delete = Session::find($id);
        if ($session_delete) {
            $session_delete->delete();

            toastr()->success('Session Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong !');
        return redirect()->back();
    }
    public function urgentmodeIndex()
    {
        $urgent_mode = UrgentMode::get();
        return view('admin.web.urgent_mode.index', compact('urgent_mode'));
    }
    public function urgentmodeAdd()
    {
        return view('admin.web.urgent_mode.add');
    }
    public function urgentmodeStore(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);
        $store_urgent_mode = new UrgentMode();
        $store_urgent_mode->amount = $request->amount;
        $store_urgent_mode->save();
        toastr()->success('Urgent Mode Added Successfully!');
        return redirect()->route('admin.urgentmodeIndex');
    }

    public function certificateName()
    {
        $certificate_name = Degree::get();
        return view('admin.web.certificate_name.index', compact('certificate_name'));
    }

    public function certificateNameAdd()
    {
        return view('admin.web.certificate_name.add');
    }

    public function certificateNameStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $certificate_name = new Degree();
        $certificate_name->name = $request->name;
        $certificate_name->save();
        toastr()->success('Certificate name Added Successfully!');
        return redirect()->route('admin.certificateName');
    }
    public function certificateNameEdit($id)
    {
        $certificate_name = Degree::find($id);
        return view('admin.web.certificate_name.edit', compact('certificate_name'));
    }
    public function certificateNameUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $certificate_name = Degree::find($id);
        $certificate_name->name = $request->name;
        $certificate_name->save();
        toastr()->success('Certificate name Updated Successfully!');
        return redirect()->route('admin.certificateName');
    }
    public function certificateNameDelete($id)
    {
        $certificate_name = Degree::find($id);
        $certificate_name->delete();
        toastr()->success('Certificate name Deleted Successfully!');
        return redirect()->back();
    }
  
}
