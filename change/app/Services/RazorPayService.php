<?php

namespace App\Services;

use App\Models\GatewayDetail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;

class RazorPayService
{
    public static function storeOrder()
    {
        try{
            $amount = Auth::user()->entrance_fee?Auth::user()->entrance_fee->exam_fee:0;
            if($amount > 0)
            {
                $gateway = GatewayDetail::where('type','Normal')->whereNull('user_id')->first();
                $key_id = $gateway ? $gateway->key_id : 'rzp_live_7K6wvuUTFOGlx9';
                $secret = $gateway ? $gateway->key_secret :'Edbmp2uSnI4IE7jHx4holFxy';
                $api = new Api($key_id, $secret);
                $order = $api->order->create(
                    array(
                        'amount' => $amount*100, 
                        'currency' => 'INR', 
                        'notes'=> array(
                            'key1'=> 'Student Profile Order For Admission',
                            'key2'=> ''
                        )
                    )
                );
                if($order && $order->id)
                {
                    $studentProfile = Auth::user()->studentProfile;
                    $studentProfile->update([
                        'order_id' => $order->id,
                        'amount' => $amount
                    ]);
                    return [
                        'success' => true,
                        'order_id' => $order->id,
                        'amount' => $amount,
                        'key_id' => $key_id,
                    ];
                }
                return [
                    'success' => false,
                    'message' => 'Something Went Wrong',
                ];

            }else{
                return [
                    'success' => false,
                    'message' => 'Contact Admin!',
                ];
            }
        }catch (Exception $e)
        {
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];

        }
    } 
}
