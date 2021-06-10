<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function que(){
        return view('service.que');
    }
    public function training(){
        return view('service.training');
    }
}
