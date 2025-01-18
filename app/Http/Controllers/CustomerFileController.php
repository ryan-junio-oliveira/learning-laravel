<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerFileController extends Controller
{
    public function index(){
        return view('customer_file');
    }
}
