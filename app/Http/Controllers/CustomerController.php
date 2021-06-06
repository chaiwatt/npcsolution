<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function createsave(Request $request){
         return redirect()->back()->withSuccess('done');
     

    }
}
