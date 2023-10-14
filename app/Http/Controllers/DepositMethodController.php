<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositMethodController extends Controller
{
    public function index()
    {
        return view('dashboard.deposit-methods');
    }
}
