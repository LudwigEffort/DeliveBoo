<?php

namespace App\Http\Controllers\Api;

use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return  'make payment';
    }

}
