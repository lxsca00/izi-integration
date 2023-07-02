<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function createPayment()
    {
        $user = env('IZIPAY_USER', '');
        $password = env('IZIPAY_PASSWORD', '');
        $webservice = env('IZIPAY_ENDPOINT', '') . '/api-payment/V4/Charge/CreatePayment';
        $credentials = $user . ':' . $password;
        $token = base64_encode($credentials);

        $order = array(
            "amount"=>7000,
            "currency"=>"PEN",
            'orderId' => uniqid("MyOrderId"),
            "customer" => array(
            "email" => "sample@example.com"
            ));
        
        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . $token,
            'Content-Type' => 'application/json'
        ])->post($webservice, $order);

        return view('payment', [
            'response'=> $response->json(),
            'publicKey'=> env('IZIPAY_PUBLICKEY', '')
        ]);
    }

    public function addPayment(Request $request)
    {
        $data = json_decode($request->input('kr-answer'));

        $payment = Payment::create([
            'code' => $data->transactions[0]->uuid,
            'message' => $data->orderStatus,
            'result' => json_encode($data),
        ]);

        return view('success', [
            'response' => $data,
        ]);
    }
}
