<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DegreeCertificate;
use App\Models\OnlineCertificate;
use App\Models\Payment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($id)
    {
        $ID = Crypt::decrypt($id);
        $Certificate = OnlineCertificate::find($ID);
        
        if (!$Certificate) {
            abort(404, 'Certificate not found');
        }
        
        $degreeCertificate = DegreeCertificate::where('degree_id', $Certificate->certificate)->first();
        
        if (!$degreeCertificate) {
            abort(404, 'Degree certificate configuration not found');
        }
        
        // Get the actual degree information
        $degree = \App\Models\Degree::find($Certificate->certificate);
        if (!$degree) {
            abort(404, 'Degree not found');
        }
        
        // Get urgent mode fee if urgent mode is selected
        $urgentFee = 0;
        if ($Certificate->urgent_mode) {
            $urgentMode = \App\Models\UrgentMode::first();
            if ($urgentMode) {
                $urgentFee = $urgentMode->amount;
            }
        }
        
        $basePrice = $degreeCertificate->price;
        $totalPrice = $basePrice + $urgentFee;
        
        // Store pricing info in session for later use
        session([
            'certificate_pricing' => [
                'base_price' => $basePrice,
                'urgent_fee' => $urgentFee,
                'total_price' => $totalPrice,
                'certificate_id' => $Certificate->id
            ]
        ]);
        
        // dd($degreeCertificate->price);
        $key_id ='rzp_live_undbzXL0KAgXPc';
        $secret ='HJtUPAoPeyzQUUTFs6CwuNKI';
        $api = new Api($key_id, $secret);
        $order = $api->order->create(
            array(
                'amount' => $totalPrice * 100, 
                'currency' => 'INR', 
                'notes'=> array(
                    'key1'=> 'Student Online Certificate Order.',
                    'key2'=> ''
                )
            )
        );
        return view('web.razorpay', compact('ID','degreeCertificate','order','basePrice','urgentFee','totalPrice','degree'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $certificate = OnlineCertificate::where('id', $request->certificate_id)->first();
        $key_id ='rzp_live_undbzXL0KAgXPc';
        $secret = 'HJtUPAoPeyzQUUTFs6CwuNKI';
        $api = new Api($key_id, $secret);

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id']);
                
                // Get pricing information from session
                $pricing = session('certificate_pricing', []);
                $basePrice = $pricing['base_price'] ?? 0;
                $urgentFee = $pricing['urgent_fee'] ?? 0;
                
                $payment = Payment::create([
                    'certificate_id' => $certificate->id,
                    'amount' => $basePrice, // Store base price only
                    'urgent_fee' => $urgentFee, // Store urgent fee separately
                    'transation_date' => date('Y-m-d H:i:s'),
                    'transaction_number' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'order_id' => $request->order_id,
                    'json_response' => json_encode((array)$response)
                ]);

                $certificate->payment = 'completed';
                $certificate->save();

                Session::put('success', 'Payment successful');
                return redirect()->route('onlineCertificate');
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}
