<?php
namespace App\Helper;

use App\Mail\FaceBookMail;
use Illuminate\Support\Facades\Mail;

class EmailBox
{
    public static function send($mailto,$title,$message){
        $data = [
            'sendermail' => env('MAIL_FROM_ADDRESS'),
            'sendername' => 'FB Page Like Exchange',
            'title' => $title,
            'message' => $message
            ];
            Mail::to($mailto)->send(new FaceBookMail($data));
    } 

    public static function emailSignature(){
        $data ='<span style="color:#6C6A6A;"><br>--
        <br>
        <br>โปรแกรม FB Page Like Exchanger
        <br>facebook: www.facebook.com
        <br>email: contact@npcsolution.com
        <br>website: www.npcsolution.com</span>' ;
            
        return $data;
    } 
}