<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.home');
    }

    public function __construct()
    {
    $this->middleware('auth');
    $this->middleware('role:ROLE_CUSTOMER');
    }
}


