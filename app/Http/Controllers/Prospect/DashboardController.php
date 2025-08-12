<?php

namespace App\Http\Controllers\Prospect;

use App\Helpers\PaymentGateway;
use App\Http\Controllers\Controller;
use App\Models\DocumentCategory;
use App\Models\GatewayDetail;
use App\Models\PaymentHistory;
use App\Models\StudentAcademicQualification;
use App\Models\StudentDocument;
use App\Models\StudentProfile;
use App\Models\StudentProfileAddress;
use App\Services\ProspectApplicationService;
use App\Services\RazorPayService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('prospect.dashboard.index-ajax');
    }
    public function studentProfileUpdate(Request $request)
    {
        $studentProfile = Auth::user()->studentProfile;
        $studentProfile->update($request->all());
        Auth::user()->update([
            'steps' => Auth::user()->steps + 1
        ]);
        toastr()->success('Student Profile Updated successfully');
        return redirect()->back(); 
    }
    public function studentProfileCreate(Request $request)
    {
        $studentProfile = StudentProfile::create($request->all());
        foreach($request->premise_name as $key => $premise_name)
        {
            if($request->same_as_temparory && $key == 1)
            {
                $country_id = $request->country_id[0];
                $state_id = $request->state_id[0];
            }else{
                $country_id = $request->country_id[$key];
                $state_id = $request->state_id[$key];
            }
            StudentProfileAddress::create([
                'premise_name' => @$premise_name,
                'plot_no' => @$request->plot_no[$key],
                'type' => @$request->type[$key],
                'locality' => @$request->locality[$key],
                'sub_locality' => @$request->sub_locality[$key],
                'landmark' => @$request->landmark[$key],
                'village' => @$request->village[$key],
                'post_office' => @$request->post_office[$key],
                'police_station' => @$request->police_station[$key],
                'country_id' => @$country_id,
                'state_id' => @$state_id,
                'pin' => @$request->pin[$key],
                'student_profile_id' => @$studentProfile->id,
                'user_id' => Auth::user()->id,
            ]);
        }
        foreach($request->name_of_exam as $index => $name_of_exam)
        {
            StudentAcademicQualification::create([
                'name_of_exam' => @$name_of_exam,
                'name_of_board' => @$request->name_of_board[$index],
                'attended_school' => @$request->attended_school[$index],
                'passing_year' => @$request->passing_year[$index],
                'total_marks' => @$request->total_marks[$index],
                'marks' => @$request->marks[$index],
                'percentage' => @$request->percentage[$index],
                'user_id' => Auth::user()->id,
            ]);
        }
        $files = $request->file('document');
        foreach($request->document_category_id as $category_index => $document_category_id)
        {
            if(array_key_exists($category_index, $files))
            {
                if($document_category_id == '1' || $document_category_id == '2' || $document_category_id == '3' )
                {
                    if($files[$category_index]->extension() == 'png' || $files[$category_index]->extension() == 'jpeg' || $files[$category_index]->extension() == 'jpg' )
                    {
                        StudentDocument::create([
                            'document_category_id' => @$document_category_id,
                            'document' => @$request->document[$category_index],
                            'user_id' => Auth::user()->id,
                        ]);
                    }

                }else{
                    if($files[$category_index]->extension() == 'pdf')
                    {
                        StudentDocument::create([
                            'document_category_id' => @$document_category_id,
                            'document' => @$request->document[$category_index],
                            'user_id' => Auth::user()->id,
                        ]);
                    }

                }
            }
        }
        PaymentGateway::proccess();
        toastr()->success('Student Application Store successfully');
        return redirect()->route('prospect.payment.process'); 
    }
    // public function studentProfileCreate(Request $request)
    // {
    //     StudentProfile::create($request->all());
    //     Auth::user()->update([
    //         'steps' => Auth::user()->steps + 1
    //     ]);
    //     toastr()->success('Student Application Store successfully');
    //     return redirect()->back(); 
    // }
    public function studentAddressUpdate(Request $request)
    {
        $studentProfile = Auth::user()->studentProfile;
        $studentProfile->update($request->all());
        foreach($request->address_id as $key => $address_id)
        {
            $studentAddress = StudentProfileAddress::find($address_id);
            $studentAddress->update([
                'premise_name' => @$request->premise_name[$key],
                'plot_no' => @$request->plot_no[$key],
                'locality' => @$request->locality[$key],
                'sub_locality' => @$request->sub_locality[$key],
                'landmark' => @$request->landmark[$key],
                'village' => @$request->village[$key],
                'post_office' => @$request->post_office[$key],
                'police_station' => @$request->police_station[$key],
                'country_id' => @$request->country_id[$key],
                'state_id' => @$request->state_id[$key],
                'pin' => @$request->pin[$key],
            ]);
        }
        Auth::user()->update([
            'steps' => Auth::user()->steps + 1
        ]);
        toastr()->success('Student Profile Address Updated successfully');
        return redirect()->back(); 
    }
    public function studentAddressCreate(Request $request)
    {
        $studentProfile = Auth::user()->studentProfile;
        $studentProfile->update($request->all());
        foreach($request->premise_name as $key => $premise_name)
        {
            if($request->same_as_temparory && $key == 1)
            {
                $country_id = $request->country_id[0];
                $state_id = $request->state_id[0];
            }else{
                $country_id = $request->country_id[$key];
                $state_id = $request->state_id[$key];
            }
            StudentProfileAddress::create([
                'premise_name' => @$premise_name,
                'plot_no' => @$request->plot_no[$key],
                'type' => @$request->type[$key],
                'locality' => @$request->locality[$key],
                'sub_locality' => @$request->sub_locality[$key],
                'landmark' => @$request->landmark[$key],
                'village' => @$request->village[$key],
                'post_office' => @$request->post_office[$key],
                'police_station' => @$request->police_station[$key],
                'country_id' => @$country_id,
                'state_id' => @$state_id,
                'pin' => @$request->pin[$key],
                'student_profile_id' => @$studentProfile->id,
                'user_id' => Auth::user()->id,
            ]);
        }
        Auth::user()->update([
            'steps' => Auth::user()->steps + 1
        ]);
        toastr()->success('Student Profile Address Stored successfully');
        return redirect()->back(); 
    }
    public function studentQualificationCreate(Request $request)
    {
        foreach($request->name_of_exam as $index => $name_of_exam)
        {
            StudentAcademicQualification::create([
                'name_of_exam' => @$name_of_exam,
                'name_of_board' => @$request->name_of_board[$index],
                'attended_school' => @$request->attended_school[$index],
                'passing_year' => @$request->passing_year[$index],
                'total_marks' => @$request->total_marks[$index],
                'marks' => @$request->marks[$index],
                'percentage' => @$request->percentage[$index],
                'user_id' => Auth::user()->id,
            ]);
        }
        Auth::user()->update([
            'steps' => Auth::user()->steps + 1
        ]);
        toastr()->success('Student Qualification Stored successfully');
        return redirect()->back(); 
    }
    public function studentQualificationUpdate(Request $request)
    {
        foreach($request->name_of_exam as $index => $name_of_exam)
        {
            if($request->qualification_id[$index])
            { 
                $qualification = StudentAcademicQualification::find($request->qualification_id[$index]);
                $qualification->update([
                    'name_of_exam' => @$name_of_exam,
                    'name_of_board' => @$request->name_of_board[$index],
                    'attended_school' => @$request->attended_school[$index],
                    'passing_year' => @$request->passing_year[$index],
                    'total_marks' => @$request->total_marks[$index],
                    'marks' => @$request->marks[$index],
                    'percentage' => @$request->percentage[$index],
                ]);

            }else{    
                StudentAcademicQualification::create([
                    'name_of_exam' => @$name_of_exam,
                    'name_of_board' => @$request->name_of_board[$index],
                    'attended_school' => @$request->attended_school[$index],
                    'passing_year' => @$request->passing_year[$index],
                    'total_marks' => @$request->total_marks[$index],
                    'marks' => @$request->marks[$index],
                    'percentage' => @$request->percentage[$index],
                    'user_id' => Auth::user()->id,
                ]);
            }
        }
        Auth::user()->update([
            'steps' => Auth::user()->steps + 1
        ]);
        toastr()->success('Student Qualification Stored successfully');
        return redirect()->back(); 
    }
    public function studentDocumentCreate(Request $request)
    {
        try{
            $files = $request->file('document');
            foreach($request->document_category_id as $index => $document_category_id)
            {
                if(array_key_exists($index, $files))
                {
                    if($document_category_id == '1' || $document_category_id == '2' || $document_category_id == '3' )
                    {
                       if($files[$index]->extension() != 'png' && $files[$index]->extension() != 'jpeg' && $files[$index]->extension() != 'jpg' )
                       {
                            toastr()->error("The document must be image type");
                            return back();
                       }
    
                    }else{
                        if($files[$index]->extension() != 'pdf')
                        {
                            toastr()->error("The document must be pdf type");
                            return back();
                        }
    
                    }
                }
            }
            foreach($request->document_category_id as $category_index => $document_category_id)
            {
                if(array_key_exists($category_index, $files))
                {
                    StudentDocument::create([
                        'document_category_id' => @$document_category_id,
                        'document' => @$request->document[$category_index],
                        'user_id' => Auth::user()->id,
                    ]);
                }
            }
            Auth::user()->update([
                'steps' => Auth::user()->steps + 1
            ]);
            toastr()->success('Student Document Stored successfully');
            return redirect()->route('prospect.payment.process'); 
        }catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }
    public function studentDocumentUpdate(Request $request)
    {
        try{
            $files = $request->file('document');
            foreach($request->document_category_id as $index => $document_category_id)
            {
                if(array_key_exists($index, $files))
                {
                    if($document_category_id == '1' || $document_category_id == '2' || $document_category_id == '3' )
                    {
                       if($files[$index]->extension() != 'png' && $files[$index]->extension() != 'jpeg' && $files[$index]->extension() != 'jpg' )
                       {
                            toastr()->error("The document must be image type");
                            return back();
                       }
    
                    }else{
                        if($files[$index]->extension() != 'pdf')
                        {
                            toastr()->error("The document must be pdf type");
                            return back();
                        }
    
                    }
                }
            }
            foreach($request->document_category_id as $category_index => $document_category_id)
            {
                if(array_key_exists($category_index, $files))
                {
                    $category = DocumentCategory::find($document_category_id);
                    if($category->document())
                    {
                        $document = $category->document();
                        $document->update([
                            'document_category_id' => @$document_category_id,
                            'document' => @$request->document[$category_index],
                            'user_id' => Auth::user()->id,
                        ]);
                    }else{
                        StudentDocument::create([
                            'document_category_id' => @$document_category_id,
                            'document' => @$request->document[$category_index],
                            'user_id' => Auth::user()->id,
                        ]);
                    }
                }
                    
            }
            Auth::user()->update([
                'steps' => Auth::user()->steps + 1
            ]);
            toastr()->success('Information Added Successfully');
            return redirect()->back();
        }catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }
    public function downloadFile($id)
    {
        $document = StudentDocument::find($id);
        $files = public_path(). "$document->document";
        return Response::download($files);
    }
    public function getQualificationFields(Request $request)
    {
        $key = $request->key;
        $html = view('prospect.dashboard.partials.academic_qualification_fields', compact('key'))->render();
        return response([
            'html' => $html,
        ], 200);
    }
    public function getBackSteps()
    {
        
        Auth::user()->update([
            'steps' => Auth::user()->steps - 1
        ]);
        return response([
            'success' => true,
        ], 200);
    }

    public function generateApllicationForm(Request $request){
        // retreive all records from db
        $pdf = PDF::loadView('prospect.application.pdf_form');
        // download PDF file with download method
        return $pdf->stream(Auth::user()->name.'.pdf');
    }
    
    public function admitCard(){
        return view('prospect.application.admit_card');
    }
    
    public function payment_callback(Request $request){
        $merchant_id = config('services.razor_pay.merchant_id');
        $merchant_sub_id = config('services.razor_pay.merchant_sub_id');
        $sign_key = config('services.razor_pay.sign_key');
        $encryption_key = hash('sha256', config('services.razor_pay.encryption_key'), true);
        $encryption_iv = config('services.razor_pay.encryption_iv');

        $responsejson = $request->resjson;
        Log::info("txninit response received : ".$responsejson);
        $decodedVal = json_decode($responsejson);
        $retData = $decodedVal->data;
        $res = PaymentGateway::pkcs5_unpad(openssl_decrypt ( base64_decode($retData) , 'AES-256-CBC' , $encryption_key ,OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, $encryption_iv));
        Log::info(" txninit service response after decryption: ".$res);
        $decodedData = json_decode($res);
        if(property_exists($decodedData,"errorcd")){
            $errorcd = $decodedData->errorcd;
        }
        
        if(isset($errorcd) && $errorcd != NULL){
            Log::error("Server error ! Please contact your website Administrator! Error Code : ".$errorcd);
        }else{
            $trackid = $decodedData->trackid;  //ensure to save in db
            $txnstatus = $decodedData->txnstatus; //ensure to save in db
            $merchanttxnid = $decodedData->merchanttxnid;
            if($trackid!=NULL)
            {
                PaymentHistory::where('user_id',$decodedData->udf1)->update([
                    'track_id'   => $trackid,
                    'status' => $txnstatus,
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);
                if($txnstatus=="SUCCESS"){
                    Log::info("Txn is Successfull !");
                    toastr()->success('Payment Successfull.');
                    return redirect()->route("prospect.dashboard.index");
                }else if($txnstatus=="FAILURE"){
                    Log::info("Txn has failed !");
                    toastr()->error('Transaction Failed.');
                    return redirect()->route("prospect.dashboard.index");
                }else if($txnstatus=="AWAITED"){
                    Log::info("Txn status is awaited ! Please check after some time !");
                    toastr()->info('Transaction status is awaited ! Please check after some time !');
                    return redirect()->route("prospect.dashboard.index");
                }
            }
        }
        toastr()->error('Something Went Wrong.');
        return redirect()->route("prospect.dashboard.index");
    }
    public function stepOneStore(Request $request)
    {
        try{
            $this->validate($request,[
                'first_name' => 'required',
                'father_first_name' => 'required',
                'mother_first_name' => 'required',
                'day' => 'required|numeric',
                'month' => 'required|numeric',
                'year' => 'required|numeric',
                'phone' => 'required',
                'alternative_phone' => 'required',
                'email' => 'required',
                'aadhar_no' => 'required',
                'user_id' => 'required',
            ]);
            $application_process = (new ProspectApplicationService())->mapStepOneData($request);
            $request->session()->put('application_process', $application_process);
            $html = view('prospect.dashboard.ajax_partials.new_basic_information')->render();
            return response([
                "success" => true,
                "html" => $html,
            ], 200);
        }catch (Exception $e)
        {
            return response([
                "success" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }
    public function stepTwoStore(Request $request)
    {
        try{
            if($request->same_as_temparory)
            {
                $this->validate($request,[
                    'mother_tongue' => 'required',
                    'locality.0' => 'required',
                    'post_office.0' => 'required',
                    'police_station.0' => 'required',
                    'country_id.0' => 'required',
                    'state_id.0' => 'required',
                    'pin.0' => 'required',
                ]);
            }else{
                $this->validate($request,[
                    'mother_tongue' => 'required',
                    'locality.*' => 'required',
                    'post_office.*' => 'required',
                    'police_station.*' => 'required',
                    'country_id.*' => 'required',
                    'state_id.*' => 'required',
                    'pin.*' => 'required',
                ]);
            }
            $application_process = (new ProspectApplicationService())->mapStepTwoData($request);
            $request->session()->put('application_process', $application_process);
            $html = view('prospect.dashboard.ajax_partials.academic_qualification')->render();
            return response([
                "success" => true,
                "html" => $html,
            ], 200);
        }catch (Exception $e)
        {
            return response([
                "success" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }
    public function stepThreeStore(Request $request)
    {
        try{
            $this->validate($request,[
                'name_of_exam.*' => 'required',
                'name_of_board.*' => 'required',
                'attended_school.*' => 'required',
                'passing_year.*' => 'required',
                'total_marks.*' => 'required',
                'marks.*' => 'required',
                'percentage.*' => 'required',
            ]);
            $application_process = (new ProspectApplicationService())->mapStepThreeData($request);
            $request->session()->put('application_process', $application_process);
            $html = view('prospect.dashboard.ajax_partials.documents_uploaded')->render();
            return response([
                "success" => true,
                "html" => $html,
            ], 200);
        }catch (Exception $e)
        {
            return response([
                "success" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }
    public function stepFourStore(Request $request)
    {
        try{
            $this->validate($request,[
                'document_category_id.*' => 'required',
            ]);                
            $files = $request->file('document');
            foreach($request->document_category_id as $category_index => $document_category_id)
            {
                if(array_key_exists($document_category_id, $files))
                {
                    $fileTypes = explode(', ', $request->file_type[$category_index]);
                    if(!in_array($files[$document_category_id]->extension(),$fileTypes))
                    {
                        toastr()->error($files[$document_category_id]->extension().' is not allowed for respective document category.');
                        return redirect()->back(); 
                    }
                }
            }
            $data = $request->session()->get('application_process');
            DB::beginTransaction();
            $dataArray = (array) $data;
            $studentProfile = StudentProfile::create($dataArray);
            foreach($data->premise_name as $key => $premise_name)
            {
                if($data->same_as_temparory && $key == 1)
                {
                    $country_id = @$data->country_id[0];
                    $state_id = @$data->state_id[0];
                    $city_id = @$data->city_id[0];
                }else{
                    $country_id = $data->country_id[$key];
                    $state_id = @$data->state_id[$key] ? $data->state_id[$key] : null;
                    $city_id = @$data->city_id[$key] ? $data->city_id[$key] : null;
                }
                StudentProfileAddress::create([
                    'premise_name' => @$premise_name,
                    'plot_no' => @$data->plot_no[$key],
                    'type' => @$data->type[$key],
                    'locality' => @$data->locality[$key],
                    'sub_locality' => @$data->sub_locality[$key],
                    'landmark' => @$data->landmark[$key],
                    'village' => @$data->village[$key],
                    'post_office' => @$data->post_office[$key],
                    'police_station' => @$data->police_station[$key],
                    'country_id' => @$country_id,
                    'state_id' => @$state_id,
                    'city_id' => @$city_id,
                    'pin' => @$data->pin[$key],
                    'student_profile_id' => @$studentProfile->id,
                    'user_id' => Auth::user()->id,
                ]);
            }
            foreach($data->name_of_exam as $index => $name_of_exam)
            {
                StudentAcademicQualification::create([
                    'name_of_exam' => @$name_of_exam,
                    'name_of_board' => @$data->name_of_board[$index],
                    'attended_school' => @$data->attended_school[$index],
                    'passing_year' => @$data->passing_year[$index],
                    'total_marks' => @$data->total_marks[$index],
                    'marks' => @$data->marks[$index],
                    'percentage' => @$data->percentage[$index],
                    'user_id' => Auth::user()->id,
                ]);
            }
            $files = $request->file('document');
            foreach($request->document_category_id as $category_index => $document_category_id)
            {
                if(array_key_exists($document_category_id, $files))
                {
                    StudentDocument::create([
                        'document_category_id' => @$document_category_id,
                        'document' => @$request->document[$document_category_id],
                        'user_id' => Auth::user()->id,
                    ]);
                }
            }
            DB::commit();
            // PaymentGateway::proccess();
            $request->session()->forget('application_process');
            toastr()->success('Student Application Store successfully');
            // return redirect()->route('prospect.payment.process'); 
            return redirect()->back(); 
        }catch (Exception $e)
        {
            DB::rollBack();
            toastr()->error($e->getMessage());
            return back(); 
        }
    }
    public function getBack()
    {
        try{
            $application_process = request()->session()->get('application_process');
            $html = '';
            if($application_process->step == 2)
            {
                $application_process->step = 1;
                request()->session()->put('application_process', $application_process);
                $html = view('prospect.dashboard.ajax_partials.new_registration')->render();
                
            }else if($application_process->step == 3){
                $application_process->step = 2;
                request()->session()->put('application_process', $application_process);
                $html = view('prospect.dashboard.ajax_partials.new_basic_information')->render();
            }else if($application_process->step == 4){
                $application_process->step = 3;
                request()->session()->put('application_process', $application_process);
                $html = view('prospect.dashboard.ajax_partials.academic_qualification')->render();
            }
            return response([
                "success" => true,
                "html" => $html,
            ], 200);
        }catch (Exception $e)
        {
            return response([
                "success" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }
    public function processPayment()
    {
        try{
            PaymentGateway::proccess();
            return redirect()->route('prospect.payment.process'); 
        }
        catch (Exception $e) {
            toastr()->error($e->getMessage());
            return back(); 
        }
    }
    public function createOrder()
    {
        try{
            $gateway = GatewayDetail::where('type','Normal')->whereNull('user_id')->first();
            if(!Auth::user()->studentProfile->order_id)
            {
                $response = RazorPayService::storeOrder();
                if($response['success'])
                {
                    return response([
                        "success" => true,
                        "key_id" => $gateway ? $gateway->key_id : 'rzp_live_7K6wvuUTFOGlx9',
                        "merchant_name" => $gateway ? $gateway->merchant_name : 'MADHUSUDAN LAW UNIVERSITY',
                        "order_id" => $response['order_id'],
                        "phone" => Auth::user()->studentProfile->phone,
                        'email' => Auth::user()->email,
                        'amount' => Auth::user()->entrance_fee?Auth::user()->entrance_fee->exam_fee:0,
                        'name' => Auth::user()->studentProfile->first_name.' '.Auth::user()->studentProfile->middle_name.' '.Auth::user()->studentProfile->last_name,
                    ], 200);
                }else{
                    return response([
                        "success" => true,
                        "message" => $response['message'],
                    ], 500);

                }
            }else{
                return response([
                    "success" => true,
                    "key_id" => $gateway ? $gateway->key_id : 'rzp_live_7K6wvuUTFOGlx9',
                    "merchant_name" => $gateway ? $gateway->merchant_name : 'MADHUSUDAN LAW UNIVERSITY',
                    'amount' => Auth::user()->entrance_fee?Auth::user()->entrance_fee->exam_fee:0,
                    "order_id" => Auth::user()->studentProfile->order_id,
                    "phone" => Auth::user()->studentProfile->phone,
                    'email' => Auth::user()->email,
                    'name' => Auth::user()->studentProfile->first_name.' '.Auth::user()->studentProfile->middle_name.' '.Auth::user()->studentProfile->last_name,
                ], 200);
            }
        }
        catch (Exception $e) {
            return response([
                "success" => true,
                "message" => $e->getMessage(),
            ], 500);
        }
    }
}
