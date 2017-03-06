<?php

namespace App\Http\Controllers;

use Payways;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store()
    {
    	$this->validate(request(), [
	    	'gateway'     => 'required',
	    	'amount'      => 'required|numeric|min:1',
	    	'description' => 'required',
	    ]);

	    $response = Payways::driver(request('gateway'))
	    	->transaction(request()->only('amount', 'description'))
	    	->create()
	    	->process();

	    if ($response->isRedirect()) {
	    	$response->redirect();
	    }
    }
}
