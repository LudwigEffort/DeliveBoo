<?php

namespace App\Http\Controllers\Api;

use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function generate(Request $request, Gateway $gateway){

        dd($gateway->clientToken());

        return  'generate';
    }

    public function makePayment(Request $request, Gateway $gateway){
        return  'make payment';
    }

}
