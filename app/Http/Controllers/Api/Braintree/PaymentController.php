<?php

namespace App\Http\Controllers\Api\Braintree;

use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class PaymentController extends Controller
{
    public function generate(Request $request, Gateway $gateway){

        //dd($gateway->clientToken()->generate());

        $token = $gateway->clientToken()->generate();

        $data = [
            'success'   => true,
            'token'     => $token
        ];

        return response()->json($data, 200);

        return  'generate';
    }

    public function makePayment(Request $request, Gateway $gateway){

        $order = Order::find($request->order);

        // in this way, the amount is convert in tenth
        $amountCents = $order->amount;
        $order->amount = Order::amountConvert($amountCents);

        //dd($order);

        $result = $gateway->transaction()->sale([
            'amount'                => $order->amount,
            'paymentMethodNonce'    => $request->token,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        //dd($result);

        if($result->success){
            $data = [
            'success'   => true,
            'message'   => "Transaction successful!"
            ];
            return response()->json($data, 200);
        }
        else{
            $data = [
            'success'   => false,
            'message'   => "Transaction failed!"
            ];
            return response()->json($data, 401);
        }

        return  'make payment';
    }

}
