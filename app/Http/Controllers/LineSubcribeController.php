<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LineClient;
use Illuminate\Http\Request;

class LineSubcribeController extends Controller
{
    public function LineSubcribe(){
        $info = User::first()->name;
        $url = "https://notify-bot.line.me/oauth/authorize?".
            http_build_query(array(
                'response_type' => 'code', // ไม่แก้ไขส่วนนี้
                'client_id' => LineClient::first()->client_id,
                'redirect_uri' => route('line.callback'),  
                'scope' => 'notify', // ไม่แก้ไขส่วนนี้
                'state' => $info
            )
        );
        header("Location: {$url}"); // ยิงไปหน้าการเชื่อมต่อบริการ
        exit;
    }

    public function LineCallback(Request $request){
        $state = $request->input('state') ; //Input::get('state');
        $lineclient = LineClient::first();

        $tokenURL = "https://notify-bot.line.me/oauth/token";
      
        $headers = array(
            'Content-Type: application/x-www-form-urlencoded'
        );
        $data = array(
            'grant_type' => 'authorization_code', // ไม่แก้ไขส่วนนี้
            'code' =>  $request->input('code') , //Input::get('code'),
            'redirect_uri' => url('/line/linecallback'),
            'client_id' => $lineclient->client_id,
            'client_secret' => $lineclient->client_secret               
        );
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $tokenURL);
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $ch );
        $result = json_decode($result,TRUE);
        curl_close( $ch );
        if($result['status']==200){
            User::first()->update([
            'linetoken' => $result['access_token'],
            ]);
        }
        return ;
        // $user = User::first();
        // return view('success')->withUser($user)->withResult($result)->withLineclient($lineclient);
    }

    public function LineSend(){
        $lineapi = User::first()->linetoken ;
        if(Empty($lineapi)){
            return 'ยังไม่มี access_token';
        }
        $message = 'ข้อความทดสอบ';
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
        //Check error 
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
