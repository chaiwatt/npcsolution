<?php

namespace App\Http\Controllers;

use App\Models\Spam;
use App\Models\User;
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
            // 'g-recaptcha-response' => 'required'
        ]);
        $spams = Spam::get();

        foreach ($spams as $key => $spam) {
            if(strpos(strtolower($request->message), $spam->word) !== false){
                return redirect()->back()->withError('done');
            }
        }

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

        $users = User::where('type',1)->whereNotNull('linetoken')->get();

        foreach ($users as $key => $user) {
            $message = 'ผู้ติดต่อใหม่ ' . $request->name . ' โทร' . $request->phone  . ' อีเมล' . $request->email  . ' หน่วยงาน' . $request->company . ' ข้อความ' . $request->message  ;
            $this->LineSend($message , $user->linetoken);
        }
         return redirect()->back()->withSuccess('done');
    }

    public function LineSend($message,$lineapi){
        $mms =  trim($message); // ข้อความที่ต้องการส่ง
        date_default_timezone_set("Asia/Bangkok");
        $chOne = curl_init(); 
        curl_setopt( $chOne, CURLOPT_URL, 'https://notify-api.line.me/api/notify'); 
        // SSL USE 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
        //POST 
        curl_setopt( $chOne, CURLOPT_POST, 1); 
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms"); 
        curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', ); 
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec( $chOne ); 
        if(curl_error($chOne)) 
        { 
            // echo 'error:' . curl_error($chOne); 
        } 
        else { 
            $result_ = json_decode($result, true); 
            // echo "status : ".$result_['status']; echo "message : ". $result_['message'];
        } 
        curl_close( $chOne );   
        return ;
    }
}
