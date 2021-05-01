<?php

namespace App\Http\Controllers\Api;

use App\Models\LikedPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaceBookLikeController extends Controller
{
    public function test(){
        return response()->json('Hello'); 
    }
    public function likedpage(Request $request){
        $check = '';
        $likedids = array();
        $inputString=str_replace('[','',$request->likedpage);
        $inputString=str_replace(']','',$inputString);
        $likedids = explode(',',$inputString);
        foreach ($likedids as $key => $likedid) {
            $check = $check . ' <=> ' . $likedid;
            $likedpage = new LikedPage();
        }

      
        return response()->json($check);

        return  $request; 
    }
}
