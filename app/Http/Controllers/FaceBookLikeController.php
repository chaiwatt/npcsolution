<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Helper\EmailBox;
use Illuminate\Support\Str;
use App\Models\FaceBookPage;
use Illuminate\Http\Request;
use App\Models\FaceBookPageLikeUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class FaceBookLikeController extends Controller
{
    public function getlist(){
        $facebookpages = FaceBookPage::get();
        return response()->json($facebookpages);
    }
    public function setcookie(Request $request){
        $id = $request->id;;
        $rnd = Str::random(32);
        $cookie = Cookie::queue("user".$id, $rnd, 1); //cookie expire in 60 minutes.
        $mail = $request->email;// 'joerocknpc@gmail.com';
        EmailBox::send($mail,'สมัครใช้งานโปรแกรม FB Page Like Exchange','สวัสดีค่ะ '.$mail.' <br><br> คุณได้สมัครใช้งานโปรแกรม FB Page Like Exchange กรุณายืนยันอีเมลก่อนใช้งาน คลิก <a href='.route('getcookie').'?c='.$rnd.'&u=user'.$id.'>ยืนยันอีเมล</a><br>โปรดยืนยันการใช้งานภายใน 60 นาทีหลังจากได้รับอีเมลนี้<br><br>ขอบคุณค่ะ<br>FB Page Like Exchange Team' . EmailBox::emailSignature());
      $user = FaceBookPageLikeUser::find($id);
      return response()->json($user);
    }
    public function getcookie(Request $request){
        $user = FaceBookPageLikeUser::find($request->user);
        if(!(Empty($user->email_verified_at))){
            $url ="https://www.google.com/search?q=FB+Page+Like+Exchange%3A+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A2%E0%B8%B7%E0%B8%99%E0%B8%A2%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%9A%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%A2%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7";
            return Redirect::to($url);
        }else{
            $inpcookie = preg_replace('/\s+/', '', $request->c);
            if($user->cookie == $inpcookie){
                $user->update([
                    'email_verified_at' => Carbon::now()->toDateString(),
                    'cookie' => null
                ]);
                $url = "https://www.google.com/search?q=FB+Page+Like+Exchange%3A+%E0%B8%AA%E0%B8%B3%E0%B9%80%E0%B8%A3%E0%B9%87%E0%B8%88%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A2%E0%B8%B7%E0%B8%99%E0%B8%A2%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7";
                return Redirect::to($url);
            }else{
                $url ="https://www.google.com/search?q=FB+Page+Like+Exchange%3A+%E0%B8%A5%E0%B8%B4%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%A2%E0%B8%B7%E0%B8%99%E0%B8%A2%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B8%AB%E0%B8%A1%E0%B8%94%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8";
                return Redirect::to($url);
            }
        }

    }
    public function userlogin(Request $request){
        
        $user = FaceBookPageLikeUser::where('email',$request->email)->first();
        if(Empty($user)){
            return response()->json($user);
        }else{
            $check = Hash::check($request->pass, $user->password);
            if(Empty($check)){
                $user = null;
                return response()->json($user);
            }else{
                return response()->json($user);
            }
        }
    }
    public function usersignup(Request $request){
        $check = FaceBookPageLikeUser::where('email',$request->email)->first();
        if(!Empty($user)){
            $user = null;
            return response()->json($user);
        }else{
            $rnd = Str::random(32);

            $user = new FaceBookPageLikeUser();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->pass) ;
            $user->cookie = $rnd;
            $user->save();

            $cookie = Cookie::queue("user".$user->id, $rnd, 60); //cookie expire in 60 minutes.
            EmailBox::send($user->email,'สมัครใช้งานโปรแกรม FB Page Like Exchange','สวัสดีค่ะ '.$user->email.' <br><br> คุณได้สมัครใช้งานโปรแกรม FB Page Like Exchange กรุณายืนยันอีเมลก่อนใช้งาน คลิก <a href='.route('getcookie').'?c='.$rnd.'&user='.$user->id.'>ยืนยันอีเมล</a><br>โปรดยืนยันการใช้งานภายใน 60 นาทีหลังจากได้รับอีเมลนี้<br><br>ขอบคุณค่ะ<br>FB Page Like Exchange Team' . EmailBox::emailSignature());
            return response()->json($user);
        }
    }
}
