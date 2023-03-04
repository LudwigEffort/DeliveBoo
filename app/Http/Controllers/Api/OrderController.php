<?php

namespace App\Http\Controllers\Api;

use App\Dish;
use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway) {

        $token = $gateway->clientToken()->generate();

        $data = [
            'success' => true,
            'token' => $token,
        ];
        return response()->json($data, 200);
    }

    public function makePayment(OrderRequest $request, Gateway $gateway) {

        $dish = Dish::find($request->dish);

        $result = $gateway->transaction()->sale([
            'amount' => $dish->price,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true,
            ]
        ]);

        if ($result->success) {

            $data = [
                'success' => true,
                'message' => "Transazione eseguita con successo",
            ];
            return response()->json($data, 200);

        } else {

            $data = [
                'success' => false,
                'message' => 'Transazione fallita',
            ];

            return response()->json($data, 401);
        }
    }
}
