<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Helper\EmailBox;
use App\Models\LikedPage;
use App\Models\Information;
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
    public function getlist(Request $request){
       $likedes = LikedPage::where('user_id',$request->user)->pluck('page_id')->toArray();
       $facebookpages = FaceBookPage::whereNotIn('id',$likedes)->orderBy('premium','desc')->limit(100)->get()->makeHidden(['created_at', 'updated_at']);
      //$likes  = LikedPage::where('user_id',$request->user)->get()->makeHidden(['created_at', 'updated_at']);
       $like = (object)['today' => 10,'all' => 20];
       $thumb = (object)['in' => 30,'out' => 50];
       return response()->json(array(
                            "facebookpages" => $facebookpages,
                            "like" => $like,
                            "thumb" => $thumb,
        ));
    }
    public function information(Request $request){
        $information = Information::first()->makeHidden(['id','created_at', 'updated_at']);;
        return response()->json($information);
     }
    // public function setcookie(Request $request){
    //     $id = $request->id;;
    //     $rnd = Str::random(32);
    //     $cookie = Cookie::queue("user".$id, $rnd, 1); //cookie expire in 60 minutes.
    //     $mail = $request->email;// 'joerocknpc@gmail.com';
    //     EmailBox::send($mail,'สมัครใช้งานโปรแกรม FB Page Like Exchange','สวัสดีค่ะ '.$mail.' <br><br> คุณได้สมัครใช้งานโปรแกรม FB Page Like Exchange กรุณายืนยันอีเมลก่อนใช้งาน คลิก <a href='.route('getcookie').'?c='.$rnd.'&u=user'.$id.'>ยืนยันอีเมล</a><br>โปรดยืนยันการใช้งานภายใน 60 นาทีหลังจากได้รับอีเมลนี้<br><br>ขอบคุณค่ะ<br>FB Page Like Exchange Team' . EmailBox::emailSignature());
    //   $user = FaceBookPageLikeUser::find($id);
    //   return response()->json($user);
    // }
    public function getcookie(Request $request){
        //$user = FaceBookPageLikeUser::find($request->user);
        // if(!(Empty($user->email_verified_at))){
        //     $url ="https://www.google.com/search?q=FB+Page+Like+Exchange%3A+%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A2%E0%B8%B7%E0%B8%99%E0%B8%A2%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%9A%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%A2%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7";
        //     return Redirect::to($url);
        // }else{
        //     $inpcookie = preg_replace('/\s+/', '', $request->c);
        //     if($user->cookie == $inpcookie){
        //         $user->update([
        //             'email_verified_at' => Carbon::now()->toDateString(),
        //             'cookie' => null
        //         ]);
        //         $url = "https://www.google.com/search?q=FB+Page+Like+Exchange%3A+%E0%B8%AA%E0%B8%B3%E0%B9%80%E0%B8%A3%E0%B9%87%E0%B8%88%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A2%E0%B8%B7%E0%B8%99%E0%B8%A2%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B9%81%E0%B8%A5%E0%B9%89%E0%B8%A7";
        //         return Redirect::to($url);
        //     }else{
        //         $url ="https://www.google.com/search?q=FB+Page+Like+Exchange%3A+%E0%B8%A5%E0%B8%B4%E0%B8%87%E0%B8%84%E0%B9%8C%E0%B8%A2%E0%B8%B7%E0%B8%99%E0%B8%A2%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%A5%E0%B8%AB%E0%B8%A1%E0%B8%94%E0%B8%AD%E0%B8%B2%E0%B8%A2%E0%B8%B8";
        //         return Redirect::to($url);
        //     }
        // }

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
            //$user->cookie = $rnd;
            $user->save();
           
            //$cookie = Cookie::queue("user".$user->id, $rnd, 60); //cookie expire in 60 minutes.
            //EmailBox::send($user->email,'สมัครใช้งานโปรแกรม FB Page Like Exchange','สวัสดีค่ะ '.$user->email.' <br><br> คุณได้สมัครใช้งานโปรแกรม FB Page Like Exchange กรุณายืนยันอีเมลก่อนใช้งาน คลิก <a href='.route('getcookie').'?c='.$rnd.'&user='.$user->id.'>ยืนยันอีเมล</a><br>โปรดยืนยันการใช้งานภายใน 60 นาทีหลังจากได้รับอีเมลนี้<br><br>ขอบคุณค่ะ<br>FB Page Like Exchange Team' . EmailBox::emailSignature());
            EmailBox::send($user->email,'สมัครใช้งานโปรแกรม FB Page Like Exchange','สวัสดีค่ะ '.$user->email.' <br><br> คุณได้สมัครใช้งานโปรแกรม FB Page Like Exchange 
            รหัสยืนยันการใช้งานของคุณคือ <br><h2>'.$request->rnd.'</h2>
            <br>ขอบคุณค่ะ<br>FB Page Like Exchange Team' . EmailBox::emailSignature());
            return response()->json($user);
        }
    }

    public function addpage(Request $request){
        $check = FaceBookPage::where('url',$request->url)->first();
        if(Empty($check)){
            $page = new FaceBookPage();
            $page->user_id = $request->userid;
            $page->pagename = $request->pagename;
            $page->url = $request->url;
            $page->save();
        }else{
            $page = null;   
        }
        return response()->json($page);
    }

    public function editpage(Request $request){
        FaceBookPage::find($request->pageid)->update([
            'pagename' => $request->value
        ]);
        $page = FaceBookPage::find($request->pageid);
        return response()->json($page);
    }
    public function deletepage(Request $request){
        FaceBookPage::find($request->pageid)->delete();
        $page = null;
        return response()->json($page);
    }
    public function verified(Request $request){
        $user = FaceBookPageLikeUser::find($request->user)->update([
            'email_verified_at' => Carbon::now()->toDateString(),
        ]);
        $user = FaceBookPageLikeUser::find($request->user);
        return response()->json($user);
    }
    public function likedpage(Request $request){
        $check = '';
        $likedids = array();
        $inputString=str_replace('[','',$request->pageid);
        $inputString=str_replace(']','',$inputString);
        $likedids = explode(',',$inputString);
        foreach ($likedids as $key => $likedid) {
            $check = LikedPage::where('page_id',$likedid)->where('user_id',$request->user)->first();
            if(Empty($check)){
                $likedpage = new LikedPage();
                $likedpage->page_id = $likedid;
                $likedpage->user_id = $request->user;
                $likedpage->save();
            }

        }
        $likedpages = LikedPage::where('user_id',$request->user)->get();
        return response()->json($likedpages);
    }

}


