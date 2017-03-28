<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Selmonal\Payways\WebCallbackController;

class PaymentCallbackController extends WebCallbackController
{
    /**
     * Handle success transaction response.
     *
     * @param  Transaction $transaction
     * @param  Response $response
     * @return \Illuminate\Http\Response
     */
    protected function onSuccess($transaction, $response)
    {
        return view('thank-you', compact('transaction', 'response'));
    }

    /**
     * Handle failed transaction response.
     *
     * @param  Transaction $transaction
     * @param  Response $response
     * @return \Illuminate\Http\Response
     */
    protected function onFail($transaction, $response)
    {
        return view('errors.payment-failed', compact('transaction', 'response'));	
    }
}
