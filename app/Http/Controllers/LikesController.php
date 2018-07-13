<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Like;
class LikesController extends Controller
{
    public function like($id){
        Like::create([
            'user_id' => Auth::id(),
            'reply_id' => $id
        ]);
        Session::flash('success','Liked reply');
        return redirect()->back();
    }

    public function unlike($id){
        $like = Like::where('reply_id',$id)->where('user_id',Auth::id())->first();
        $like->delete();
        Session::flash('success','Unliked reply');
        return redirect()->back();
    }
}
