<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        return view('staff.home');
    }

    public function __construct(){
    $this->middleware('auth');
    $this->middleware('role:ROLE_STAFF');
    }
}


