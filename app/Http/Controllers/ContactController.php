<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SubScriber;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function createsave(Request $request){
        $this->validate(request(), [
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'message' => 'required', 
        ]);
        $check = Contact::where('email',$request->email)->first();
        if(empty($check)){
            $customer = new Contact();
            $customer->email = $request->email;
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->company = $request->company;
            $customer->message = $request->message;
            $customer->save();
        }

        $check = SubScriber::where('email',$request->email)->first();
        if (empty($check)) {
            $subscriber = new SubScriber();
            $subscriber->email = $request->email;
            $subscriber->save(); 
        }
       
         return redirect()->back()->withSuccess('done');
    }
}
