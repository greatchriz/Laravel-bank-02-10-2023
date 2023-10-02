<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    /*account*/

    public function account()
    {
        $user = auth()->user();
        $cryptoWalletDetails = $user->cryptoWalletDetails;
        $atmCardDetails = $user->atmCardDetails;

        /*Merge the two details into one array*/

        $paymentDetails = array_merge($cryptoWalletDetails->toArray(), $atmCardDetails->toArray());

        return view('dashboard.account', compact('paymentDetails'));

        // return view('dashboard.account', compact('cryptoWalletDetails', 'atmCardDetails'));
    }
}
