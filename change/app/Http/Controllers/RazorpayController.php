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
        $degreeCertificate = DegreeCertificate::where('degree', $Certificate->certificate)->first();
        // dd($degreeCertificate->price);
        return view('web.razorpay', compact('ID','degreeCertificate'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $certificate = OnlineCertificate::where('id', $request->certificate_id)->first();
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));

                $payment = Payment::create([
                    'certificate_id' => $certificate->id,
                    'amount' => $response['amount'] / 100,
                    'transation_date' => date('Y-m-d H:i:s'),
                    'transaction_number' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
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